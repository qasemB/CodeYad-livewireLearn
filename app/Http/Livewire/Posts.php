<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Posts extends Component
{
    use WithFileUploads;

    public $title = "";
    public $content = "";
    public $photo;

    public $allPosts;

    protected $rules = [
        'title' => 'required|string|min:5',
        'content' => 'required | string|max:100',
        'photo' => 'image | max:1024',
    ];

    public function save()
    {
        $this->validate();
        $image = $this->photo->store('public/photos');
        $newPost = new Post;
        $newPost->title = $this->title;
        $newPost->content = $this->content;
        $newPost->image = "/storage/photos/" . explode("/", $image)[2];
        $newPost->save();
        $this->allPosts = Post::all();

        $this->reset('title', 'content');
    }

    public function mount()
    {
        $this->allPosts = Post::all();
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
