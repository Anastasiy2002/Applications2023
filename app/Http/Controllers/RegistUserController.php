<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class RegistUserController extends Controller
{
    public function save(Request $request){
        if(Auth::check()){
            return response()->json(['res'=>'true']);
            
        }

        
        $enrollees = User::all();

        $lastname = $request->input('lastname');
        $firstname = $request->input('firstname');
        $surname = $request->input('surname');
        $password = $request->input('password');
        $email = $request->input('email');
        $passport_issued = $request->input('passport_issued');
        $passport_series = $request->input('passport_series');
        $passport_number = $request->input('passport_number');
        

        foreach ($enrollees as $enrollee){
            $email_db = $enrollee->email;
            if ($email == $email_db){
                return response()->json(['res'=>"Пользователь с такой почтой уже существует"]);
        }}
        
            $user_create = new User;

            $user_create->lastName = $lastname;
            $user_create->firstname = $firstname;
            $user_create->surname = $surname;
            $user_create->password = $password;
            $user_create->email = $email;
            $user_create->passport_number = $passport_number;
            $user_create->passport_series = $passport_series;
            $user_create->passport_issued = $passport_issued;
            
            
            if($user_create){
                $user_create->save();
                Auth::login($user_create);
                //header('Location: /private', true, 303);
                //return response()->json(['res'=>'true']);
                return response()->json(['res'=>'true']);
            }

            return response()->json(['res'=>"Ошибка авторизации"]);
        }
        //return response()->json(['email'=>$email]);
        //if ($password == '222' and $email == '222'){
            //return response()->json(['res'=>"Успешно"]);
        //}else{
            //return response()->json(['res'=>"не Успешно"]);
        //}
        
        
    }

