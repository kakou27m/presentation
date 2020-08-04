<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Cart;
use Livewire\Component;
use App\Product;

class IncremDecrem extends Component
{
    
    public $item = [];
    public $quantity = 0;
    public $noUpdate = 0;
    public $listeners = ['calculate'=>'mount'];

    public function mount($item)
    {
        $this->item = $item;
        $this->quantity = $item['quantity'];
    }
   
    public function update($item){
        
        \Cart::update($this->item['id'], array(
            'quantity' => array(
                'relative' => false,
                'value' => $this->quantity
            ),
          ));
        $this->emit('reculculate');
    }


    public function render()
    {
        return view('livewire.increm-decrem');
    }
}
