<?php

namespace App\Model;


class Article extends Model
{
    protected $fillable = [
        'title','is_show','recommend','is_hot','description',
        'content','admin_id','click_amount','recommend_number'
    ];

    public function categories (  )
    {
        return $this->belongsToMany(Category::class,'articles_and_categories');
    }

    public function admin (  )
    {
        return $this->belongsTo(Admin::class);
    }
}
