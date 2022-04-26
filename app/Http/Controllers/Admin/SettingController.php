<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Models\Setting;
// use App\Models\footer;
use Illuminate\Support\Facades\Validator;



class SettingController extends Controller
{
    
    public function index(){
        $header = Setting::first();
        // $footer = Footer::first();
        return view('admin.setting.index',compact('header'));
    }
    public function setting(Request $request,$setting_id){
        $validator = Validator::make($request->all(), [
            'kontak1_name'           => 'required',
            'kontak1_phone'          => 'required',
            'kontak2_name'           => 'required',
            'kontak2_phone'          => 'required',
            'email'                  => 'required',
            'link_fb'                => 'required',
            'link_twitter'           => 'required',
            'link_ig'                => 'required',
            'link_yt'                => 'required',
            'link_nav'               => 'required',
            'address'                => 'required',
            'bantuan'                => 'required',
            'keterangan'             => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first())->withInput();
        }

        $data = $request->only([
            'kontak1_name',
            'kontak1_phone',
            'kontak2_name',
            'kontak2_phone',
            'email',
            'link_fb',
            'link_twitter',
            'link_ig',
            'link_yt',
            'link_nav',
            'address',
            'bantuan',
            'keterangan',
        ]);
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('assets/images') . '/' . $name);
            $data['logo'] = $name;
        }
        Setting::where('setting_id','=',$setting_id)->update($data);
// dd($header_id);
        return redirect()->back()->with('success', 'Setting berhasil dirubah');
    }
    
}
