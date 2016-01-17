<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Control;
use App\User;
use Auth;
class AdminController extends Controller
{
    //
    public function index()
    {
        if(Auth::user()->admin==1)
    	{
        	$catagories = Control::where('field','catagory')->get();
        	$branches = Control::where('field','branch')->get();
            $users = User::all();

        	if(isset($catagories)&&isset($branches))
        	{
        	return view('admin.index')->with(['catagories'=>$catagories,
        									 'branches'=>$branches,
                                             'users'=>$users]);
        	}
        	return view('admin.index');
        }
        else
        {
            return redirect()->route('dashboard.index');
        }
    }
    
    public function store(Request $request)
    {
        $control = new Control;
        $control->value = $request->value;
        $control->field = $request->field;
        $control->save();
        return redirect()->route('admin.index');

    }
    public function update(Request $request,$id)
    {

         if(isset($request->state))
         { 
            $user = User::find($id);        
            $user->state = $request->state;
            $user->update();
            return redirect()->route('admin.index');
         }
         if(isset($request->value))
        {   $control = Control::find($id);        
            $control->value = $request->value;
            $control->update();
            return redirect()->route('admin.index');

        }
       
    }

    public function destroy(Request $request,$id)
    {
       
         if(isset($request->value))
        {   $control = Control::find($id);        
            $control->value = $request->value;
            $control->delete();
            return redirect()->route('admin.index');

        }

    }
}
