<?php

namespace App\Livewire;

use Livewire\Component;

class ChatForm extends Component
{
    public $usuario = '';

    public function render()
    {
        return view('livewire.chat-form');
    }
}
