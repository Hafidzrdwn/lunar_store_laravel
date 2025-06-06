<?php

namespace App\Livewire\Client;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Premium Digital Products')]

class Home extends Component
{

    public function mount()
    {
        if (session()->has('swal-auth')) {
            $this->dispatch('show-swal', session('swal-auth'));
        }
    }

    public function render()
    {
        return view('livewire.client.home');
    }
}
