<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use App\Models\Donasi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;
use App\Models\Prove;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use App\Models\Setting;

class DonasiController extends Controller
{
    public function store(Request $request)
    {
        error_reporting(0);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first())->withInput();
        }

        if (!empty($request->custom)) {
            $amount = $request->custom;
        } else {
            $amount = $request->amount;
        }

        DB::beginTransaction();
        $password ='-';
        $user = User::whereEmail($request->email)->first();
        if (empty($user)) {
            $split = explode(' ', trim($request->name));
            $password =  strtolower($split[0]) . $request->phone;
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($password),
                'phone' => $request->phone,
            ]);
        }
        $nomor = Str::random(10);;
        $donasi = Donasi::create([
            'user_id' => $user->user_id,
            'program_id' => $request->program_id,
            'bank_id' => $request->bank,
            'amount' => $amount,
            'status' => 0,
            'nomor' => $nomor,
        ]);

        try{
            Mail::to($user->email)->send(new InvoiceMail($user, $donasi->program, $donasi, $password));
        }catch(\Exception $e){
            DB::rollback();
            return redirect()->back()->with('error', 'Alamat email tidak ditemukan');
        }

        try{
        // whatsapp
        $sid = "AC135de01b70a30b236ffb462c249601bf"; // Your Account SID from www.twilio.com/console
        $token = "9dce8c1821c204f4d5c57d2a60876b87"; // Your Auth Token from www.twilio.com/console

        $client = new Client($sid, $token);

        $date = Carbon::parse($donasi->created_at)->isoFormat('D MMMM Y');
        $amount = number_format($donasi->amount, 0, ',', '.');
        $bank = $donasi->bank;
        $message = $client->messages
            ->create(
                // "whatsapp:" . $request->phone, // to
                "+62".$request->phone, // test
                [
                    // "from" => "+19034209810",
                    "from" => "+19034209810",
                    "body" => "Silahkan transfer atas invoice #".$nomor." ke ".$bank->bank." ".$bank->number."  an. " . $bank->name . ", sejumlah Rp.".$amount." (mohon transfes seniali tersebut). SMS : 081212936528 CS : cs@globalmoeslimcharity.com  globalmoeslimcharity.com"
                ]
            );
        // print($message);
        // return $message;
        }catch(\Exception $e){
            return redirect()->back()->with('error', 'No HP tidak ditemukan');
        }
        DB::commit();
        // dd($donasi);
        return redirect()->route('program.invoice', $donasi->donasi_id)->with('success', 'Terimakasih, Invoice Donasi sudah dikirim ke email anda');
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
        // $sid = "AC135de01b70a30b236ffb462c249601bf"; // Your Account SID from www.twilio.com/console
        // $token = "9dce8c1821c204f4d5c57d2a60876b87"; // Your Auth Token from www.twilio.com/console

        // $client = new Client($sid, $token);
        // $message = $client->messages
        //     ->create(
        //         // "whatsapp:" . $request->phone, // to
        //         "+62".$request->phone, // test
        //         [
        //             // "from" => "+19034209810",
        //             "from" => "+19034209810",
        //             "body" => "Invoice Donasi \n Tanggal : " . $date . "\n Bank : " . $bank->bank . "\n Rekening Bank : " . $bank->number . "\n Atas Nama : " . $bank->name . "\n Jumlah Donasi : " . $amount
        //         ]
        //     );
        return redirect()->back()->with('success','Terimakasih bukti pembayaran anda telah kami terima.');
    }
    
}
