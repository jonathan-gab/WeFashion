<nav class="navbar-default navbar fixed-top navbar-expand-lg ">
    <div class="container-fluid">
      <a class="col-3 p-2 font-monospace col-md-3 col-md-1 Title text-sm-center col-lg-2 neontextnavbar navbar-brand" href={{ route('products.list')}}>
        WE FASHION
      </a>
      <div class="col-6 col-md-6">

      </div>
      <div class="">
        <a class="col-3 MenuBtn col-md-3 col-md-11 col-lg-11 m-auto text-white navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="NeonText fa-solid fa-bars"></i>
        </a>
      </div>
      <div class="">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class=" font-monospace MenuText nav-link" href={{ route('products.discount')}}>SOLDES</a>
              </li>
              @foreach($categories as $categorie)
                <li class="nav-item">
                    <a class="font-monospace MenuText nav-link text-uppercase" href="{{url('produits/categorie', $categorie->id)}}">{{$categorie->name}}</a>
                </li>
              @endforeach
              </li>
            </ul>
          </div>
      </div>
    </div>
  </nav>