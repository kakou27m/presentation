<div>
    @section('title','Connexion')

    @section('content')
    <div class="container mx-auto my-auto mt-5">
        <div class="card w-50 mx-auto mt-4">
            <div class="card-body">
                <h3 class="card-title border-secondary text-center">
                    Veuillez-vous connecter
                </h3>
                <form wire:submit.prevent="registerUser">
                                {{-- {{ csrf_field() }} --}}
                                <div class="form-group">
                                  <input type="text" wire:model.debounce.10000s="firstName" class="form-control @error('firstName') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Entrer votre nom">
                                    @error('firstName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                  <input type="text" wire:model.debounce.5000s="lastName" class="form-control @error('lastName') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Entrer votre prenom">
                                    @error('lastName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                  <input type="email" wire:model.debounce.5000s="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Entrer votre adresse e-mail">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                  <input type="text" wire:model.debounce.5000s="phoneNumber" class="form-control @error('phoneNumber') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Entrer votre téléphone" maxlength="8" />
                                    @error('phoneNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                  <input type="text" wire:model.debounce.5000s="home" class="form-control @error('home') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Lieu de livraison">
                                    @error('home')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <input wire:model.debounce.5000s="password" type="password" name="" id="" class="form-control @error('password') is-invalid @enderror" placeholder="Choisir un mot de passe">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <input wire:model.debounce.5000s="password_confirmation" type="password" name="" id="" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirmez le mot de passe">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <button type="submit" wire:loading.attr="disabled" class="btn btn-block btn-primary">S'Inscrire
                                        <span wire:loading wire:target="password" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                              
                              </form>
            </div>
        </div>
    </div>
    @endsection
</div>
