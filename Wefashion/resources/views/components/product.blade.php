
    <main class=" pt-5 mt-4">
        <div class="my-5 col-lg-10 row m-auto">
            <div class=" col-lg-6">
                <img class="w-100" src={{asset($product->picture->path)}} alt="">
            </div>
    
            <div class="my-5 py-5 col-lg-6">
                <div class="mt-2 pt-5">
                    <h1 class="text-center font-monospace NeonText">
                        {{$product->name}}
                    </h1>
                </div>
                <div class=" col-lg-8 m-auto font-monospace NeonText py-4 ">
                    <p>
                        Catégorie : {{$product->category->name}} 
                    </p>
                    <p>
                        Prix : {{$product->price}} €
                    </p>
                    <p>
                       {{$product->discount}}
                    </p>
                    <p>
                        Référence :{{$product->reference}}
                    </p>
                </div>
                <div class="  col-lg-6 m-auto">
                    <select class="  NeonText font-monospace form-select" aria-label="Default select example">
                        <option selected>Tailles</option>
                        @forelse($product->sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->size }}</option>
                        @empty
                        <p>Aucune taille</p>
                        @endforelse
                    </select>
                </div>

                <div class="   col-lg-12">
                    <div class="   m-auto text-center col-lg-2 mt-4">
                        <button type="button" class=" col-lg-12 NeonText font-monospace btnacheter ">ACHETER</button>
                    </div>
                </div>
            </div>                
        </div>
    
        <div class="col-lg-12 pb-4">
            <div class="col-lg-11 m-auto">
                <hr class="col-lg-12 text-center">
            </div>
            <div class="col-lg-8 m-auto">
                <h1 class=" font-monospace text-center NeonText">
                    Descripton : 
                </h1>
                <p class="TextColor font-monospace pt-3 pb-3 m-auto col-lg-12 ">
                    {{$product->description}}                
                </p>
            </div>
        </div>
    </main>