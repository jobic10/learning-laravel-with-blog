<?php

namespace App\Http\Controllers;

use App\Services\MailchimpNewsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(MailchimpNewsletter $newsletter)
    {
        request()->validate([
            'email' => 'required|email'
        ]);

        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            throw ValidationException::withMessages(['email' => 'Invalid email']);
        }
        return redirect('/')->with('success', 'You are now subscribed');
    }
}