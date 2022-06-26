<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>We Fashion | Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <header class=" col-lg-12 ">
            @include('partials.clientNavbar')
        </header>
        <main class="my-5 pt-5 m-auto">
        <div class="text-center font-monospace pb-4">
                <h1 class="TItleList pb-2">
                    Liste de produits
                </h1>
                <p class="NeonText">
                    Résultats : 4
                </p>
            </div>
                @yield('content')
            </div>
        </div>
    </main>
        <div class="col pb-3">
            @include('partials.footer')
        </div>
    </div>
    <script src="https://kit.fontawesome.com/d09560a292.js" crossorigin="anonymous"></script>
</body>
</html>