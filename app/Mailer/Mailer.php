<?php
/**
 * Created by PhpStorm.
 * User: zjj
 * Date: 2017/11/9
 * Time: 02:39
 */

namespace App\Mailer;


class Mailer
{
    protected function sendTo ( $user, $subject, $view, $data = [] )
    {
        \Mail::send($view, $data, function ( $message ) use ( $user, $subject ) {
            $message->to($user->email)->subject($subject);
        });
    }
}