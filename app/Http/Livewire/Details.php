<?php

namespace App\Http\Livewire;

use App\Product;
use Darryldecode\Cart\Cart;
use Livewire\Component;

class Details extends Component
{

    public $item = [];
    public $name;
    public $noUpdate = 0;
    public $listeners = ['calculate'=>'mount'];

    public function mount($item)
    {
        $this->item = $item;
        $this->name = $item['name'];
    }
   
    public function update($item){
        
        $this->name = $this->item['name'];
    }

    // public $product = [];
    // public $qte = 0;
    // public $addedPost;
    // protected $listeners = ['postAdded'];
    
    // public function mount($postId)
    // {
    //     $this->addedPost = Product::find($postId);
    //     dd($this->addedPost);
    // }
    // public function mount()
    // {
    //     $this->qte = 1;
    //     $this->detail = Product::findOrFail('1');
    // }
    
    // public function Increment()
    // {
    //     $this->qte ++;
    // }
 
    // public function Decrement()
    // {
    //     ($this->qte < 2 ? '' :$this->qte--);
    // }

    // public function addProdduct($produs)
    // {
        
    //     $this->prod_id = $produs;
    //      $this->prods = Product::findOrFail($this->prod_id)->toArray();
        

    //     \Cart::add(array(
    //         'id' => $this->prods['id'],
    //         'name' => $this->prods['name'],
    //         'price' => $this->prods['price'],
    //         'quantity' =>$this->qte,
    //         // 'attributes' => array()
    //     ));
        
    //     $this->emit('productAdded');
    // }
    public function render()
    {
        return view('livewire.details',
        ['posts' => Product::where('name', 'like', '%'.$this->search.'%')->get(),]
    );
    }
}
