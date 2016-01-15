<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;
use App\User;
use Auth;
class PurchaseController extends Controller
{
    public function index()
    {	$available = Book::all();
    	$user_id = Auth::user()->id;
    	$user = User::find($user_id);
    	return view('searchdesk.index')->with(['books'=>$available,
    											'user'=>$user]);
    }

    public function store(Request $request)
    {
    		

    }

    public function update($id)
    {
        $book = Book::find($id);
    	$book->buyer_id = Auth::user()->id;
    	$book->save();
    	return redirect()->route('purchases.index');
    }
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->buyer_id = 0;
        $book->save();
        return redirect()->route('purchases.index');
    }

}
