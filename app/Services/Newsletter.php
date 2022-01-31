<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter
{

    public function subscribe($email)
    {
        $mailchimp = new ApiClient();
        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us14'
        ]);

        return
            $mailchimp->lists->addListMember('0b5af88649', [
                'email_address' => $email,
                'status' => 'subscribed'
            ]);
    }
}