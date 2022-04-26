<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donasi;
use App\Models\Prove;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Validator;

class DonationController extends Controller
{
    public function index()
    {
        $donations = auth()->user()->donations;
        return view('member.donation.index', compact('donations'));
    }
    public function view($id){
        $donasi = Donasi::where('donasi_id','=',$id)->first();
        return view('member.donation.view',compact('donasi'));
    }
    public function prove(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'donasi_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first())->withInput();
        }
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/prove') . '/' . $name);
            $data['image'] = $name;
            
        }
        $data = [
            'donasi_id' => $request->donasi_id,
            'image' => $name
        ];
        $cek = Prove::where('donasi_id','=',$request->donasi_id)->count();
        if($cek != 0){
            Prove::where('donasi_id','=',$request->donasi_id)->update($data);
        }else{
            Prove::create($data);
        }
        Donasi::where('donasi_id','=',$request->donasi_id)->update(['status'=> '1']);
        // dd($data);
        return redirect()->back()->with('success','Terimakasih bukti pembayaran anda telah kami terima.');
    }
}
