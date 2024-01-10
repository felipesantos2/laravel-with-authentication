<?php

namespace App\Livewire;

use Livewire\Component;

class LoginForm extends Component
{
    public string $name = '';

    public string $email = '';

    public function render()
    {
        return view('livewire.login-form');
    }
}
