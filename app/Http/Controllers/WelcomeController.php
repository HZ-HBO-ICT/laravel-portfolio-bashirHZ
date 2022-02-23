<?php

namespace App\Http\Controllers;

use App\Models\Article;

class WelcomeController
{

    public  function show() {
        return view('welcome', [
            'articles' => Article::take(3)->latest()->get()
        ]);
    }
}
