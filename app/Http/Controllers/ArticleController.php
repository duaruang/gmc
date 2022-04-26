<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Bank;
use App\Models\Program;
class ArticleController extends Controller
{

    public function index()
    {
        $now = Carbon::now();
        $articles = Article::whereDate('published_at', '<=', $now)->paginate(9);
        $programs = Program::limit(2)->get();
        // return view('article.index', compact('articles'));
        $setting = Setting::first();
        $bank = Bank::all();
        return view('article.index', compact('articles','setting','bank','programs'));
    }

    public function show($slug)
    {
        $article = Article::whereSlug($slug)->firstOrFail();
        $now = Carbon::now();
        $setting = Setting::first();
        $programs = Program::limit(2)->get();
        $bank = Bank::all();
        $news = Article::whereDate('published_at', '<=', $now)
            ->orderBy('published_at', 'DESC')->limit(3)->get();
        // return view('article.show', compact('article'));
        return view('article.show', compact('article', 'news','setting','bank','programs'));
    }
}
