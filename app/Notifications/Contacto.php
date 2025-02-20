<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Telegram\Bot\Api;

class Contacto extends Notification
{
    use Queueable;

    protected $message;
    protected $telegram_user_id;
    protected $sender;
    protected $urlMessage;

    /**
     * Create a new notification instance.
     */
    public function __construct(array $message)
    {
        $this->sender = $message['nombre'];
        $this->message = $message['mensaje'];
        $this->urlMessage = route('contacto');
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['telegram'];
    }

    public function toTelegram($notifiable){

        try {
            $telegram = new Api(config('services.telegram.bot_token'));

            $message = "Nuevo mensaje en portafolio:\n\n";
            $message .= "De: $this->sender.\n\n";
            $message.= "$this->message\n\n";
            $message.= "Consulta el mensaje en \n$this->urlMessage\n\n";
            $message .= now()->format('d/m/Y H:i:s');

            $telegram->sendMessage([
                'chat_id' => config('services.telegram.admin_chat_id'),
                'text' => $message,
                'parse_mode' => 'Markdown'
            ]);
        } catch (\Exception $e) {
            \Log::error('Error al enviar notificación a Telegram: ' . $e->getMessage());
        }
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
