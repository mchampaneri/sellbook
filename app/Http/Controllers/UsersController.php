<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Hash;
use Auth;

class UsersController extends Controller
{
    //
   	public function defaultUser()
   	{
   		$user = new User;
   		$user->name="Manish";
   		$user->email ="m.champaneri.20@gmail.com";
   		$user->password=Hash::make('1234');
   		$user->admin=0;
   		$user->save();
   		return "Defautl User Created";
   	}
   	public function login(Request $request)
   	{
         $email = $request->email;
         $password = $request->password;
         if(Auth::attempt(['email'=>$email,'password'=>$password]))
        { 
            return redirect()->route('dashboard.index');
        }
        return "Auth Failed";
   	}

    public function logout()
    {
      Auth::user()->logout();
    }
}
