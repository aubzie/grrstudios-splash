<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // https://dotdev.co/google-recaptcha-integration-with-laravel-ad0f30b52d7d#.pi2yfxhea
        Validator::extend('recaptcha', function ($attribute, $value, $parameters, $validator) 
        {
            $client = new Client();
            $response = $client->post(
                'https://www.google.com/recaptcha/api/siteverify',
                [
                    'form_params' => [
                        'secret' => env('GOOGLE_RECAPTCHA_SECRET'),
                        'response' => $value
                    ]
                ]
            );

            $body = json_decode((string) $response->getBody());

            return $body->success;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
