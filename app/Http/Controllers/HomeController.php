<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Donasi;
use App\Models\Program;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Bank;
use App\Models\Relawan;
use App\Models\Management;
use App\Models\Legalitas;
use App\Models\Lain;
use App\Models\Video;
use App\Models\About;
use App\Models\Setting;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $program_count = Program::count();
        $user_count = User::count();
        $donasi_count = Donasi::whereStatus(2)->sum('amount');

        $program_count = $program_count > 100 ? floor($program_count / 100) * 100 : $program_count;
        $user_count = $user_count > 100 ? floor($user_count / 100) * 100 : $user_count;

        $now = Carbon::now();
        $articles = Article::whereDate('published_at', '<=', $now)->limit(3)->get();
        $programs = Program::get();
        $about = About::first();
        $slider = Slider::get();
        $setting = Setting::first();
        $lain = Lain::first();
        
        return view('home', compact('lain','setting','slider','programs', 'articles', 'program_count', 'user_count', 'donasi_count', 'about'));
    }
    public function about(){
        $setting = Setting::first();
        $legal = Legalitas::first();
        $management = Management::get();
        $lain = Lain::first();
        $about = About::first();
        return view('about',compact('legal','management','about','setting','lain'));
    }
    public function manage(){
        $data = Management::get();
        $setting = Setting::first();
        return view('asting.profile.manage',compact('data','setting'));
    }
    public function view(Request $request){
        $setting = Setting::first();
        $data = Management::where('management_id','=',$request->id)->first();
        return view('asting.profile.modals.modal',compact('data','setting'));
    }
    public function legal(){
        $setting = Setting::first();
        $data = Legalitas::first();
        return view('asting.profile.legal',compact('data','setting'));
    }

    public function video(){
        $lain = Lain::first();
        $videos = Video::all();
        $setting = Setting::first();
        $programs = Program::limit(2)->get();
        $bank = Bank::all();
        return view('video',compact('videos','setting','lain','bank','programs'));
    }
}
