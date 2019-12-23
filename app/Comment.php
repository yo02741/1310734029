<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    // public $timestamps = false;


    protected $primaryKey = 'cid';

    protected $fillable = [
        'users_id', 'title', 'content',
    ];

    protected $hidden = [
        
    ];
}
