<div>
    <h3 class="text-center text-danger mt-3">
        Date limite de livraison dans 5 jours à compter du {{$date}}
    </h3>
    <div class="container">
        <div class="card bg-white mx-auto mt-3" style="width:40rem;">
            <div class="card-header border-dark bg-white">
                <h4 class="text-center">Veuillez renseigner vos informations</h4>
            </div>
            <div class="card-body">
                <form action="{{route('pdf.order')}} " method="POST">
                  @csrf
                    <div class="form-group row">
                        <label for="firstname" class="col-sm-4 col-form-label">Nom</label>
                        <div class="col-sm-8">
                          <input type="text" name="fname" class="form-control" id="firstname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-sm-4 col-form-label">Prénoms</label>
                        <div class="col-sm-8">
                          <input type="text" name="lname" class="form-control" id="lastname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="emailAdress" class="col-sm-4 col-form-label">Adresse E-mail</label>
                        <div class="col-sm-8">
                          <input type="email" name="userEmail" class="form-control" id="emailAdress">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phoneNumber" class="col-sm-4 col-form-label">Téléphone</label>
                        <div class="col-sm-8">
                          <input type="text" name="phone" class="form-control" id="phoneNumber">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="location" class="col-sm-4 col-form-label">Lieu de livraison</label>
                        <div class="col-sm-8">
                          <input type="text" name="home" class="form-control" id="location">
                        </div>
                    </div>
                    <button type="submit"  class="btn btn-orange btn-lg float-right">Valider ma commande</button>
                  </form>

            </div>
        </div>
    </div>
</div>
