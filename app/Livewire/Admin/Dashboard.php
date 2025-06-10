<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Admin Dashboard')]
#[Layout('layouts.admin')]

class Dashboard extends Component
{
    public function mount()
    {
        if (session()->has('swal-auth')) {
            $this->dispatch('show-swal', session('swal-auth'));
        }
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
