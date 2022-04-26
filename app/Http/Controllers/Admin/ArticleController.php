<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'        => 'required',
            'image'        => 'required|mimes:png,jpg',
            'published_at' => 'required',
            'source_url'   => 'required',
            'content'      => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.article.create')->with('error', $validator->errors()->first())->withInput();
        }

        $data = $request->only([
            'title',
            'published_at',
            'source_url',
            'content'
        ]);
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/article') . '/' . $name);
            $data['image'] = $name;
        }

        Article::create($data);

        return redirect()->route('admin.article.index')->with('success', 'Artikel baru berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title'        => 'required',
            'image'        => 'mimes:png,jpg',
            'source_url'   => 'required',
            'published_at' => 'required',
            'content'      => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.article.edit', $id)->with('error', $validator->errors()->first())->withInput();
        }

        $article = Article::findOrFail($id);

        $data = $request->only([
            'title',
            'published_at',
            'source_url',
            'content',
        ]);
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Uuid::uuid4() . '.' . $file->getClientOriginalExtension();
            move_uploaded_file($file, public_path('images/article') . '/' . $name);
            $data['image'] = $name;
        }

        $article->update($data);

        return redirect()->route('admin.article.index')->with('success', 'Artikel berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        $image = public_path('images/article/' . $article->image);
        if (file_exists($image)) {
            unlink($image);
        }

        $article->delete();

        return redirect()->route('admin.article.index')->with('success', 'Artikel berhasil dihapus');
    }
}
