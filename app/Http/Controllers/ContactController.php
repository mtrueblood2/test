<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function store(){

    	$validated = request()->validate([

    		'name' => 'required|max:255',
    		'email' => 'email|required|max:255',
    		'message' => 'required'

    	]);

    	Contact::create($validated);

    	return view('contact.thankyou');

    }

    public function create(){

    	return view('contact.form');
    }
}
