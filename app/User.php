<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    // public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'account', 'password',
    ];

    protected $hidden = [
        'password',
    ];
}
