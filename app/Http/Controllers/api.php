<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class api extends Controller
{
    //
    public function books()
    {

        $available = Book::all();
          
        return $available;
    }

    
}
