<?php

namespace App\Http\Controllers;
use Validator;
use App\Comment;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function comments_page_n_show(){
        return view('comments');
    }

    public function add_comments_show(){
        return view('addcomments');
    }

    public function add_comments_send(){
    }
}
