<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LoginUserController extends Controller
{
    public function login(Request $request){
        if(Auth::check()){
            return response()->json(['res'=>'true']);
            
        }

        $formFields = $request->only(['email', 'password']);
        if(Auth::attempt($formFields)){
            return response()->json(['res'=>'true']);
        }
       
        return response()->json(['res'=>"none"]);
}

        public function logout(){
            Auth::logout();
            return redirect('login');
}

}
