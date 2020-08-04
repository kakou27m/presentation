<div>
    <div class="container mx-auto my-auto">
        <div class="card w-50 mx-auto">
            <div class="card-body">
                <h3 class="card-title border-secondary text-center">
                    Veuillez définir votre mot de passe
                </h3>
                <form action="">
                
                    <div class="form-group">
                        <label for="password" class="control-label">Mot de passe</label>
                        <input wire:model="password" type="password" name="" id="" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="confirm" class="control-label">Confirmez le mot de passe</label>
                        <input wire:model="password_confirmation" type="password" name="" id="" class="form-control @error('password_confirmation') is-invalid @enderror">
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" wire:click.prevent="postAdded" class="btn btn-success float-right w-25" wire:loading.attr="disabled">
                            Valider
                            <span wire:loading wire:target="password" class="spinner-border spinner-border-sm" role="status" aria-hidden="true">

                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .card{
        background-color: #fff;
        opacity: 0.8;
    }
</style>