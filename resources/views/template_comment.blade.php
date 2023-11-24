<div class="alert alert-success" style="margin-left: 50px;">
    id = {{$item->id}}</br>
    <small class="float-right">{{$item->user->name}}</small>
    <span class="text-muted">{{$item->created_at}}</span>

    <p type="button" wire:click="commentMessage({{$item->id}})" class="card-text">
        <strong>{{$item->text_comment}}</strong>
    </p>

    @if(count($item->files) > 0)
        </br>

        @foreach($item->files as $file)

        <a href="{{$file->file_url}}" data-lightbox="{{$file->file_url}}" data-title="image">
            <img src="{{$file->file_url}}" style="height: 50px">
        </a>

        @endforeach
    @endif

    @if($item->children)
        @foreach($item->children as $children)
            @include('template_comment', ['item' => $children])
        @endforeach
    @endif
</div>
