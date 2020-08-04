<?php

namespace App\Http\Livewire\Client;

use App\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    public $today;
    
    // use WithPagination;

    public function render()
    {
        setlocale(LC_TIME,'fr_FR');
        $this->today = strftime(" %A %d %B %Y");
        return view('livewire.client.home',[
            'order'=>Order::where('client_id',Auth::user()->id)->paginate(5),
            'today' =>$this->today]);
    }
}
