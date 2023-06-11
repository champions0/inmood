<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsSendEmailRequest;
use App\Mail\SimpleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function sendEmail(ContactUsSendEmailRequest $request){
        $data = $request->validated();

        $email = [
            'subject' => 'Contact Us',
            'data' => [
                'title' => 'New feedback',
                'from' => config('mail.from')['address'],
                'example' => 'contact-us',
                'param' => [
                   'url' => $data['url'],
                   'full_name' => $data['full_name'],
                   'company' => $data['company'],
                   'description' => $data['description'],
                ],
            ]
        ];


        Mail::to('harutharutunyan94@gmail.com')->send(new SimpleMail($email));
        return back();
    }
}
