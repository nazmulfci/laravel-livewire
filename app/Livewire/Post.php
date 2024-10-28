<?php

namespace App\Livewire;

use App\Models\Post as ModelsPost;
use App\Models\User;
use Livewire\Component;

class Post extends Component
{
    public $title = '';
    public $description = '';

    public function save(){

        $this->validate([
            'title' => 'required',
            'description' => 'required',
        ],[
            'title' => 'Must be input Title',
            'description' => 'Must be input Description',
        ]);

        ModelsPost::insert([
            'user_id' => 2,
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $this->redirect('/posts', navigate:true);

    }
    
    public function deletePost(ModelsPost $post){
        $post->delete();
    }
    public function render()
    {
        $posts = ModelsPost::all();
        return view('livewire.post',[
            'posts' => $posts
        ]);
    }
}
