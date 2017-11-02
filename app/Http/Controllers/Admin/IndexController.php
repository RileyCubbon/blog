<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index (  )
    {
        return view('admin.index.index');
    }

    public function home (  )
    {
        return view('admin.index.home');
    }

    public function users (  )
    {
        return view('admin.users.users');
    }

    public function userInfo (  )
    {
        return view('admin.users.info');
    }

    public function category (  )
    {
        return view('admin.categories.categories');
    }

    public function articles (  )
    {
        return view('admin.articles.articles');
    }

    public function articleCreate (  )
    {
        return view('admin.articles.create');
    }

    public function notification (  )
    {
        return view('admin.messages.notification');
    }

    public function board (  )
    {
        return view('admin.messages.message_board');
    }

}
