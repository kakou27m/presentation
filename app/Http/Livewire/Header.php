<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Cart;
use Livewire\Component;

class Header extends Component
{
    public $cartCount = 0;
    public $cartItem = [];
    protected $listeners = [
        'productAdded' => 'updateCartTotal',
        'productRemoved' => 'updateCartTotal',
        'clearCart' => 'updateCartTotal',
        'reculculate' =>'mount'
    ];
    public function mount()
    {
        $this->cartItem = \Cart::getContent()->toArray();
        $this->cartCount =  count($this->cartItem);
    }
    public function updateCartTotal(): void
    {
        $this->mount();
    }
    public function render()
    {
        return view('livewire.header');
    }
}
