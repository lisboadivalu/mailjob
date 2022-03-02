<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Jobs\SendEmailJob;
use App\Models\Email;

class SendEmailController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function sendEmail(EmailRequest $request)
    {   
        $input = $request->all();
        $email = Email::create($input);

        dispatch(new SendEmailJob($email))->delay(now()->addSeconds(3));

        return redirect()
            ->back()
            ->with('success', 'Email Sent');
    }
}
