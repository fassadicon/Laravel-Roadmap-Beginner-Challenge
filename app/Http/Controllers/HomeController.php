<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('category', 'tags')->latest()->get();
        return view('pages.home', compact('articles'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('pages.article', compact('article'));
    }
}
