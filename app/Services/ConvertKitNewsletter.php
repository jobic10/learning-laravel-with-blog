<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class ConvertKitNewsletter implements Newsletter
{

    public function subscribe(string $email, string  $list = null)
    {
        // Subscribe using ConvertKit
    }
}