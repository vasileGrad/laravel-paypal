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

    'paypal' => [
    'client_id' => 'Af8Z9GCTgbJp8bWRcjPUWucr7s_k4m71oQIwRVmvDTzHRdZdb16aY3AiSu_VIgZodcR8yaJS4gHyKECs',
    'secret' => 'EB5AChfnRg3gip_fGKXCuhRF9R3cieS-24zfGEJIiTIpetfs-pv46JY2x7Wc7Y7IEPQksr80s1Xg4BOX'
    ],

];
