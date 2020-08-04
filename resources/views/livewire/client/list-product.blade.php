<div class="container mt-5">

  @if (session()->has('notification.message'))
  <div class="alert {{session('notification.type')}} alert-dismissible fade show text-center" role="alert">
    {{session('notification.message')}} 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

        <div class="row">

          <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-description">
                </p>
                <div class="table-responsive mt-0 pt-0">
                  
                  @if (count($product) > 0)
                  <h4 class="card-title mt-0 pt-0">Ma liste de commande</h4>
                  <table class="table table-hover">
                    <thead>
                      <tr class="text-center">
                        <th>Produit</th>
                        <th>Prix Unitaire</th>
                        <th>Quantité</th>
                        <th>Prix Total</th>
                        <th>Rétirer</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                     @foreach ($product as $item)    
                     <tr class="text-center">
                       <td>{{$item['name']}}</td>
                       <td> {{$item['price']}}</td>
                     <td>
                       <livewire:increm-decrem :item="$item" :key="$item['id']"/>
                     </td>
                       <td>{{$item['price']*$item['quantity']}}</td>
                         <td class="product-remove" title="retirer"><button wire:click.prevent="removeItem({{$item['id']}})" class="btn btn-sm btn-orange pr-3 pl-3"><span class="icon-square-cross"></span></button></td>
                     </tr>
                     @endforeach
                    
                   </tbody>
                 </table>
                     @else
                         <h2 class="text-center text-muted">Votre Panier est vide
                           <img src=" {{asset('images/cart.png')}} " class="img-fluid" width="200" alt="">
                         </h2>
                     @endif

                </div>
              </div>
            </div>
        </div>

          <div class="col-4">
              <div class="card w-100 bg-white">
                <div class="card-header border-success bg-transparent">
                  <h4 class="text-center">Récapitulatif</h4>
                </div>
                <h5 class="pl-3">Nombre de produit <span class="badge badge-dark text-white">{{($total < 10 ? '0'.$total : $total)}}</span> </h5>
                <h5 class="pl-3">Prix Hors Taxe <span class="badge badge-dark text-white">{{number_format($totalAmount,0,'.','.')}} FCFA </span></h5>
                <h5 class="pl-3">TVA 18%  <span class="badge badge-dark text-white">{{ $tva = (number_format(($totalAmount*0.18),0,'.','.'))}} FCFA</span> </h5>
                @if ($total > 0)
                <div class="card-body">
                   <h5 class="pl-3">Prix de Livraison <span class="badge badge-primary text-white">{{$delivery = (strtolower(Auth::user()->city) =='abidjan' ? '1000' : '2000')}} FCFA </span></h5>
                   <h4 class="pl-3">Total TTC <span class="badge badge-success p-2"> {{number_format($totalAmount+$tva+$delivery,2,',','.')}} FCFA </span></h4>
                   @else
                   <h5 class="pl-3">Prix de Livraison <span class="badge badge-primary text-white"> 0 FCFA </span></h5>
                   <h4 class="pl-3">Total TTC <span class="badge badge-success p-2"> 0 FCFA </span></h4>
                   @endif
                </div>
                <div class="card-footer border-success bg-transparent">
                  @if ($total > 0)
                  <button wire:click.prevent="ordered" wire:loading.attr="disabled" type="submit" class="btn btn-success btn-block btn-lg p-2">
                    Valider
                  </button>
                  @endif
                </div>
              </div>
              <div class="float-right" wire:loading wire:target="ordered">
                <img src=" {{asset('dashboard/images/loader/loader.gif')}} " width="180" alt="">
              </div>
          </div>
        </div>
</div>
