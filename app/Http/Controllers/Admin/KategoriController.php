<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Models\Kategori;
use Illuminate\Support\Facades\Validator;



class KategoriController extends Controller
{
    
    public function index(){
        $kategori = Kategori::get();
        return view('admin.kategori.index',compact('kategori'));
    }
    public function create()
    {
        return view('admin.kategori.create');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'image' => 'required|mimes:png,jpg',
            'keterangan' => 'required',
            'kode' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.kategori.create')->with('error', $validator->errors()->first())->withInput();
        }

        $data = $request->only([
            'nama',
            'keterangan',
            'kode'
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/kategori') . '/' . $name);
            $data['image'] = $name;
        }
        Kategori::create($data);

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori baru berhasil dibuat');
    }
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.show', compact('kategori'));
    }
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'image' => 'mimes:png,jpg',
            'keterangan' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.kategori.edit', $id)->with('error', $validator->errors()->first())->withInput();
        }

        $kategori = Kategori::findOrFail($id);

        $data = $request->only([
            'name',
            'keterangan',
            'kode'
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/kategori') . '/' . $name);
            $data['image'] = $name;
        }

        $kategori->update($data);

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil diubah');
    }
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);

        $image = public_path('images/kategori/' . $kategori->image);
        if (file_exists($image)) {
            unlink($image);
        }

        $kategori->delete();

        return redirect()->route('admin.kategori.index')->with('success', 'Kategori berhasil dihapus');
    }
}
