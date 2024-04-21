<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login(Request $request) {

        $nickname = $request->input('nickname');
        $password = $request->input('password');

        if(isset($_POST['submit'])) {
            
        $data = DB::select('select * from admin_chat');
        $dataUser = DB::select('select * from user_chat');


        foreach($data as $dataNickname) {

            $dataNickname->admin_nickname;
    
           }

           foreach($data as $dataGender) {

            $sessionAccountGender = $dataGender->admin_gender;
    
           }
    
           foreach($data as $dataPassword) {
    
            $dataPassword->admin_password;
    
           }
    
           foreach($dataUser as $dataUserPassword) {
    
            $dataUserPassword->user_password;
    
           }

           foreach($dataUser as $dataUserGender) {
    
            $sessionAccountGenderuser = $dataUserGender->user_gender;
    
           }
    
           foreach($dataUser as $dataUserNickname) {
    
            $dataUserNickname->user_nickname;
    
           }

           if($dataNickname->admin_nickname == $nickname && $dataPassword->admin_password == $password ) {



            Session(['sessionAccount' => $nickname]);
            Session(['sessionAccountGender' => $sessionAccountGender]);
        

            $sessionAccount = Session('sessionAccount', $nickname);
            $sessionAccountGender = Session('sessionAccountGender', $sessionAccountGender);
            
            session_start();
        
            return view('account',['sessionAccount' => $sessionAccount,'sessionAccountGender' => $sessionAccountGender]);





           } elseif($dataUserNickname->user_nickname == $nickname && $dataUserPassword->user_password == $password) {


        

           Session(['sessionAccountUser' => $nickname]);
           Session(['sessionAccountGenderuser' => $sessionAccountGenderuser]);
           $sessionAccountGenderuser = Session('sessionAccountGenderuser', $sessionAccountGenderuser);
           $sessionAccountUser = Session('sessionAccountUser', $nickname);

           session_start();

           return view('account',['sessionAccountUser' => $sessionAccountUser,'sessionAccountGenderuser' => $sessionAccountGenderuser]);
         


        } else {

            $error = true;

            return view('welcome',['error' => $error]);

        }

    }

       


    }

    public function logout(Request $request) {

        if ($request->session()->has('sessionAccount')) {
            
            $request->session()->forget('sessionAccount');
            return redirect('/');

        } elseif($request->session()->has('sessionAccountUser')) {


            $request->session()->forget('sessionAccountUser');
            return redirect('/');
        }


    }

    public function showMessages() {

     
            
           

            $usersMessages = DB::select('select * from user_chat');


            return view('messages', ['usersMessages' => $usersMessages]);

        


    }

    public function sendMessage(Request $request) {

        $textareaInput = $request->input('textareaInput');



    }



}
