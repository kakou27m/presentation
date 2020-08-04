<div>
    @section('title','Agriculture')
    {{-- @section('content') --}}
    <div class="hero-wrap hero-bread" style="background-image: url('images/banner/tomates2.jpg');">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 text-center">
              <h1 class="mb-0 bread">Ordyra Agriculture</h1>
            </div>
          </div>
        </div>
      </div>
      <section class="ftco-section">
          <div class="container">
              <div class="row">
                 
                  @foreach ($product as $item)
                  <div class="col-md-6 col-lg-3">
                      <div class="product">
                          {{-- href=" {{route('product.show',['id'=>$item['id']])}}  " --}}
                          <a href=" {{route('product.show',['id'=>$item['id']])}} class="img-prod"><img class="img-fluid" src="images/product-{{$item->id}}.jpg" alt="#">
                          </a>
                          <div class="text py-3 pb-4 px-3 text-center">
                              <h3><a href="#">{{$item['name']}}</a></h3>
                              <div class="d-flex">
                                  <div class="pricing">
                                      <p class="price"><span class="price-sale">{{number_format($item->price),0,'.','.'}} FCFA</span></p>
                                    </div>
                                </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                        
                                        <button wire:click.prevent="addProdduct({{$item->id}})" class="btn  d-flex justify-content-center align-items-center mx-1">
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
        <div class="d-flex justify-content-center">
            {{$product->links()}}
        </div>
    </section>

    {{-- @endsection --}}
</div>