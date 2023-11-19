<div>
<form wire:submit="save">
    <div class="form-group">
        <label for="name"><strong>User Name</strong></label>
        <input
                type="text"
                wire:model.live="name"
                class="form-control"
                value="{{old('name')}}"
                id="name">
        @error("name")
        <small class="text-danger">{{ $message }}</small>
        @else
        <small class="text-muted">{{$name}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="email"><strong>E-mail</strong></label>
        <input type="text"
               wire:model.live="email"
               class="form-control"
               value="{{old('email')}}"
               id="email">

        @error("email")
        <small class="text-danger">{{ $message }}</small>
        @else
        <small class="text-muted">{{$email}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="homepage_url"><strong>Home page URL</strong></label>
        <input type="text"
               wire:model.live="homepage_url"
               class="form-control"
               value="{{old('homepage_url')}}"
               id="homepage_url">

        @error("homepage_url")
        <small class="text-danger">{{ $message }}</small>
        @else
        <small class="text-muted">{{$homepage_url}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="captcha"><strong>CAPTCHA</strong></label>
        <input type="text"
               wire:model="captcha"
               class="form-control"
               value="{{old('captcha')}}"
               id="captcha">

        @error("captcha")
        <small class="text-danger">{{ $message }}</small>
        @else
        <small class="text-muted">{{$captcha}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="text_comment"><strong>Text comment</strong></label>
        <input type="text"
               wire:model.live="text_comment"
               class="form-control"
               value="{{old('text_comment')}}"
               id="text_comment">

        @error("text_comment")
        <small class="text-danger">{{ $message }}</small>
        @else
        Answer to: <small class="text-muted">{{$parentText}}</small>
        </br>
        You comment: <small class="text-muted">{{$text_comment}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="file_url"><strong>Add file</strong></label>
        <input type="file"
               wire:model="file_url"
               class="form-control"
               id="file_url">

        @error("file_url")
        <small class="text-danger">{{ $message }}</small>
        @else
        <small class="text-muted">{{$file_url}}</small>
        @enderror
    </div>

    <div wire:offline class="alert alert-danger text-center">
        <strong>No Internet connect</strong>
    </div>

    <span wire:loading>Saving...</span>

    <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6 pt-2 text-right">
            <button
                    class="btn btn-primary"
                    type="submit"
            >Sent sessage</button>
        </div>
    </div>
</form>

</div>