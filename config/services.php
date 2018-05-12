<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '2088065001210238',
        'client_secret' => 'a14bfa9a2271f01aedca7481298536ec',
        'redirect' => 'http://localhost/katrorishop/public/login/facebook/callback',
    ],

    
    'google' => [
        'client_id' => '303623872427-nm4nti9okit4nrrhu32egflqf5ku0k95.apps.googleusercontent.com',
        'client_secret' => 'b-ONET4QP-cIRKZe7l-8-H_Q',
        'redirect' => 'http://localhost/katrorishop/public/login/google/callback',
    ],
    
];
