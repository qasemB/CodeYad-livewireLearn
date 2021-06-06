<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{

    public $title = "";
    public $content = "";

    public $allPosts;

    protected $rules = [
        'title' => 'required|string|min:5',
        'content' => 'required | string|max:100',
    ];

    public function save()
    {
        $this->validate();
        $newPost = new Post;
        $newPost->title = $this->title;
        $newPost->content = $this->content;
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