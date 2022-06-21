<!DOCTYPE html>
<html lang="en">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- heder --}}
    <?php include('../resources/views/header.blade.php'); ?>

    {{-- main --}}

    <main>
        <div class="  col-lg-10 row m-auto">
            <div class="  py-5 col-lg-6">
                <img class="  w-100" src="../assets/img/femmes/Wxl-_19PE_juin18_3490.jpg" alt="">
            </div>
    
            <div class="    my-5 py-5 col-lg-6">
                <div class="mt-2 pt-5">
                    <h1 class="text-center font-monospace NeonText">
                        Nom du produit
                    </h1>
                </div>
                <div class=" col-lg-8 m-auto font-monospace NeonText py-4 ">
                    <p>
                        Prix :
                    </p>
                    <p>
                        Tailles :
                    </p>
                    <p>
                        Référence
                    </p>
                </div>
                <div class="  col-lg-6 m-auto">
                    <select class="  NeonText font-monospace form-select" aria-label="Default select example">
                        <option selected>Tailles</option>
                        <option value="1">XS</option>
                        <option value="2">S</option>
                        <option value="3">M</option>
                        <option value="3">L</option>
                        <option value="3">XL</option>
                        </select>
                </div>

                <div class="   col-lg-12">
                    <div class="   m-auto text-center col-lg-2 mt-4">
                        <button type="button" class="   col-lg-12 NeonText font-monospace btnacheter ">ENTRER</button>
                    </div>
                </div>
            </div>                
        </div>
    
        <div class="col-lg-12 pb-4">
            <div class="col-lg-11 m-auto">
                <hr class="col-lg-12 text-center">

            </div>
            <div class="col-lg-8 m-auto">
                <h1 class="   text-center NeonText">
                    Descripton :
                </h1>
                <p class="TextColor pt-3 m-auto col-lg-12 ">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            
        </div>
    </main>


</body>
</html>