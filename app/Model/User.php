<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','avatar','url','work',
        'description','is_verify','verify_string','last_login_time'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function recommends (  )
    {
        return $this->belongsToMany(Article::class,'users_articles_recommends');
    }

    public function collectors (  )
    {
        return $this->belongsToMany(Article::class,'users_articles_collectors');
    }
}
