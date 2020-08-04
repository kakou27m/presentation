<div>
@extends('layouts.app')
    @section('currentPage','Authentification')

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow mx-auto">
              <div class="col-lg-12 d-flex align-items-center justify-content-center">
                <div class="card card-login auth-form-transparent text-left pt-0 pl-0 pr-0 pb-5  mx-auto">
                  <div class="brand-logo">
                    {{-- <img src="images/logo_odi.png" class="float-right" width="100" alt="logo"> --}}
                  </div>
                  <h4 class="text-center">Ordyra MultiServices,</h4>
                  <h6 class="font-weight-light text-center">Nous sommes heureux de vous revoir</h6>
                  <form class="pt-3 w-50 mx-auto" wire:submit.prevent="login">
                    @if (session()->has('notification.message'))
                        <div class="alert {{session('notification.type')}} ">
                          <p class="text-dark"> {{session('notification.message')}} </p>
                        </div>
                    @endif
                    <div class="form-group">
                      <label for="exampleInputEmail">Identifiant</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-green border-right-1">
                            <i class="mdi mdi-account-outline text-white"></i>
                          </span>
                        </div>
                        <input type="text" wire:model.lazy="login" class="form-control form-control-lg border-left-0 @error('login') is-invalid @enderror" id="exampleInputEmail" placeholder="Entrer votre adresse mail">
                        @error('login')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword">Mot de Passe</label>
                      <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                          <span class="input-group-text bg-green border-right-1">
                            <i class="mdi mdi-lock-outline text-white"></i>
                          </span>
                        </div>
                        <input type="password" wire:model.lazy="password" class="form-control form-control-lg border-left-0 @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Entrer votre mot de passe"> 
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror                       
                      </div>
                    </div>
                    
                    <div class="my-3">
                      
                      <button type="submit" wire:loading.attr="disabled" class="btn btn-block btn-green btn-lg font-weight-medium auth-form-btn">Se Connecter
                          <span wire:loading  class="spinner-border spinner-border-sm" role="status" aria-hidden="true">
                            {{-- <i class="fa fa-spinner fa-pulse fa-3x fa-fw text-white"></i>
                            <span class="sr-only">Loading...</span> --}}
                          </span>
                      </button>
                    </div>
                    
                    <div class="text-center mt-4 font-weight-light">
                      Vous n'avez pas de compte ? <a href=" {{url('/register')}} " class="text-info">Créer</a>
                    </div>
                  </form>
                </div>
              </div>
              {{-- <div class="col-lg-6 login-half-bg d-flex flex-row">
                <p class="text-white font-weight-medium text-center flex-grow align-self-end">Tout droit Reservé à Ordyra MultiService</p>
              </div> --}}
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
    
</div>