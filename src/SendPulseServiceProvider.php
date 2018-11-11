<?php

namespace NotificationChannels\SendPulse;

use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;
use Illuminate\Support\ServiceProvider;

class SendPulseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Bootstrap code here.
        $this->app->when(SendPulseChannel::class)
            ->needs(ApiClient::class)
            ->give(function () {
                $sendPulseConfig = config('services.sendpulse');

                return new ApiClient($sendPulseConfig['API_USER_ID'], $sendPulseConfig['API_SECRET'], new FileStorage());
            });

    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
