<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Password extends Component
{
    public $user;
    public $password;
    public $password_confirmation;
    protected $listeners = ['emailAdress'=>'mount'];

    public function mount($emailAdress)
    {
        $this->emailAdress = $emailAdress;
    }

    public function postAdded($emailAdress)
    {
        // $this->addedMessageVisible = true;
        $this->user = $emailAdress;
        dd($this->user);
    }
    public function password($emailAdress)
    {
        
        // $this->validate([
        //     'password' => ['required','min:8','max:20','confirmed'],
        //     'password_confirmation' => ['required'],
        // ]);
        $this->user = $emailAdress;
        // $this->user = User::find($emailAdress);
        dd($this->user);
    }
    public function render()
    {
        return view('livewire.password');
    }
}
