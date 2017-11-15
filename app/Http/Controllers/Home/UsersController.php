<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\UserRequest;
use App\Model\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    protected $user;

    public function __construct ( User $user )
    {
        $this->user = $user;
    }

    public function verify ( $message )
    {
        $user = $this->user->where('verify_string', $message)->first([ 'id', 'verify_string', 'is_verify' ]);

        if ( !is_null($user) && $user->update([ 'is_verify' => 1 ]) ) {
            $user->update([ 'verify_string' => str_random(48) ]);
            session()->flash('verify', '1');
            \Auth::loginUsingId($user->id);
        }

        return redirect()->route('index');
    }

    public function info ()
    {
        $user = \Auth::user();

        return view('home.users.info', compact('user'));
    }

    public function edit ()
    {
        $user = \Auth::user();

        return view('home.users.change', compact('user'));
    }

    public function update ( UserRequest $request )
    {
        $has = [ 'work', 'url', 'description' ];

        $result = array_where($request->all(), function ( $value, $key ) use ( $has ) {
            return in_array($key, $has);
        });

        if ( !\Auth::user()->update($result) ) {
            return redirect()->route('users.change')->withErrors([ 'work', '出现未知错误，请稍后尝试' ]);
        }

        return redirect()->route('users.info');
    }

    public function show ( $id )
    {
        $user = $this->user->find($id, [ 'avatar', 'name', 'work', 'url', 'description' ]);

        if ( !$user ) abort(404);

        return view('home.users.message', compact('user'));
    }

    public function check ()
    {
        return $this->sendSuccessResponse(\Auth::guard()->check());
    }
}
