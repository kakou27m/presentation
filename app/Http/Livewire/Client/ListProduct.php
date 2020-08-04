<?php

namespace App\Http\Livewire\Client;

use App\Order;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListProduct extends Component
{

    public $product = [];
    public $totalAmount;
    protected $listeners = ['reculculate'=>'mount'];
    public $quantity = 0;
    public $ident ;
    public $total;

    public function mount()
    {
        $this->product = \Cart::getContent()->toArray();
        $this->total = count($this->product);
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

    public function ordered()
    {
        $products = \Cart::getContent()->toArray();
        $myKey = [];

        foreach($products as $key => $value)
        {
            array_push($myKey,key($products));
            next($products);
        }
        $i = 0;
        sleep(3);
        for($i = 0; $i <= count($myKey)-1; $i++)
        {
            Order::create([
                'client_id' => Auth::user()->id,
                'product_id' => $products[$myKey[$i]]['id'],
                'quantity' => $products[$myKey[$i]]['quantity'],
                'price' => $products[$myKey[$i]]['price'],
                'status' => 0
            ]);
            if($i == count($myKey)-1){
                session()->flash('notification.type','alert-success');
                session()->flash('notification.message','Vos commandes ont été enregistrées avec succès.');
            }
            \Cart::clear();
            $this->mount();
        }
     
    }
    public function render()
    {
        return view('livewire.client.list-product');
    }
}
