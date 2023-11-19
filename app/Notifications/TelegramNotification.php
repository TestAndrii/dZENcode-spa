<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramNotification extends Notification
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        return ["telegram"];
    }

    /**
     * Get the Telegram representation of the notification.
     */
    public function toTelegram($notifiable)
    {
        $request = request()->server->all();
        unset($request['HTTP_COOKIE']);

        return TelegramMessage::create()
//            ->to($notifiable)
            ->content("IOT - Route Web connect: ". Carbon::now()->format('D, d M Y H:i:s'))
            ->line('')
            ->line(print_r($request,true));
    }
}
