<?php

namespace App\Model;

class Board extends Model
{
    protected $fillable = ['message','to_user_id','user_id','parent_id'];
}
