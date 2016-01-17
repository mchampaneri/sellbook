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
	 public function buyer()
    {
	return $this->belongsTo('App\User','buyer_id');
	}

	public function messages()
	{
		return $this->hasMany('App\Message','book_id');
	}
}
