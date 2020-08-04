<?php

namespace App\Http\Livewire;

use App\Product;
use Darryldecode\Cart\Cart;
use Livewire\Component;

class Addbasket extends Component
{
    public $item = [];
    public $quantity = 0;
    public $name ;
    public $prods=[];
    public function mount($item)
    {
        $this->item = $item;
        $this->quantity = $item['quantity'];
        $this->name = $item['name'];

    }
   
    public function addProdducts($item){
        
        $prods = Product::find($this->item['id']);
        
        \Cart::add(array(
            'id' => $prods->id,
            'name' => $prods->name,
            'price' => $prods->price,
            'quantity' =>1,
            // 'attributes' => array()
        ));
        $this->emit('productAdded');
    }
    public function render()
    {
        return view('livewire.addbasket');
    }
}
