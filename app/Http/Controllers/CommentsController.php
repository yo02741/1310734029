<?php

namespace App\Http\Controllers;
use Validator;
use App\Comment;
use App\User;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function comments_page_n_show(){
        $UsersData = User::all();
        // $CommentsData = Comment::all();
        $CommentsData = Comment::orderByDESC('created_at')->get();
        // $CommentsData = Comment::orderBy('created_at', 'desc')->paginate(5);

        return view('comments',compact('UsersData','CommentsData'));
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

        $UsersData = User::all();
        $CommentsData = Comment::all();

        return redirect('/comments');
        return view('comments',compact('UsersData','CommentsData'));
    }

    public function comments_ip_show($id){
        $CommentsData = Comment::where('cid',$id)->firstOrFail();        
        $UsersData = User::where('id',$CommentsData->users_id)->firstOrFail();        

        return view('comments_ip',compact('CommentsData','UsersData'));
    }
}
