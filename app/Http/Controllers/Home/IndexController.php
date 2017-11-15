<?php

namespace App\Http\Controllers\Home;

use App\Model\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    protected $article;

    public function __construct ( Article $article )
    {
        $this->article = $article;
    }

    public function index ()
    {
        $articles = $this->article->showAllArticles()->get();

        return view('home.index.index',compact('articles'));
    }
}
