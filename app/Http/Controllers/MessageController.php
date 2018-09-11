<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Mail\EnvoieMessage;

class MessageController extends Controller
{
    // 
    public function create()

    {
    
        return view('contact');

        //dd('contact'); 
    }
    
    public function store(MessageRequest $request)

    {
        //return view('contact');
        //dd('toto');    
       /* $name = $request->get('name');
		$email = $request->get('email');
		$phone = $request->get('phone');
		$msg = $request->get('msg');
	
		$data = array(
				'name' => $name,
				'email' => $email,
				'phone'=>$phone,
				'msg' => $msg
		); 
		
		
		Mail::send('envoie', $data, function ($msg) {
			$msg->from('mortallageek@gmail.com', 'Test Mail');
			 
			$msg->to('mortallageek@gmail.com')->subject('ceci est un test');
		});
			return redirect('/contact')->with('status', 'nous avons recu votre message, Thanks!'); 
			*/
			//dd('talla');
			
		$mailable = new EnvoieMessage($request->name, $request->email, $request->phone, $request->msg);
		Mail::to('mortallageek@gmail.com')->send($mailable);
		return 'Fait merci';
    }
   
}
 