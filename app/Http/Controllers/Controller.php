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
        $data =  DB::table('user_chat')->get();

        
        foreach($data as $dataNickname) {

  
             
 
            }
 
            foreach($data as $dataGender) {
 
             $sessionAccountGender = $dataGender->user_gender;
     
            }
     
            foreach($data as $dataPassword) {
     
      
     
            }

            foreach($data as $dataId) {
     
      
     
            }
     
            
 

        if(isset($_POST['submit']) && isset($data->user_id)) {
            
            
            

          



            Session(['sessionAccount' => $nickname]);
            Session(['sessionAccountPassword' => $dataPassword]);
            Session(['sessionAccountGender' => $sessionAccountGender]);
        

            $sessionAccount = Session('sessionAccount', $nickname);
            $sessionAccountGender = Session('sessionAccountGender', $sessionAccountGender);
          
           
        
            return view('account',['sessionAccount' => $sessionAccount,'sessionAccountGender' => $sessionAccountGender]);


        } else{

            $error = true;

            return view('welcome',['error' => $error]);

        }

    

       


    }

    public function logout(Request $request) {

        if ($request->session()->has('sessionAccount')) {
            
            $request->session()->forget('sessionAccount');
            $request->session()->forget('sessionAccountGender');
            $request->session()->forget('sessionAccountPassword');
            return redirect('/');

        } elseif($request->session()->has('sessionAccountUser')) {


            $request->session()->forget('sessionAccountUser');
            $request->session()->forget('sessionAccountGenderuser');
            $request->session()->forget('sessionAccountPasswordUser');
            return redirect('/');
        }


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
