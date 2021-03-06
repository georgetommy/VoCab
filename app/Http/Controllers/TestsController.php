<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mail;
use Auth;

class TestsController extends Controller {

	/**
	 * Attempt to send an email
	 *
	 * @return Response
	 */
	public function mail()
	{
		// $message = 'This is a test mail.';
		// mail('ddeickhardt@gmail.com', 'My Subject', $message);
		Mail::send('emails.test', array('testvalue' => 'Pimp'), function($message)
		{
		    $message->to('ddeickhardt@gmail.com', 'John Smith')->subject('Test!');
		});
	}

	public function languages()
	{
		$languages = Auth::user()->languages;
		// $languages = $user;
		dd($languages);
	}
}
