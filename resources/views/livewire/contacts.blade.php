<div>
  @section('title','Contact')

  @section('content')
  <section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 order-md-last d-flex">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1H4Jd4fw5iDvD8hVvZxMLY1VY3XGj6CW0" class="rounded" width="920" height="380"></iframe>
            </div>
        </div>
    </div>
    <div class="container mt-4">
      <div class="row block-12 justify-content-center">

        @if (session()->has('notification.type'))
        <div class="alert {{session('notification.type')}} alert-dismissible fade show" role="alert">
          {{session('notification.message')}}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
        @endif

        <div class="col-md-10 order-md-last d-flex">
          
          <form wire:submit.prevent="sendMail" action="#" class="bg-white p-5 contact-form rounded">

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default text-center">&nbsp;&nbsp;&nbsp; Entrer votre nom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
              </div>
              <input type="text" class="form-control" wire:model="firstName" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="text-transform: uppercase;" autofocus="true">
    
            </div>
              @error('firstName')
                <p class="text-danger">{{$errors->first('firstName')}}</p>
              @enderror
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">&nbsp; Entrer votre prénom &nbsp;&nbsp;</span>
              </div>
              <input type="text" class="form-control firstName" wire:model="lastName" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="text-transform: capitalize;">
            </div>
              @error('lastName')
                <p class="text-danger">{{$errors->first('lastName')}}</p>
              @enderror
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-white"  id="inputGroup-sizing-default">Entrer votre téléphone </span>
              </div>
              <input type="text" class="form-control lastName" wire:model="phone" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

              @error('phone')
                <p class="text-danger">{{$errors->first('phone')}}</p>
              @enderror

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">Entrer votre e-mail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
              </div>
              <input type="email" class="form-control" wire:model="email" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            @error('email')
              <p class="text-danger">{{$errors->first('email')}}</p>
            @enderror

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text bg-primary text-white" id="inputGroup-sizing-default">&nbsp;&nbsp;&nbsp;&nbsp; Entrer votre objet &nbsp;&nbsp;&nbsp;</span>
              </div>
              <input type="text" class="form-control" wire:model="subject" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            @error('subject')
              <p class="text-danger">{{$errors->first('subject')}}</p>
            @enderror

            <div class="form-group">
              <textarea  id="" cols="30" rows="4" wire:model="message" class="form-control" placeholder="Entrer votre Message"></textarea>
            </div>
            @error('message')
              <p class="text-danger">{{$errors->first('message')}}</p>
            @enderror
            <div class="form-group float-right">
              <button type="submit" class="btn btn-orange">Envoyer le message</button>
            </div>
          </form>
        
        </div>
      </div>
    </div>
</section>
  @endsection
</div>
