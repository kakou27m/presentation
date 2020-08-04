@extends('layouts._master')
@section('title','MultiServices')
@section('content')

<video muted autoplay loop="loop">
    <source src="{{asset('videos/cok.mp4')}}">
</video>
<div class="describe-us mt-5">
    <h3 class="text-center p-3 text-white">Qui Sommes-nous ?</h3>
    <p class="text-center">
        <span class="text-danger">ORDYRA</span> multiservices (OMS) est une jeune entreprise ivoirienne très active, qui évolue dans plusieurs domaines d’activités à petite et moyenne échelle.  Elle fournit des produits  d’élevage, agricoles et des services d’appui.  Ainsi,  elle regroupe 3 pôles : 
        <ul>
            <li class="text-left">ORDYRA Elevage</li>
            <li class="text-left">ORDYRA Agriculture </li>
            <li class="text-left">ORDYRA Services d’appui</li>
        </ul>
        Ces pôles regroupent en leur sein des activités de mêmes nature.

        
    </p>
    <p>
        pour plus d'information veuillez cliquer ici
        <button type="submit" class="btn btn-orange">plus d'information</button>
    </p>
</div>
    
@endsection


<style>
    video{
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
    background: url('Images/videos/cok.mp4') no-repeat;
    background-size: cover;
    z-index: -100;
}
.describe-us{
    float: right;
    width: 30%;
    height: 450px;
    margin-right: 15px;
    color: #fff;
    text-align: center;
    background-color: rgba(0,0,0,0.1);
    border-radius: 10px;
}

</style>