<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUserRequest;
use App\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(StoreUserRequest  $request){


        $user = new User;
        $user->first_name=$request->first_name;
        $user->surname=$request->surname;
        $user->password=bcrypt($request->password);
        $user->email=$request->email;
        $user->city=$request->city;
        $user->municipal=$request->municipal;
        $user->ward=$request->ward;
        $user->street=$request->street;
        $user->phone_number=$request->phone_number;
        $user->birth_date=$request->birth_date;
        
        $user->save();
    }
}
