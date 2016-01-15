<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public function seller()
    {
	return $this->belongsTo('App\User','seller_id');
	}
}
