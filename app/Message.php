<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    public function book()
    {
    	return $this->belongsTo('App\Book','book_id');
    }
      public function sender()
    {
    	return $this->belongsTo('App\User','sender');
    }
      public function reciver()
    {
    	return $this->belongsTo('App\Book','reciver');
    }
}
