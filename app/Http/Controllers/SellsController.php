<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Book;
use App\User;
use Auth;
class SellsController extends Controller
{
    public function index()
    {
    	$user_id = Auth::user()->id;
    	$user = User::find($user_id);
    	return view('selldesk/index')->with(['user'=>$user]);
    }
    public function store(Request $request)
    {
    	$book = new Book;
    	$book->name=$request->name;
    	$book->price = $request->price;
    	$book->seller_id = Auth::user()->id;
    	$book->buyer_id = 0;
    	$book->subject_code = $request->subject_code;
    	$book->catagory = $request->catagory;
    	$book->condition = $request->condition;
    	$book->save();
    	return redirect()->route('sells.index');
    }
    public function edit(Request $request, $id)
    {
    	$book = Book::find($id);
    	return view('selldesk/edit')->with(['book'=>$book]);
    }
    public function update(Request $request, $id)
    {
    	$book = Book::find($id);
    	$book->name=$request->name;
    	$book->price = $request->price;
    	$book->seller_id = Auth::user()->id;
    	$book->subject_code = $request->subject_code;
    	$book->catagory = $request->catagory;
    	$book->condition = $request->condition;
    	$book->save();
    	return redirect()->route('sells.index');
    }
    public function destroy($id)
    {
    	$book = Book::find($id);
    	$book->delete();
    	return redirect()->route('sells.index');
    }
    public function show($id)
    {
        $book = Book::find($id);
        return view('selldesk.show')->with(['book'=>$book]);
    }
}
