<div class="mt-3" wire:poll>
    <div class="text-center">
        <button type="button" wire:click="sortUser" class="btn bg-info">
            Sort by User Name
        </button>
        <button type="button" wire:click="sortUser" class="btn bg-info">
            Sort by E-mail
        </button>
        <button type="button" wire:click="sortDate" class="btn bg-info">
            Sort by Date
        </button>
    </div>


    <div class="card">
        <div class="card-body">
            @foreach($comments as $comment)
            @if($comment->parent_id == 0)
                @include('template_comment', ['item' => $comment])
            @endif
            @endforeach
        </div>
    </div>

    {{ $comments->links() }}

</div>