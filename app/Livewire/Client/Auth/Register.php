<?php

namespace App\Livewire\Client\Auth;

use Livewire\Component;
use Livewire\Attributes\Title;

class Register extends Component
{
    #[Title('Register')]

    public function render()
    {
        return view('livewire.client.auth.register');
    }
}
