<div>
    <a href="#" wire:model="name" wire:click="update" data-toggle="modal" data-target="#product" class="img-prod"><img class="img-fluid" src="images/product-{{$item['id']}}.jpg" alt="#">
    </a>

<div class="modal fade" id="product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> 
        <div class="modal-body">
            {{$name}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
        </div>
      </div>
    </div>
</div>
</div>
@section('script')
    
<script>
    $(document).ready(function(){
        // $modal-fade-transform: scale(.8)
    })
</script>
@endsection