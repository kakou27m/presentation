<div>
    @section('title','Mon panier')

    {{-- @section('content') --}}
    <div class="hero-wrap hero-bread" style="background-image: url('images/banner/tomates2.jpg');">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 text-center">
              <h1 class="mb-0 bread">Mon Panier</h1>
            </div>
          </div>
        </div>
    </div>
     <div class="ftco-section"> 
        <div class="container">
            @if (count($tableList) >0)
                    <div class="row">
                        <div class="col-md-12">
                        <div class="cart-list">
                                <div class="mx-auto">
                                    <h4 class="text-center">
                                        Total : {{number_format($totalAmount,0,'','.')}} FCFA
                                    </h4>
                                </div>
                            <table class="table">
                                <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>Produit</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th>Total</th>
                                    <th>&nbsp;&nbsp;&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tableList as $item)
                                                        
                                        <tr class="text-center">
                                            
                                            <td class="image-prod"><div class="img" style="background-image:url(images/product-{{$item['id']}}.jpg);"></div></td>
                                            
                                            <td class="product-name">
                                                <h3>{{$item['name']}}</h3>
                                            </td>
                                                
                                                <td class="price">{{number_format($item['price'],2,'.','')}} FCFA</td>
                                                
                                                <td class="">
                                                    <livewire:increm-decrem :item="$item" :key="$item['id']" />
                                                </td>
                                        
                                                <td class="total">{{number_format($item['price']*$item['quantity'],2,',','.')}} FCFA</td>
                                                <td class="product-remove" title="retirer"><button wire:click.prevent="removeItem({{$item['id']}})" class="btn btn-sm btn-orange pr-3 pl-3"><span class="ion-ios-close"></span></button></td>
                                        </tr>
                                            
                                    @endforeach
                                        <tr>
                                            <td colspan="3" class="text-center">Total Hors Taxe </td>
                                            <td colspan="2">{{number_format($totalAmount,0,'','.')}} FCFA</td>
                                            <td><button wire:click.prevent="clearCart" class="btn btn-lg btn-primary">Vider le panier</button></td>
                                        </tr>
                                        

                                </tbody>
                            </table>
                                <tfoot>
                                </tfoot>
                        </div>
                        <div class="float-right">
                            <div class="float-right">
                                <a href=" {{url('register')}} " class="btn btn-success btn-block float-right text-white" >Finaliser ma commande</a>
                            </div>
                        </div>
                    </div>
                @else
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">
                            Ooops !! Votre panier est vide. Merci de passer à l'achat
                            <img src=" {{asset('images/cart.png')}} " class="img-fluid" width="200" alt="">
                        </h3>
                    </div>
                </div>
            @endif
        </div>
    </section>
    {{-- @endsection --}}
</div>
<style>
    .card .card-body h1 span{
        font-size: 100px;
        color: #c62821;
    }
    .number-wrapper {
  position: relative;
}

.number-wrapper:after,
.number-wrapper:before {
  position: absolute;
  right: 5px;
  width: 1.6em;
  height: .9em;
  font-size: 10px;
  pointer-events: none;
  background: #fff;
}

.number-wrapper:after {
  color: blue;
  content: "\25B2";
  margin-top: 1px;
}

.number-wrapper:before {
  color: red;
  content: "\25BC";
  margin-bottom: 5px;
  bottom: -.5em;
}
</style>
