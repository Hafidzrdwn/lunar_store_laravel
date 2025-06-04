<?php

namespace App\Livewire\Client\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{

    #[Title('Login')]
    
    public function render()
    {
        return view('livewire.client.auth.login');
    }
}
