<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Http\FormRequest;

class SendEmail extends Controller
{
    
    public function fn_sendmail()
    {
    	$data = array(
    			'name' => "mortalla Gueye",
    	);
    	
    	Mail::send('mailtemplate', $data, function ($message) {
    		$message->from('mortallageek@gmail.com', 'Learning Laravel');
    	
    		$message->to('mortallageek@gmail.com')->subject('Ceci est un test!');
    	});
    		 
	}
	
	public function index()
	{
		$data = array('title'=>"contact");
		return view('sendmail.enquiry_form',$data);

	}

	public function enquiryform(EnquiryFormRequest $request) { 

		$name = $request->get('name');
		$email = $request->get('email');
		$phone = $request->get('phone');
		$enq_message = $request->get('enq_message');
	
		$data = array(
				'name' => $name,
				'email' => $email,
				'phone'=>$phone,
				'enq_message' => $enq_message
		);
		
		
		Mail::send('mailtemplate2', $data, function ($message) {
			$message->from('mortallageek@gmail.com', 'Test Mail');
			 
			$message->to('mortallageek@gmail.com')->subject('ceci est un test');
		});
			return redirect('/enquiryform')->with('status', 'nous avons recu votre message, Thanks!');
	}
}