<?php

namespace App\Livewire;

use Livewire\Component;

class FullComp extends Component
{
    public function render()
    {
        return view('livewire.full-comp',['title'=>'mohamed mahrous'])->layout('layouts.default');
    }
}
