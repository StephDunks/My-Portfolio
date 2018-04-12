<?php


namespace App\Http\Controllers;
use App\Notifications\InboxMessage;
use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Admin;

class ContactController extends Controller
{
  public function show()
{
  return view('welcome');
}

public function mailToAdmin(ContactFormRequest $message, Admin $admin)
{        //send the admin an notification
  $admin->notify(new InboxMessage($message));
  // redirect the user back
  return redirect()->back()->with('flash_message', 'thanks for the message! We will get back to you soon!');
}

public function store(Request $request) {

  $this->validate($request, [
    'name' => 'required',
    'email' => 'required | email',
    'message' => 'required'
  ]);

  return redirect()->back()->with('flash_message', 'Thank you for your message. I will be in touch with you soon!');
}
}
