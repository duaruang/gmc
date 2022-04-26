<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Management;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class ManagementController extends Controller
{
    public function index()
    {
        $data = Management::all();
        return view('admin.management.index', compact('data'));
    }
    public function new()
    {
        return view('admin.management.create');
    }
    public function show($id)
    {
        $data = Management::where('management_id','=',$id)->first();
        return view('admin.management.show', compact('data'));
    }
    public function update($id)
    {
        $data = Management::where('management_id','=',$id)->first();
        return view('admin.management.edit', compact('data'));
    }
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'              => 'required',
            'jabatan'           => 'required',
            'description'       => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first())->withInput();
        }
        $data = [
            'name'=>$request->name,
            'jabatan'=>$request->jabatan,
            'description'=>$request->description,
        ];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/management') . '/' . $name);
            $data['image'] = $name;
        }
        Management::where('management_id','=',$request->id)->update($data);

        return redirect()->route('admin.management.index')->with('success', 'Management baru berhasil Ubah')->withInput();
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'              => 'required',
            'jabatan'           => 'required',
            'image'             => 'required|mimes:png,jpg,jpeg',
            'description'       => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('admin.management.create')->with('error', $validator->errors()->first())->withInput();
        }
        $data = [
            'name'          =>$request->name,
            'jabatan'       =>$request->jabatan,
            'description'   =>$request->description,
        ];
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/management') . '/' . $name);
            $data['image'] = $name;
        }
        Management::create($data);

        return redirect()->route('admin.management.index')->with('success', 'Management baru berhasil dibuat')->withInput();
    }
    public function destroy($id)
    {
        Management::where('management_id','=',$id)->delete();
        return redirect()->back()->with('success', 'Management berhasil dihapus')->withInput();
    }
}