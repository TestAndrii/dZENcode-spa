<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class TelegramNotification extends Notification
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(): array
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the Telegram representation of the notification.
     */
    public function toTelegram(): TelegramMessage
    {
        return TelegramMessage::create()
            ->content("Web: ". Carbon::now()->format('D, d M Y H:i:s'));
    }
}
