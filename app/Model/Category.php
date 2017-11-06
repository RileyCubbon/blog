<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category','admin_name','status'];

    public function articles (  )
    {
        return $this->belongsToMany(Article::class,'articles_and_categories');
    }
}
