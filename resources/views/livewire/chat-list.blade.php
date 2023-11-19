<div class="mt-3">

    <div class="card">
        <div class="card-body">
            @foreach($comments as $comment)
            @if($comment->parent_id == 0)
                @include('template_comment', ['item' => $comment])
            @endif
            @endforeach
        </div>
    </div>

    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
            cluster: '{{env('PUSHER_APP_CLUSTER')}}',
            forceTLS: true
        });

        var channel = pusher.subscribe('chat-channel');

        channel.bind('chat-event', function(data) {
            window.livewire.emit('mensajeRecibido', data);
        });

        setTimeout(function(){ window.livewire.emit('solicitaUsuario'); }, 100);
    </script>

</div>