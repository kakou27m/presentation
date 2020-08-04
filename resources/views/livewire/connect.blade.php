<div>
    <div class="container mx-auto my-auto">
        <div class="card w-50 mx-auto">
            <div class="card-body">
                <h3 class="card-title border-secondary text-center">
                    Veuillez-vous connecter
                </h3>
                <form wire:submit.prevent="Authification">
                
                    <div class="form-group">
                        <label for="password" class="control-label">Login</label>
                        <input wire:model="login" type="text" name="" id="" class="form-control @error('login') is-invalid @enderror">
                        @error('login')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="confirm" class="control-label">Mot de passe</label>
                        <input wire:model="password" type="password" name="" id="" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success float-right w-25" wire:loading.attr="disabled">
                            Se Connecter
                            <span wire:loading wire:target="password" class="spinner-border spinner-border-sm" role="status" aria-hidden="true">

                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
