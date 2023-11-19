<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\File;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class ChatForm extends Component
{
    use WithFileUploads;
    public int $parent_id = 0;
    // users
    public string $name;
    public string $email;
    public string $homepage_url;
    // comments
    public string $captcha;
    public string $text_comment;
    // files
    public $file_url;

    protected $listeners = ['commentMessage'];
    #[On('parent')]
    public function parent($postId)
    {
        $this->parent_id = $postId;
    }

    /**
     * @return string[]
     */
    public function rules()
    {
        return [
            'parent_id' => 'numeric|exists:comments,id',
            'name' => 'required|alpha_num|max:256',
            'email' => 'required|email|max:256',
            'homepage_url' => 'nullable|url|max:256',
            'captcha' => 'required|alpha_num|max:256',
            'text_comment' => 'required|max:1000',
            'file_url' => 'nullable|max:2048'
        ];
    }

    public function save()
    {

        $this->validate();

        $user = User::where('email', $this->email)->first();
        if(!$user)
        { // new user
            $user = new User([
                'name' => $this->name,
                'email' => $this->email,
                'password' => '*',
                'homepage_url' => $this->homepage_url,
            ]);
            $user->save();
        }

        $comment = new Comment([
            'user_id' => $user->id,
            'parent_id' => $this->parent_id,
            'captcha' => $this->captcha,
            'text_comment' => $this->text_comment,
        ]);
        $comment->save();

        if($this->file_url != '') {
            $fileName_new = Str::random(40) . '.' . $this->file_url->getClientOriginalExtension();;
            $img = Image::make($this->file_url)
                ->resize(320,240)
                ->save(Storage::path('/public/'.$fileName_new));
            $file = new File([
                'comment_id' => $comment->id,
                'file_url' => '/storage/'.$fileName_new,
            ]);
            $file->save();
        }

        return redirect('/')
            ->with('status', 'Comment added successfully.');
    }

    /**
     * @return View
     */
    public function render(): View
    {
        $commentParent = Comment::where('id', $this->parent_id)->first();
        $parentText = ($commentParent) ? $commentParent->text_comment : '';
        $parentText = substr($parentText,0,80) . '...';
        return view('livewire.chat-form', ['parentText' => $parentText]);
    }
}
