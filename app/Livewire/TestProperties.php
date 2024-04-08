<?php

namespace App\Livewire;

use Livewire\Component;

class TestProperties extends Component
{

    public $name ;
    // public $name2 ;
    // public $name3;

    // public function mount()
    // {
    //     $this->fill([
    //         'name'=>'etos',
    //         'name2'=>'etos2',
    //         'name3'=>'etos3',
    //     ]);

    //     $this->reset(['name','name2']);
    //     $this->resetExcept(['name2']);
    // }



    // public function search (){

    // }


    // public function getFullNameProperty ()
    // {

    //     return implode(' ',$this->names);

    // }



    public function render()
    {
        return view('livewire.test-properties');
    }
}
