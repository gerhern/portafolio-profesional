<?php

namespace App\Providers;

use App\Broadcasting\TelegramChannel;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\ServiceProvider;
use Telegram\Bot\Api;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Notification::extend('telegram', function($app){
           return new TelegramChannel($app->make(Api::class));
        });
    }
}
