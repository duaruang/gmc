<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class LainController extends Controller
{
    public function index()
    {
        $data = Lain::first();
        return view('admin.lain.index', compact('data'));
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'caption1'          => 'required',
            'caption2'          => 'required',
            'big_caption1'      => 'required',
            'big_caption2'      => 'required',
            'caption_banner'    => 'required',
            'link_button'       => 'required',
            'article_desc'       => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first())->withInput();
        }
        $data = [
            'caption1'=>$request->caption1,
            'caption2'=>$request->caption2,
            'big_caption1'=>$request->big_caption1,
            'big_caption2'=>$request->big_caption2,
            'caption_banner'=>$request->caption_banner,
            'link_button'=>$request->link_button, 
            'article_desc'=>$request->article_desc,
            'postdig_text'=>$request->postdig_text,
            'postdig_button_link'=>$request->postdig_button_link,
            'postdig_button_name'=>$request->postdig_button_name
        ];

        if( $request->has('postdig_active') ){
            $data['postdig_active'] = 1;
        }else{
            $data['postdig_active'] = 0;
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('assets/images') . '/' . $name);
            $data['image'] = $name;
        }

        if ($request->hasFile('postdig_image')) {
            $file = $request->file('postdig_image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('assets/images') . '/' . $name);
            $data['postdig_image'] = $name;
        }
        Lain::where('lain_id','=',$request->id)->update($data);

        return redirect()->back()->with('success', 'Data berhasil Ubah')->withInput();
    }
}