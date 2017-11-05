<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index (  )
    {
        $user = \Auth::guard('admin')->user();
        return view('admin.index.index',compact('user'));
    }

    public function home (  )
    {
        return view('admin.index.home');
    }
}
