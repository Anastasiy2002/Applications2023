<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ChangeController extends Controller
{
    public function change_login(Request $request){
        $user = Auth::user();
        $id = $user->id;
        
        $new_email = $request->input('email');
        $enrollees = User::all();
        foreach ($enrollees as $enrollee){
            $email_db = $enrollee->email;
            if ($new_email == $email_db){
                return response()->json(['res'=>"not"]);
        }}
        $user = User::find($id);
        $user->update([
            'email' => $new_email

        ]);
        return response()->json(['res'=>'true']);

      

    }

    public function add_values(Request $request){
        $user = Auth::user();
        $id = $user->id;

    

        $city = $request->input('city');
        $date = $request->input('date');
        $education = $request->input('education');
        $telephone = $request->input('telephone');

        $user2 = User::find($id);
        $user2->city = $city;
        $user2->date = $date;
        $user2->education = $education;
        $user2->telephone = $telephone;
        $user2->save();
        return response()->json(['res'=>'true']);
        


}
       
}
