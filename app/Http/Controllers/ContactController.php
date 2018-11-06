<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
 

use Mail; 
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
     //
     public function getInfos(){
        return view('contact');
}
public function postInfos(ContactRequest $request)
	{ 
		Mail::send('email_contact', $request->all(), function($message) 
		{
			
			$message->to('papacoundia@gmail.com')->subject('Contact');
		});

		return view('confirm');
	}
}
