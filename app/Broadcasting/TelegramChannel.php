<?php

namespace App\Broadcasting;

use App\Models\User;
use Illuminate\Notifications\Notification;
use Telegram\Bot\Api;

class TelegramChannel
{

    protected $telegram;
    /**
     * Create a new channel instance.
     */
    public function __construct(Api $telegram)
    {
        $this->telegram = $telegram;
    }

    public function send(object $notifiable, Notification $notification){

        if(method_exists($notification, 'toTelegram')){
            $notification->toTelegram($notifiable);
        }
    }
}
