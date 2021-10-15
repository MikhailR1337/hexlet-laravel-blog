<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $tags = ['обучение', 'программирование', 'php', 'oop'];
        $articles = \App\Models\Article::all();

        return view('about', ['tags' => $tags, 'articles' => $articles]);
    }

    public function welcome()
    {
        return view('welcome');
    }
}
