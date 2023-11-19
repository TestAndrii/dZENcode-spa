<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class ChatList extends Component
{
    public $mensajes = [];
    public $comments;

    public function mount()
    {
        $this->comments = Comment::all();

    }

    public function render()
    {
        return view('livewire.chat-list');
    }
}
