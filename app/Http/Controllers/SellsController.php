<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateBook;
use App\Http\Controllers\Controller;
use App\Book;
use App\User;
use App\Control;
use App\Message;
use Auth;
class SellsController extends Controller
{
    public function index()
    {
    	$user_id = Auth::user()->id;
    	$user = User::find($user_id);
        $catagories = Control::where('field','catagory')->select(['value','id'])->get();
    	return view('selldesk/index')->with(['user'=>$user,
                                             'catagories'=>$catagories]);
    }
    public function store(CreateBook $request)
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
    public function update(CreateBook $request, $id)
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
    public function sold(Request $request, $id)
    {
        $book = Book::find($id);
        $book->status = '2';
        $book->update();

        $message = new Message();
        $message->type="3";// 4"Stands for sucess deal //
        $message->sender = Auth::user()->id;
        $message->reciver = $book->buyer_id;
        $message->state=0;
        $message->book_id = $book->id;
        $message->save();
        return redirect()->route('sells.index');
    }

    public function close_deal($id)
    {
        $book = Book::find($id);
        $book->status = '0';
        $book->buyer_id ='0';

        $message = new Message();
        $message->type="2";// 2"Stands for deal close by seller //
        $message->sender = Auth::user()->id;
        $message->reciver = $book->buyer_id;
        $message->state=0;
        $message->book_id = $book->id;
        
        $message->save();
        $book->update();
        return redirect()->route('sells.index');   
    }

}
