<?php

namespace App\Http\Livewire;

use App\Mail\EnvoyerMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contacts extends Component
{
    public $firstName;
    public $lastName;
    public $phone;
    public $email;
    public $subject;
    public $message;
    public function sendMail()
    {
        $msg = $this->validate([
            'firstName' => ['required','string','max:20'],
            'lastName' => ['required','string','max:35'],
            'phone' => ['required'],
            'email' => ['required','email','max:256'],
            'subject' => ['required','String','max:25'],
            'message' => ['required','string','min:15','max:1500'],
        ]);

         Mail::to("ordyrainfo@gmail.com")->send(new EnvoyerMail($msg));
       
            session()->flash('notification.type','alert-success');
            session()->flash('notification.message','Votre mail a été envoyé avec succès. !!!');
            $this->reset();
    }
    public function render()
    {
        return view('livewire.contacts');
    }
}
