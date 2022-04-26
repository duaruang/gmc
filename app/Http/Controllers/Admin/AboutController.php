<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::first();
        return view('admin.about.index', compact('data'));
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required',
            'description'       => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first())->withInput();
        }

        $data = $request->only([
            'title',
            'subtitle',
            'description',
            'home_title',
            'home_desc',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/tentang') . '/' . $name);
            $data['image'] = $name;
        }

        if ($request->hasFile('home_image')) {
            $file = $request->file('home_image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/tentang') . '/' . $name);
            $data['home_image'] = $name;
        }

        About::where('about_id','=',$request->id)->update($data);

        return redirect()->back()->with('success', 'Keterangan Tentang Kami berhasil Ubah')->withInput();
    }
}