<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $email;

    public function subscribe()
    {
        dd($this->email);
    }

    public function render()
    {
        return view('livewire.home');
    }
}
