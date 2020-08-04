@extends('layouts._master',['subtitle'=>'Ordyra Élevages'])

@section('content')
{{-- {{dd($producShow)}} --}}
    @livewire('details',['product'=>$product->id])
@endsection