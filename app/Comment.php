<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    // public $timestamps = false;


    protected $primaryKey = 'comment_id';

    protected $fillable = [
        'account','users_id', 'content'
    ];

    protected $hidden = [
        
    ];
}
