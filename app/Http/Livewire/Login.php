<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $form =[
        'email' =>'',
        'password' =>'',
    ];

    public function registerUser()
    {
        dd($this->form);


        // $this->validate([
        //     'form.email' => ['required','email'],
        //     'form.password' =>['required'],
        // ])
        // return redirect(route('home'));
    }
    public function render()
    {
        return view('livewire.login');
    }
}
