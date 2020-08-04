<div class="bg">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		  <a class="navbar-brand text-white" href=" {{url('/')}} "><img src="images/logo_odi.png" width="50" alt="" style="font-size:10px;"> Ordyra
			<p style="font-size: 8px; position:relative;top:-15px; left:65px;">MultiServices</p>
		</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"><a href=" {{url('/')}} " class="nav-link">Qui sommes-nous ?</a></li>
	          <li class="nav-item dropdown {{ (request()->is('elevages')) ? 'active' : '' }} {{ (request()->is('agriculture')) ? 'active' : '' }} ">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">produits</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item {{ (request()->is('elevages')) ? 'active' : '' }}" href=" {{url('/elevages/1')}} ">Ordyra Elevage</a>
              	<a class="dropdown-item {{ (request()->is('agriculture')) ? 'active' : '' }}" href=" {{url('/agriculture')}} ">Ordyra Agriculture</a>
              </div>
            </li>
	          <li class="nav-item {{ (request()->is('product')) ? 'active' : '' }}"><a href="#" class="nav-link">services</a></li>
	          <li class="nav-item {{ (request()->is('contact-us')) ? 'active' : null }}"><a href=" {{url('/contact-us')}} " class="nav-link">Contacts</a></li>
	          <li class="nav-item {{ (request()->is('medias')) ? 'active' : '' }}"><a href="#" class="nav-link">Medias</a></li>
	          <li class="nav-item {{ (request()->is('mon-panier')) ? 'active' : '' }} cta cta-colored"><a href=" {{url('/mon-panier')}} " class="nav-link"><span class="icon-shopping_cart">
				  </span>
				  [{{$cartCount}}]
				</a></li>
				<li class="nav-item p-0 m-0">
					<a href=" {{'/login'}}" class="nav-link"><span class="icon-user"></span> login</a>
				</li>
	        </ul>
	      </div>
	    </div>
	  </nav>
</div>
</div>