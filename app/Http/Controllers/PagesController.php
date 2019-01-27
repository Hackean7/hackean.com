<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use Session;
use App\Post;
use App\User;


class PagesController extends Controller 
{

	public function getIndex() {
		return view('welcome');
	}

	public function getAbout() {
		return view('pages.about');
	}

	public function getContact() {
		return view('pages.contact');
	}

	public function postContact(Request $request) {

		$this->validate($request, array(
			'username' => 'required|max:50',
			'email'    => 'required|email',
			'subject'  => 'min:10',
			'message'  => 'min:100'
		));

		$data = array(
			'username' 	  => $request->email,
			'email' 	  => $request->email,
			'subject' 	  => $request->subject,
			'bodyMessage' => $request->message			
		);

		Mail::send('emails.contact', $data, function($message) use ($data) {
			$message->from($data['email']);
			$message->to('hackean13@gmail.com');
			$message->subject($data['subject']);
		});

		Session::flash('success', 'Your email was succsessfully sent');

		return redirect()->action('HomeController');
	}

	public function getAccount() {
		
		return view('pages.account');

	}
}

