<?php

namespace App\Livewire;

use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use NotificationChannels\Telegram\TelegramMessage;

class Welcome extends Component
{
    // users
    public $name = '';
    public $email = '';
    public $homepage_url = '';
    // comments
    public $capcha = '';
    public $text_comment = '';
    // files
    public $file_url = '';


    public function save()
    {
    }
    public function render()
    {
        return view('livewire.welcome');
    }
}
