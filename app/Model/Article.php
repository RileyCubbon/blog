<?php

namespace App\Model;


class Article extends Model
{
    protected $fillable = [
        'title', 'is_show', 'recommend', 'is_hot', 'description',
        'content', 'admin_id', 'click_amount', 'recommend_number'
    ];

    public function categories ()
    {
        return $this->belongsToMany(Category::class, 'articles_and_categories');
    }

    public function admin ()
    {
        return $this->belongsTo(Admin::class);
    }

    public function recommendUsers ()
    {
        return $this->belongsToMany(User::class, 'users_articles_recommends');
    }

    public function collectorUsers ()
    {
        return $this->belongsToMany(User::class, 'users_articles_collectors');
    }

    public function showAllArticles ()
    {
        return $this->select('id', 'admin_id','title', 'description', 'created_at', 'click_amount')
            ->withCount('recommendUsers')->withCount('collectorUsers')
            ->with([
                'admin'      => function ( $query ) {$query->select('admins.id', 'avatar');},
                'categories' => function ( $query ) {$query->select('categories.id', 'category');}
            ]);
    }
}
