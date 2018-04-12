<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;


class ContactMessageController extends Controller
{


    public function create() {
      return view('contact');
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
