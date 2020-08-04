<?php

namespace App\Http\Livewire;

use App\Product;
use Darryldecode\Cart\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class AddProduct extends Component
{
    public $prod=[];
    public $prods=[];
    public $quantity = 1;
    public $prod_id;
    

    use WithPagination;
    
    public function addProdduct(int $produs)
    {
        
        $this->prod_id = $produs;
      
         $this->prods = Product::findOrFail($this->prod_id)->toArray();
        

        \Cart::add(array(
            'id' => $this->prods['id'],
            'name' => $this->prods['name'],
            'price' => $this->prods['price'],
            'quantity' =>$this->quantity,
            // 'attributes' => array()
        ));
        $this->emit('productAdded');
       
    }
    
    public function render()
    {
        return view('livewire.add-product',['product'=>Product::where('categorie_id',1)->paginate(12)]);
    }
    
    
}
