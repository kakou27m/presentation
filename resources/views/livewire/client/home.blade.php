<div wire:poll.1s>
@extends('layouts.app')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12 mb-4 mb-xl-0">
        <h4 class="font-weight-bold text-dark">Historique de Commande</h4>
        <p class="font-weight-normal mb-2 text-muted">{{$today}}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-9 grid-margin-lg-0 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
              <h4 class="card-title">Toutes Mes Commandes</h4>
              <div class="table-responsive mt-3">
                <table class="table table-header-bg">
                  <thead>
                    <tr class="text-center">
                      <th>Commande</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($order as $item)
                          <tr>
                            <td class="text-center"> {{"commande N° ".$loop->iteration. " du ".date_format($item->created_at,'d-m-Y H:i:s')}} </td>
                            <td class="text-center"> <span class="bade p-2 badge-{{$item->Color}} rounded">{{$item->IsAnStatus}}</span> </td>
                          </tr>
                      @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
                    <div class="mx-auto">
                      {{$order->links()}}
                    </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
@endsection
</div>