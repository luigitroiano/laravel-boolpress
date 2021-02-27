<?php

namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->get();
        return view('article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('article.create', compact('tags', 'categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validation = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'subtitle' => 'required',
            'author' => 'required',
            'reading_time' => 'required',
            'category_id' => 'required',
            'tags' => 'exists:tags,id'
        ]);
        //dd($validation);
        Article::create($validation);
        $article = Article::orderBy('id', 'desc')->first();
        $article->tags()->attach($request->tags);
        
        // $article = new Article;
        // $article->title = request('title');
        // $article->body = request('body');
        // $article->subtitle = request('subtitle');
        // $article->author = request('author');
        // $article->reading_time = request('reading_time');
        // $article->category = request('category');

        //dd(request('title'), request('body'));
        // $article->save();
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $tags = Tag::all();
        $categories = Category::all();

        return view('article.edit', compact('article', 'tags', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validation = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
            'reading_time' => 'required',
            'category_id' => 'required',
            'tags' => 'exists:tags,id'
        ]);
        $article->update($validation);
        $article->tags()->sync($request->tags);
        
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
