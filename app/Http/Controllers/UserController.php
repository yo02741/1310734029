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


       if($postData['password']!=$Users->password){
            $error_msg = [
                        'msg' =>[
                            '密碼驗證錯誤！',
                        ],
                    ];
        
            return redirect('/login')
                ->withErrors($error_msg)
                ->withInput();
        
       }else{
            session()->put('id',$Users->id);
            session()->put('account',$Users->account);
            session()->put('name',$Users->name);

            return redirect('/home');

       }


    }

    public function logout(){

        session()->forget('id');
        session()->forget('account');
        session()->forget('name');
        return redirect('/');

    }

    public function home_page(){
        if(session()->has('id')){
            return view('home');
        }else{
            return view('welcome');
        }
    }

    
}
