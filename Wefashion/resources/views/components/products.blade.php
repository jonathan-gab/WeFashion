
    <!-- products cards -->
    <div class="col-lg-12 m-auto ">
        <div class="col-lg-10 m-auto row ">
            @foreach ($products as $product)
            <div class="col-lg-4">
                        <a href="{{url('produit', $product->id)}}">
                            <div class="profile-card-2"><img class="col-lg-12" src={{asset($product->picture->path)}} class="img img-responsive">
                                <div class="font-monospace profile-name">{{$product->name}}</div>
                                <div class="m-auto font-monospace profile-username">{{$product->price}}€</div>  
                            </div>
                        </a> 
                    </div>
            @endforeach
            
        </div>
    </div>
    </div>












{{-- </div>

        
        <div class="col-lg-4">
            <a href="">
                <div class="profile-card-2"><img class="col-lg-12" src="../assets/img/femmes/wxl-_Carpentie-011.jpg" class="img img-responsive">
                    <div class="font-monospace profile-name">Kiwi</div>
                    <div class="m-auto font-monospace profile-username">39.99€</div>
                </div>
            </a>
            
        </div>
        <div class="col-lg-4">
            <a href=""><div class="profile-card-2"><img class="col-lg-12" src="../assets/img/femmes/wxl-_Carpentie-011.jpg" class="img img-responsive">
                <div class="font-monospace profile-name">Cofee</div>
                    <div class="m-auto font-monospace profile-username">65€</div>
                </div>
            </a>
            
        </div>
        
    </div>
</div> --}}