<?php
 
namespace App\Livewire;
 
use Livewire\Component;
 
class Counter extends Component
{
    public $counter = 1;

    public function inc($val){
        $this->counter = $this->counter+$val;   
    }
    public function dis(){
        if($this->counter<1){

        }else{
        $this->counter--;
    }
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}