<?php

namespace App\Http\Controllers;

use App\Mail\RelawanMail;
use App\Models\Relawan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;
use Ramsey\Uuid\Uuid;
use App\Models\Setting;
class RelawanController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('relawan',compact('setting'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required|unique:relawan,email',
            'phone' => 'required',
            'birth_date' => 'required|date_format:Y-m-d',
            'address' => 'required',
            'ktp' => 'required|mimes:png,jpg',
            'photo' => 'required|mimes:png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect()->route('relawan.index')->with('error', $validator->errors()->first());
        }
        
        $photo = $request->file('photo');
        $name = Uuid::uuid4() . '.' . $photo->getClientOriginalExtension();
        move_uploaded_file($photo, public_path('images/photo') . '/' . $name);
        $photo = $name;
        
        $ktp = $request->file('ktp');
        $name = Uuid::uuid4() . '.' . $ktp->getClientOriginalExtension();
        move_uploaded_file($ktp, public_path('images/ktp') . '/' . $name);
        $ktp = $name;

        $relawan = Relawan::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'address' => $request->address,
            'skill' => $request->skill,
            'hoby' => $request->hoby,
            'work_exp' => $request->work_exp,
            'organization_exp' => $request->organization_exp,
            'last_education' => $request->last_education,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'ktp' => $ktp,
            'photo' => $photo,
            'status' => 0,
        ]);
        
        try{
            Mail::to($request->email)->send(new RelawanMail($relawan));
        }catch(\Exception $e){
            DB::rollback();
            return redirect()->back()->with('error', 'Alamat email tidak ditemukan');
        }
        
        try{
        // whatsapp
        $sid = "AC135de01b70a30b236ffb462c249601bf"; // Your Account SID from www.twilio.com/console
        $token = "9dce8c1821c204f4d5c57d2a60876b87"; // Your Auth Token from www.twilio.com/console

        $client = new Client($sid, $token);
        $body = "Pengajuan Relawan \n";
        $body .= "Nama : " . $relawan->name . "\n";
        $body .= "Email : " . $relawan->email . "\n";
        $body .= "Whatsapp : " . $relawan->whatsapp . "\n";
        $body .= "Tgl Lahir : " . Carbon::parse($relawan->birth_date)->isoFormat('DD MMMM YYYY') . "\n";
        $body .= "Alamat : " . $relawan->address . "\n";
        $body .= "Tentang Pekerjaan : " . $relawan->about . "\n";
        $message = $client->messages
            ->create(
                "whatsapp:+628988446891", // to
                [
                    "from" => "whatsapp:+14155238886",
                    "body" => $body
                ]
            );
            
        }catch(\Exception $e){
            DB::rollback();
            return redirect()->back()->with('error', 'No HP tidak ditemukan');
        }

        return redirect()->route('relawan.index')->with('success', 'Pengajuan sudah terkirim ke admin gmc.');
    }
}
