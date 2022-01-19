<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller
{
    //
    function login(Request $request)
    {
       // return ($request)->input();
          $user=  User::where(['email'=>$request->email])->first();
        //  return($user);
       //  return($user->password);
        if(!$user || !Hash::check($request->password,$user->password))
        {
         return "User name or Passord is not matching";
        }
        else{
                $request->session()->put('user',$user);
                return redirect('/');
        }
    }
}
