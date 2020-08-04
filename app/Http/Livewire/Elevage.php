<?php

namespace App\Http\Livewire;

use App\Product;
use Darryldecode\Cart\Cart;
use Livewire\Component;

class Elevage extends Component
{

    public $prod=[];
    public $prods=[];
    public $quantity = 1;
    public $prod_id;
    public $all;
    public $filter = 0;

    public $search;

    protected $updatesQueryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }
   

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
        return view('livewire.elevage',[
            'products' => $this->search === null ?
                Product::all():
                Product::where('name',$this->search)->orWhere('name', 'like', '%' . $this->search . '%')
        ]);
        // $this->mount();
    }
}
