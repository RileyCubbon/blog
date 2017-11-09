<?php

namespace App\Http\Controllers\Auth;

use App\Model\User;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator ( array $data )
    {
        return Validator::make($data, [
            'name'     => 'required|string|max:15',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'name.required'      => '昵称为必填参数',
            'name.string'        => '昵称不能有特殊符号',
            'name.max'           => '昵称最长为15个字符',
            'email.required'     => '邮箱地址为必填参数',
            'email.string'       => '非法参数',
            'email.email'        => '请注意核对邮箱格式',
            'email.unique'       => '邮箱重复',
            'password.required'  => '密码为必填项',
            'password.string'    => '密码不能有特殊符号',
            'password.min'       => '密码长度不能低于6位',
            'password.confirmed' => '两次密码输入不一致',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     *
     * @return \App\Model\User
     */
    protected function create ( array $data )
    {
        return User::create([
            'name'            => $data[ 'name' ],
            'email'           => $data[ 'email' ],
            'password'        => bcrypt($data[ 'password' ]),
            'avatar'          => 'http://riley.dev/img/a1.jpg',
            'verify_string'   => str_random(48),
            'last_login_time' => Carbon::now(),
        ]);
    }
}
