<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LinksRequest;
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
        $links = $this->link->all();

        return view('admin.links.links',compact('links'));
    }

    public function create (  )
    {
        return view('admin.links.create');
    }

    public function store ( LinksRequest $request )
    {
        $this->link->create($request->only('title','url','description'));

        return redirect()->route('links.index');
    }

    public function edit ( $id )
    {
        $link = $this->link->find($id,['id','title','url','description']);

        return view('admin.links.edit',compact('link'));
    }

    public function update ( LinksRequest $request,$id )
    {
        $this->link->where('id',$id)->update($request->only('title','url','description'));

        return redirect()->route('links.index');
    }

    public function destroy ( $id )
    {
        $link = $this->link->find($id,['id','is_show','title']);

        $link->is_show = !$link->is_show;
        $link->save();

        return $this->sendSuccessResponse($link->only('is_show','title'));

    }
}
