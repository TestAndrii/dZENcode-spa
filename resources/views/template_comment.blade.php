<div class="alert alert-success" style="margin-left: 50px;">
    id = {{$item->id}}</br>
    <small class="float-right">{{$item->user->name}}</small>
    <span class="text-muted">{{$item->created_at}}</span>
    <strong>{{$item->text_comment}}</strong>

    @if(count($item->files) > 0)
    </br>
    @foreach($item->files as $file)
        <button>
        {{$file->file_url}}
        </button>

    @endforeach
    @endif



    @if($item->children)
        @foreach($item->children as $children)
            @include('template_comment', ['item' => $children])
        @endforeach
    @endif
</div>