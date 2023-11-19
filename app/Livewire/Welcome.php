<?php

namespace App\Livewire;

use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use NotificationChannels\Telegram\TelegramMessage;

class Welcome extends Component
{
    public function render()
    {
        return view('livewire.welcome');
    }
}
