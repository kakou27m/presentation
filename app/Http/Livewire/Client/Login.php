<?php

namespace App\Http\Livewire\Client;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $login;
    public $password;
    public $message;

    public function login()
    {
        $this->validate([
            'login' => ['required','email'],
            'password' =>['required']
            ]);
            
        sleep(3);
        $cnx = Auth::attempt([
            'email'=>$this->login,
            'password' =>$this->password
        ]);

        if($cnx){
            session()->flash('notification.type','alert-success text-white');
            session()->flash('notification.message','Bienvenue '.Auth::user()->lname);
            
            return redirect()->to('home');
        }else{
            session()->flash('notification.type','alert-warning');
            session()->flash('notification.message','Identifiant ou mot de passe incorrect.!!');
        }
    }
    public function render()
    {
        return view('livewire.client.login');
    }
}
