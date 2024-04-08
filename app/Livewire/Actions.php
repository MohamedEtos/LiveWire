<?php

namespace App\Livewire;

use Livewire\Component;

class Actions extends Component
{

    public $count = 0;

    public function increment($param)
    {
        // $this->count++;
        dd('the parameter you us ' . $param);
    }

    public function unincrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.actions');
    }
}
