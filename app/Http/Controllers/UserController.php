<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class UserController extends Controller
{
    public function register(Request $request){

        $postData = $request->all();
        $objValidator = Validator::make(
            $postData,
            [
                'account' => [
                    'required',
                    'between:6,20',
                    'unique:users',
                ],
                'password' => [
                    'required',
                    'between:6,20',
                ],
                'name' => [
                    'required',
                    'max:20'
                ]
            ]
        );

        if($objValidator->fails()){
            return response()->json($objValidator->errors()->all(),400);
        }
        $Users = User::create($postData);
        // return response()->json("註冊成功",200);
        return view('welcome');
        

    }


    public function login_page(){
        return view('login');
    }

    public function login_process(Request $request){
        $postData = $request->all();
        $rules = [
            'account' => [
                'required',
                'between:6,20',
                'unique:users'
            ],
            'password' => [
                'required',
                'between:6,20'
            ]       

        ];

        $objValidator = Validator::make($postData,$rules);

        // if($objValidator->fails()){
        //     return response()->json($objValidator->errors()->all(),400);
        // }

        $Users = User::where('account',$postData['account'])->firstOrFail();

        var_dump($Users->password); //only100

        // $is_password_correct = ::check($postData,$Users->password); <- 不知道用甚麼check


        // if(!$is_password_correct){

        //     $error_msg = [
        //         'msg' =>[
        //             '密碼驗證錯誤！',
        //         ],
        //     ];

        //     return redirect('/login')
        //         ->withErrors($error_msg)
        //         ->withInput();

        // }
    }

    public function logout(){

    }
}
