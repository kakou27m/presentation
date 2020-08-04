<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Connect extends Component
{
    public $login;
    public $password;

    public function Authification()
    {
        

        Auth::attempt([
            'email' =>$this->login,
            'password' =>$this->password
        ]);

        return redirect(route('home'));
    }
    public function render()
    {
        return view('livewire.connect');
    }
}
