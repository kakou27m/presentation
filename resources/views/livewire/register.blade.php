<div>
    @section('currentPage','Inscription')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
              <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <div class="auth-form-transparent card card-login text-left p-3">
                  <div class="brand-logo text-center">
                    <img src="{{asset('images/logo_odi.png')}}" class="img-fluid" width="80" alt="logo">
                  </div>
                  <h6 class="font-weight-light text-center">Nous sommes heureux du faite que vous nous rejoingnez</h6>
                  <form class="p-3 " wire:submit.prevent="registration">
                    @if (session()->has('notification.message'))
                    <div class="alert {{session('notification.type')}} text-center " role="alert">
                      {{session('notification.message')}}
                    </div>
                    @endif
                      <div class="row">
                          <div class="col">
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                  <span class="input-group-text bg-red border-right-1">
                                    <i class="mdi mdi-account-outline text-white"></i>
                                  </span>
                                </div>
                                <input type="text" wire:model.lazy="fname" class="form-control form-control-lg border-left-0 @error('fname') is-invalid @enderror" placeholder="Nom de famille" style="text-transform: uppercase;">
                                @error('fname')
                                  <span class="invalid-feedback ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                          </div>
                          <div class="col">
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                  <span class="input-group-text bg-red border-right-1">
                                    <i class="mdi mdi-account-outline text-white"></i>
                                  </span>
                                </div>
                                <input type="text" wire:model.lazy="lname" class="form-control form-control-lg border-left-0 @error('lname') is-invalid @enderror" placeholder="Prénoms" style="text-transform: capitalize;">
                                @error('lname')
                                  <span class="invalid-feedback ml-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                          </div>
                      </div>
                      <div class="row mt-1">
                          <div class="col">
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                  <span class="input-group-text bg-red border-right-1">
                                    <i class="mdi mdi-email-outline text-white"></i>
                                  </span>
                                </div>
                                <input type="email" wire:model.lazy="email" class="form-control form-control-lg border-left-0 @error('email') is-invalid @enderror " placeholder="Adresse E-mail" style="text-transform: lowercase;">
                                @error('email')
                                  <span class="invalid-feedback ml-3" role="alert">
                                    <strong> {{ $message }} </strong>
                                  </span>
                                @enderror
                              </div>
                          </div>
                          <div class="col">
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                  <span class="input-group-text bg-red border-right-1">
                                    <i class="mdi mdi-phone text-white"></i>
                                  </span>
                                </div>
                                  <input type="text" wire:model.lazy="phone" class="form-control form-control-lg border-left-0 @error('phone') is-invalid @enderror " placeholder="Téléphone">
                                  @error('phone')
                                    <span class="invalid-feedback ml-3" role="alert">
                                      <strong> {{ $message }} </strong>
                                    </span>
                                  @enderror
                              </div>
                          </div>
                      </div>
                    <div class="row mt-1">
                        <div class="col">
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                    <span class="input-group-text bg-red border-right-1">
                                        <i class="icon icon-location text-white"></i>
                                    </span>
                                </div>
                                  <input type="text" wire:model.lazy="city" class="form-control form-control-lg border-left-0 @error('city') is-invalid @enderror" placeholder="Entrer votre ville" style="text-transform: capitalize;">
                                @error('city')
                                    <span class="invalid-feedback ml-3" role="alert">
                                      <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                                
                            </div>
                           
                        </div>
                        <div class="col">
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                  <span class="input-group-text bg-red border-right-1">
                                    <i class="mdi mdi-map text-white"></i>
                                  </span>
                                </div>
                                <input type="text" wire:model.lazy="home" class="form-control form-control-lg border-left-0 home @error('home') is-invalid @enderror" placeholder="Commune ou compagnie de transport" style="text-transform: capitalize;"/>
                                @error('home')
                                    <span class="invalid-feedback ml-3" role="alert">
                                      <strong> {{ $message }} </strong>
                                    </span>
                                @enderror
                              </div>
                              
                            </div>
                        </div>
                      <div class="row mt-2">
                          <div class="col">
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                  <span class="input-group-text bg-red border-right-1">
                                    <i class="mdi mdi-lock-outline text-white"></i>
                                  </span>
                                </div>
                                <input type="password" wire:model.lazy="password" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="mot de passe">
                                @error('password')
                                    <span class="invalid-feedback ml-3" role="alert">
                                      <strong> {{ $message }} </strong>
                                    </span>
                                @enderror                        
                              </div>
                          </div>
                          <div class="col">
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                  <span class="input-group-text bg-red border-right-1">
                                    <i class="mdi mdi-lock-outline text-white"></i>
                                  </span>
                                </div>
                                <input type="password" wire:model.lazy="password_confirmation" class="form-control form-control-lg border-left-0 @error('password_confirmation') @enderror " id="exampleInputPassword" placeholder="Confirmer le mot de passe"> 
                                @error('password_confirmation')
                                    <span class="invalid-feedback ml-3" role="alert">
                                      <strong> {{ $message }} </strong>
                                    </span>
                                @enderror                      
                              </div>
                          </div>
                      </div>
                   
                    <div class="mt-3">
                      <button type="submit" class="btn btn-block btn-secondary btn-lg font-weight-medium auth-form-btn">S'inscrire
                        <span wire:loading wire.target="submit" class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                      </button>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                      Avez-vous un compte ? <a href="{{url('/login')}}" class="text-info">Se Connecter</a>
                    </div>
                  </form>
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
      @section('script')
      <script>
        // $(document).ready(function(){
        //     $('.myCity').hide();
        //     $('.Cancel').hide();
        //    $('.city').change(function(){
        //        var str ="";
        //        $('.city option:selected').each(function(){
        //            str +=$(this).text();
        //        });
        //        if(str == "Abidjan"){
        //            $('.home').attr('placeholder','Commune');
        //        }else if(str == "Autre"){
        //             $('select').hide();
        //             $('.myCity').show();
        //             $('.Cancel').show();
        //        }else{
        //         $('.home').attr('placeholder','precisez la compagnie de transport');
        //        }
        //    });
        //    $('.Cancel').on('click',function(){
        //         $('.myCity').hide();
        //         $(this).hide();
        //         $('.city').val('default');
        //        $('.city').show();
        //    });
        // })
    </script>
      @endsection
</div>
