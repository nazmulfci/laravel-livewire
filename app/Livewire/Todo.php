<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todo')]
class Todo extends Component
{

    public $todoInput = '';
    public $todos = [
        'nazmul',
        'saiful',
    ];

    public function addValue(){
        if(strlen($this->todoInput)){
        $this->todos [] = $this->todoInput;
        $this->reset('todoInput');
        }
    }
    public function render()
    {
        return view('livewire.todo');
    }
}
