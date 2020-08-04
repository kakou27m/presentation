<?php

namespace App\Http\Livewire;

use App\Client;
use Darryldecode\Cart\Cart;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $fname;
    public $lname;
    public $email;
    public $phone;
    public $myCity;
    public $city;
    public $home;
    public $password_confirmation;
    public $password;

   public function registration()
   {
       sleep(1);
       $this->validate([
           'fname' => ['required','String','max:25'],
           'lname' => ['required','String','max:45'],
           'email' => ['required','email','unique:clients,email'],
           'phone' => ['required','numeric'],
           'city' => ['required','String','max:25'],
           'home' => ['required','String','max:25'],
           'password' => ['required','String','min:8','confirmed'],
           'password_confirmation' => ['required'],
       ]);
       sleep(3);
       $reg = Client::create([
           'fname' =>$this->fname,
           'lname' => $this->lname,
           'phone' => $this->phone,
           'email' => $this->email,
           'city' => $this->city,
           'home' => $this->home,
           'password' => Hash::make($this->password)
       ]);

       if($reg)
       {
           session()->flash('notification.type','alert-success');
           session()->flash('notification.message','Bienvenue, Ordyra Multiservices est heureux de vous compter parmis sa clientelle');
           
           $cnx = Auth::attempt([
               'email' => $this->email,
               'password' => $this->password,
           ]);
           if($cnx)
           {
                sleep(2);
               return redirect()->to('home');
            }
       }else{
           session()->flash('notification.type','alert-warning');
           session()->flash('notification.message','Impossible de vous inscrire, veuillez réessayer.');
       }

   }


    // public function registerUser()
    // {
    //     $emailAdress ="malachienoel@gmail.net";
    //     $this->validate([
    //         'firstName' => ['required','max:25'],
    //         'lastName' => ['required','max:45'],
    //         'email' => ['required','String','email','unique:clients'],
    //         'phoneNumber' => ['required','max:10'],
    //         'home' => ['required'],
    //         'password' => ['required','min:8','max:20','confirmed'],
    //     ]);
    //     sleep(3);
    //     $regis = Client::create([
    //         'fname' => $this->firstName, 
    //         'lname' => $this->lastName,
    //         'email' => $this->email,
    //         'phone' => $this->phoneNumber,
    //         'home' => $this->home,
    //         'password' => Hash::make($this->password)
    //     ]);
    //     if($regis)
    //     {
    //         return redirect()->to('login');
    //     }
       
    //     // dd(Client::all());
    // }
    public function render()
    {
        return view('livewire.register');
    }
}
