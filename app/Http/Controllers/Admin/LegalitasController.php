<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Legalitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class LegalitasController extends Controller
{
    public function index()
    {
        $data = Legalitas::first();
        return view('admin.legalitas.index', compact('data'));
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'              => 'required',
            'description'       => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first())->withInput();
        }
        $data = [
            'name'=>$request->name,
            'description'=>$request->description,
        ];
        Legalitas::where('legalitas_id','=',$request->id)->update($data);

        return redirect()->back()->with('success', 'Legalitas berhasil Ubah')->withInput();
    }
}