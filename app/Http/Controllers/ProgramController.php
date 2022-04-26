<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Donasi;
use App\Models\Program;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Setting;
class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::paginate(9);
        $setting = Setting::first();
        // return view('program', compact('programs'));
        return view('asting.program.index', compact('programs','setting'));
    }

    public function kategori($kategori)
    {
        $setting = Setting::first();
        //$programs = Program::whereKategoriId($kategori)->paginate(9);;
        // return view('view', compact('program', 'banks'));
        return view('asting.program.index', compact('programs','setting'));
    }

    public function show($slug)
    {
        $program = Program::whereSlug($slug)->firstOrFail();
        $banks = $program->bank;
        $setting = Setting::first();
        // return view('view', compact('program', 'banks'));
        return view('asting.program.show', compact('program', 'banks','setting'));
    }

    public function invoice($id)
    {
        $donasi = Donasi::findOrFail($id);
        $user = $donasi->user;
        $program = Program::findOrFail($donasi->program_id);
        $setting = Setting::first();
        // return view('invoice', compact('program', 'donasi'));
        return view('asting.program.invoice', compact('program', 'donasi','setting'));
    }

    public function comment(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $program = Program::whereSlug($slug)->firstOrFail();
        $program->comments()->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->route('program.show', $slug)->with('success', 'Komentar berhasil di kirim');
    }
}
