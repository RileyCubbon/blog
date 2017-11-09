<?php
/**
 * Created by PhpStorm.
 * User: zjj
 * Date: 2017/11/9
 * Time: 03:18
 */

namespace App\Mailer;


use App\Model\User;

class UserMailer extends Mailer
{
    public function verify ( User $user )
    {
        $data    = [ 'url' => route('users.verify', $user->verify_string) ];
        $subject = 'Riley\'s Blog 邮箱验证';

        $this->sendTo($user, $subject, 'email.verify', $data);
    }
}