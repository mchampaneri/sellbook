<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sells()
    {
        return $this->hasMany('App\Book','seller_id');
    }
    public function purchases()
    {
        return $this->hasMany('App\Book','buyer_id');
    }

    public function getBranch()
    {
        return $this->belongsTo('App\Control','branch');
    }

    public function sent_messages()
    {
        return $this->hasMany('App\Message','sender');
    }

    public function recived_message()
    {
        return $this->hasMany('App\Message','reciver');
    }
}
