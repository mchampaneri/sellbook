<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;
use App\User;
use App\Message;
use Auth;

class PurchaseController extends Controller
{
    public function index()
    {	$available = Book::where('status',0)
    						->where('seller_id','!=',Auth::user()->id)->get();    	
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
    	$book->status =1;
    	$book->save();

        $message = new Message();
        $message->type="0";// 0"Stands for willingness //
        $message->sender = Auth::user()->id;
        $message->reciver = $book->seller_id;
        $message->state=0;
        $message->book_id = $book->id;
        $message->save();
        
    	return redirect()->route('purchases.index');
    }
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->buyer_id = 0;
        $book->status = 0;
        $book->save();

        $message = new Message();
        $message->type="1";// "1 Stands for deal cancel //
        $message->sender = Auth::user()->id;
        $message->reciver = $book->seller_id;
        $message->state=0;
        $message->book_id = $book->id;
        $message->save();
        return redirect()->route('purchases.index');
    }

}
