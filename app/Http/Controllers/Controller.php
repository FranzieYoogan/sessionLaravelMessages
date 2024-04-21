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

            if(DB::select("select * from user_chat where user_nickname = '$nickname' and user_password = '$password' ")) {


           

              

          



            Session(['sessionAccount' => $nickname]);

        

            $sessionAccount = Session('sessionAccount', $nickname);
   
          
           
        
            return view('account',['sessionAccount' => $sessionAccount]);


        } else{

            $error = true;

            return view('welcome',['error' => $error]);

        }

    
    }
       


    }

    public function logout(Request $request) {

        

            $request->session()->flush();
            $request->session()->forget('sessionAccount');
            $request->session()->forget('sessionAccountGender');
            return redirect('/');

        

        


    }

    public function showMessages() {

     
            
           

            $usersMessages =  DB::table('user_chat')->get();

            $counter = 1;
            $successful = true;


            return view('messages', ['usersMessages' => $usersMessages,'counter' => $counter,'successful' => $successful]);

        


    }

    public function sendMessage(Request $request) {

        $textareaInput = $request->input('textareaInput');
        $currentDate = date(DATE_RFC2822);


        $sessionAccount = $request->session()->get('sessionAccount');
        $sessionAccountGender = $request->session()->get('sessionAccountGender');
   

          $valueInputOk =  addslashes($textareaInput);

        if(isset($_POST['submit'])) {

             DB::insert("insert into user_chat (user_nickname,user_gender,user_message, user_date) values ('$sessionAccount','$sessionAccountGender','$valueInputOk', '$currentDate')");



            $successful = true;
    
            return view('messageus', ['successful' => $successful]);


        }

 

    }



}
