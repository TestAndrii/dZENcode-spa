<?php

namespace App\Livewire;

use App\Models\Comment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class ChatList extends Component
{
    use WithPagination;

    // sort
    public string $sort_key = 'created_at';
    public string $sort = 'desc';

    /**
     * @return void
     */
    public function sortUser(): void
    {
    $this->sort_key = 'user_id';
    $this->sort = ($this->sort == 'asc') ? 'desc' : 'asc';
    }

    /**
     * @return void
     */
    public function sortDate(): void
    {
        $this->sort_key = 'created_at';
        $this->sort = ($this->sort == 'asc') ? 'desc' : 'asc';
    }

    /**
     * @param $id
     * @return void
     */
    public function commentMessage($id)
    {
        $this->dispatch('parent', $id);
    }

    /**
     * @return View
     */
    public function render(): View
    {
        $comments = Comment::orderBy($this->sort_key, $this->sort)->simplePaginate(Comment::PAGINATE);
        return view('livewire.chat-list', compact('comments'));
    }
}
