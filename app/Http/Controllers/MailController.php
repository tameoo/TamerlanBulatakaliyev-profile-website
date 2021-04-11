<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendEmail() {
        $data = [
            'title' => 'Mail testing',
            'body' => 'Just testing email'
        ];

        Mail::to("tameoooo13@gmail.com")->send(new TestMail($data));
        return "Email sent successfully";
    }
}