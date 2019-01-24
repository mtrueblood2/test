<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactCreated;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'message',
    ];

    protected static function boot(){
    	
    	parent::boot();

    	static::created(function($contact){

    		Mail::to($contact->email)->send(

    			new ContactCreated($contact)
    		);

    	});
    }

}
