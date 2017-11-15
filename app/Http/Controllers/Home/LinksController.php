<?php
/**
 * Created by PhpStorm.
 * User: zjj
 * Date: 2017/11/14
 * Time: 20:05
 */

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Model\Link;

class LinksController extends Controller
{
    protected $link;

    public function __construct ( Link $link )
    {
        $this->link = $link;
    }

    public function index (  )
    {
        $links = $this->link->where('is_show',1)->get(['title','url','description']);

        return view('home.link.link',compact('links'));
    }
}