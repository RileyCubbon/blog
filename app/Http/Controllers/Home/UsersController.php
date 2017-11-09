<?php

namespace App\Http\Controllers\Home;

use App\Model\User;
use Illuminate\Http\Request;
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
}
