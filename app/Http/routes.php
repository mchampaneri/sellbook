<?php
use Illuminate\Http\Request;


use App\User;


/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/',function() {
	return view('welcome');
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::group(['middleware'=>'web'] , function() {
Route::get('/login',function() {
	return view('login');
});

Route::post('/login',function(Request $request) {		
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            // Authentication passed...        	
            return redirect()->intended('dashboard');
    	}
    	else
    	{
    		return "failed";
    	}
});

Route::post('/register',function(UserRequest $request) {

		$user = new User();
		$user->name  = $request->name;
		$user->email  = $request->email;
		$user->password = Hash::make($request->password);
		$user->branch = $request->branch;
		$user->sem = $request->sem;
		$user->enrollment_number = $request->enrollment_number;
		$user->save();
		return view('login');

});

Route::get('/logout',function() {
	Auth::logout();
	
});

Route::get('/register',function() {
	return view('register');
});

	
Route::group(['middleware'=>'auth'], function() {	
	    Route::resource('dashboard','DashboardController');
		Route::resource('sells','SellsController');
		Route::resource('users','UsersController');
		Route::get('/sells/sold/{id}','SellsController@sold'); // Secured With the Auth Check Function //
		Route::get('/sells/close/{id}','SellsController@close_deal');
		Route::resource('purchases','PurchaseController');
		Route::resource('admin','AdminController');
});
    
});

Route::group([],function() {
	Route::get('/api/books','api@books'); //  URL Returns All list of book that are purchaseble by current user //
	Route::get('/api/books/{id}','api@book'); // URL returns the detail of the book by passing id with  //
});



