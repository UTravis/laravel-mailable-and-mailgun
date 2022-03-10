<?php

namespace App\Http\Controllers;

use App\Mail\SignUpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendEmail()
    {
        $data = [
            'name' => 'Test Reciever',
            'verification_code' => 'WEREWOLF'
        ];

        Mail::to('travis111.dev@outlook.com')->send( new SignUpMail($data) );

        if (Mail::failures() != 0) {
            return "Email has been sent successfully.";
        }

        return "Oops! There was some error sending the email.";
    }
}
