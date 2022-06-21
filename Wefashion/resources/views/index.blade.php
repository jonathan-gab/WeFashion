<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Fashion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">

    <script src="https://kit.fontawesome.com/f3742b5c87.js" crossorigin="anonymous"></script>


</head>
<body>
    {{-- navbar --}}
    
    <?php include('../resources/views/header.blade.php'); ?>

    {{-- main --}}

    <main class="my-5 py-5 m-auto">

        <div class="text-center pb-4">
            <h1 class="TItleList pb-2">
                Liste de produits
            </h1>
            <p class="NeonText">
                Résultats : 4
            </p>
        </div>


        {{-- products cards --}}
        <div class="col-lg-12 m-auto ">
            <div class="col-lg-10 m-auto row ">
                <div class="col-lg-4">
                    <a href="{{url('/productPage.blade.php')}}">
                        <div class="profile-card-2"><img class="col-lg-12" src="../assets/img/femmes/Wxl-_19PE_juin18_3490.jpg" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="m-auto profile-username">@johndoesurname</div>  
                        </div>
                    </a>
                    
                </div>
                <div class="col-lg-4">
                    <a href="">
                        <div class="profile-card-2"><img class="col-lg-12" src="../assets/img/femmes/wxl-_Carpentie-011.jpg" class="img img-responsive">
                            <div class="profile-name">JOHN DOE</div>
                            <div class="m-auto profile-username">@johndoesurname</div>
                        </div>
                    </a>
                    
                </div>
                <div class="col-lg-4">
                    <a href=""><div class="profile-card-2"><img class="col-lg-12" src="../assets/img/femmes/wxl-_Carpentie-011.jpg" class="img img-responsive">
                        <div class="profile-name">JOHN DOE</div>
                        <div class="m-auto profile-username">@johndoesurname</div>
                        </div>
                    </a>
                    
                </div>
                
            </div>
        </div>
        </div>
    </main>

    {{-- Footer --}}
    <footer class=" col-lg-12 text-center">
        <div class=" pt-5 pb-5 col-lg-8 row m-auto">

            <div class=" col-lg-4  ">
                <h1 class="pb-4 FooterTitle">Information</h1>
                <div class=" col-lg-12  m-auto">
                        <a class=" col-lg-9 m-auto FooterText font-monospace nav-link" href="#">Mention légales</a>
                        <a class=" col-lg-9 m-auto FooterText font-monospace nav-link" href="#">Presse</a>
                        <a class=" col-lg-9 m-auto FooterText font-monospace nav-link" href="#">Fabrication</a>
                </div>
                
            </div>
            <div class="pb-3 col-lg-4  ">
                <h1 class="pb-4 FooterTitle">Information</h1>
                <div class=" col-lg-12  m-auto">
                        <a class=" col-lg-9 m-auto FooterText font-monospace nav-link" href="#">Contactez-nous</a>
                        <a class=" col-lg-9 m-auto FooterText font-monospace nav-link" href="#">Livraison & Retour</a>
                        <a class=" col-lg-9 m-auto FooterText font-monospace nav-link" href="#">Condition de vente</a>
                </div>
                
            </div>
            <div class="pb-3 col-lg-4  ">
                <h1 class="pb-4 FooterTitle">Information</h1>
                <div class="col-lg-12 m-auto">
                    <div class="col-lg-4 m-auto  row">
                        <a class="col-lg-6 FooterText font-monospace nav-link" href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a class="col-lg-6 FooterText font-monospace nav-link" href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                        
                        <a class="col-lg-9 m-auto FooterText font-monospace nav-link" href="#">inscrivez vous à la newsletter</a>
                </div>
            </div>
    </footer>
</body>
</html>