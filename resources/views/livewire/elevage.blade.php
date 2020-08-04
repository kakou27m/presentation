<div>
    @section('title','Elevage')
    @section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 mb-5 text-right">
                    <ul class="product-category">
                        {{-- <li><a href="#" class="myAlink active" wire:click.prevent="allProduct" wire:model="{{$all}}">Tout</a></li>
                        <li><a href="#" class="myAlink" wire:click.prevent="chicken">Poulets</a></li>
                        <li><a href="#" class="myAlink" wire:click.prevent="fish">Poissons</a></li> --}}
                    </ul>
                    <div class="w-full flex justify-center">
                        <input wire:model="search" type="text" class="shadow appearance-none border rounded w-100 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Taper le nom de l'article (exemple: poisson ou poulet)">
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $item)
                <div class="col-md-6 col-lg-3">
                    <div class="product">
                    <a href="{{route('product.detail',['id'=>$item->id])}}" class="img-prod"><img class="img-fluid" src="images/product-1.jpg" alt="#">
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">{{$item->name}}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span class="price-sale">{{number_format($item->price)}} FCFA</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                        
                                        <button Wire:click.prevent="addProdduct({{$item->id}})" class="btn  d-flex justify-content-center align-items-center mx-1">
                                            <span>Ajouter au panier <i class="ion-ios-cart"></i></span>
                                        </button>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> 
        </div>
    </section>
    @endsection
</div>

