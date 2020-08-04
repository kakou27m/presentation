@extends('layouts._master')
@section('title','Elevages')
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mb-5 text-right">
                <ul class="product-category">
                    @foreach ($category as $cat)
                        <li><a href="{{route('elevages',['id'=>$cat->id])}}" class="{{ (request()->is('elevages/{id}')) ? 'active' : '' }}">{{$cat->title}}</a></li>
                       
                    @endforeach
              </ul>
            </div>
        </div>
        <div class="row">
           
             @foreach ($product as $item) 
            
            <div class="col-md-6 col-lg-3">
                <div class="product">
                <a href="{{route('product.detail',['id'=>$item->id])}}" class="img-prod"><img class="img-fluid" src="../images/product-{{$item->id}}.jpg" alt="#">
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{$item->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="price-sale">{{number_format($item->price,0,'','.')}} FCFA</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                    @livewire('addbasket',['item'=>$item, 'key'=>$item->id]) 
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            @endforeach
        </div> 
        <div class="d-flex justify-content-center">
            {{$product->links()}}
        </div>
    </div>
</section>
@endsection 

