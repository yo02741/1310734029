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

    public function add_comments_send(Request $request){
        $request->request->add(['users_id' => session()->get('id')]);
        $postdata = $request->all();

        $rules = [
            'title' => [
                'required',
                'max:255'
            ],
            'content' => [
                'required',
                'max:255'
            ]            
        ];
        $objValidator = Validator::make($postdata,$rules);
        if($objValidator->fails()){
            // return response()->json($objValidator-errors()->all(),400);
        }
        $Comments = Comment::create($postdata);
        return view('comments');
    }
}
