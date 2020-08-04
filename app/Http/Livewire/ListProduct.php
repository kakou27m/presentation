<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Cart;
use Livewire\Component;

class ListProduct extends Component
{

    public $tableList = [];
    public $totalAmount;
    protected $listeners = ['reculculate'=>'mount'];
    public $quantity = 0;
    public $ident ;
    public function mount()
    {
        $this->tableList = \Cart::getContent()->toArray();
        
        $this->totalAmount = \Cart::getTotal();
        
    }
   

    public function removeItem($produs)
    {
        
        $this->cartItem = $produs;
        \Cart::remove($this->cartItem);
        $this->mount();
    }
    public function clearCart()
    {
        \Cart::clear();
        $this->mount();
    }
    public function update($item){
        $this->ident = $item;
        $ite = \Cart::getContent();
        
        \Cart::update($this->$ite[$this->ident], array(
            'quantity' => array(
                'relative' => false,
                'value' => $this->quantity
            ),
          ));
        $this->mount();
    }
    public function payement()
    {
        return redirect()->to('login');
    }
    public function render()
    {
        return view('livewire.list-product');
    }
}
