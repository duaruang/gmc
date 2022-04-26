<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donasi;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Models\User;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donasi::all();
        return view('admin.donation.index', compact('donations'));
    }

    public function show($id)
    {
        $donation = Donasi::find($id);
        return view('admin.donation.show', compact('donation'));
    }

    public function approve($id)
    {
        $donasi = Donasi::findOrFail($id);
        $donasi->update([
            'admin_id' => auth()->guard('admin')->user()->admin_id,
            'status' => 2
        ]);
        $user = User::where('user_id', '=', $donasi->user_id)->first();
        // whatsapp
        $sid = "AC135de01b70a30b236ffb462c249601bf"; // Your Account SID from www.twilio.com/console
        $token = "9dce8c1821c204f4d5c57d2a60876b87"; // Your Auth Token from www.twilio.com/console

        $client = new Client($sid, $token);
        $body = "Terima Kasih donasi anda di bawah ini sudah di setujui \n";
        $body .= "Program : " . $donasi->program->title . "\n";
        $body .= "Bank : " . $donasi->bank->bank . "\n";
        $body .= "No Rekening : " . $donasi->bank->number . "\n";
        $body .= "Atas Nama : " . $donasi->bank->name . "\n";
        $body .= "Jumlah Donasi : " . number_format($donasi->amount, 0, ',', '.') . "\n";
        $message = $client->messages
            ->create(
                "+62" . $user->phone, // to
                [
                    "from" => "+19034209810",
                    "body" => "Terimakasih " . $user->name . ", Sedekah sebesar Rp. " . number_format($donasi->amount, 0, ',', '.') . " telah kami terima pada " . $donasi->updated_at . ". Semoga membawa keberkahan pada Bapak/Ibu sekeluarga. mari nikmati kemudahan berdonasi melalui website GMC dengan masuk ke link berikut : https://globalmoeslimcharity.com/"
                ]
            );

        return redirect()->route('admin.donation.index')->with('success', 'Donasi berhasil dikonfirmasi');
    }
}
