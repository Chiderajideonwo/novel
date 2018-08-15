<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Post;
use Session;

class ContactController extends Controller
{
     public function getcontactus() {
    	return view('contact');
    }


      public function postcontactus(Request $request) {

      	$this->validate($request, array(

      		'name'=> 'required| max:100',
    		'email'=> 'required|email',
    		'subject'=> 'required',
    		'message'=> 'min:10|required',

      	));

      	 //this is mail facade instance 
      	// Mail::send('view', $data, function() {});
      	
      	
      	$data= array(


      		'name'=> $request->name,
    		'email'=> $request->email,
    		'subject'=> $request->subject,
    		'bodyMessage'=> $request->message,


      	);

      	 Mail::send('emails.contactus', $data, function($message) use($data) {

      	 	$message->from($data['email']);
      	 	$message->to('chiderajideonwo@gmail.com');
      	 	$message->subject($data['subject']);


      	 });

      	 Session::flash('MailSuccess', 'Your message has been sent!' );


      	 return redirect('/home');

			
    }







}
