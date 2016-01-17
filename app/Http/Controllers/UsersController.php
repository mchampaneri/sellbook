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
   	

    public function logout()
    {
      Auth::user()->logout();
    }
    public function edit($id)
    {	$user = User::find(Auth::user()->id);
    	return view('settings/index')->with(['user'=>$user]);
    }

    public function update(Request $request,$id)
    {
         $user = User::find(Auth::user()->id);
         if(isset($request->name))
         $user->name = $request->name;
         if(isset($request->email))
         $user->email = $request->email;
         if(isset($request->enrollment_number))
         $user->enrollment_number = $request->enrollment_number;
         if(isset($request->sem))
         $user->sem =$request->sem;
         if(isset($request->branch))
         $user->branch = $request->branch;

         if(isset($request->oldpassword) && isset($request->newpassword))
         {

            if($user->password == bcrypt($request->oldpassword) )
                $user->password = $request->newpassword;
            else
                echo $user->password;
                echo "<br>";
                echo bcrypt($request->oldpassword);
                die();               
                return " An authorized Access log generated . Thank you";
         }
       
         $user->update();
         return redirect()->route('dashboard.index');

    }

}
