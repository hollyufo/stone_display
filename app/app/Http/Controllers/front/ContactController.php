<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMessage;
use Mail;

class ContactController extends Controller
{
    
    public function send(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required",
            "subject" => "required",
            "phone" => "required",
            "message" => "required"
        ]);
        $data = $request->input();
        try {
            Mail::to(config("mail.to"))->send(new ContactMessage($data));
            return redirect()->route('front.contact')->with('success', true);
        } catch (\Throwable $th) {
            //throw $th;
        }

    }
}
