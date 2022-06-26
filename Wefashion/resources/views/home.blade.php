


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">

    <script src="https://kit.fontawesome.com/f3742b5c87.js" crossorigin="anonymous"></script>

</head>
<body>

    <header>
        @extends('layouts.app')

    </header>
    <main class="col-lg-6 m-auto mt-5 pt-5">
        <div class="row m-auto col-lg-11">
            <div class="col-lg-10">

            </div>
            <div class="col-lg-2 m-auto text-center">
                <button type="button" class="br btn btn-primary">Nouveau</button>
            </div>
        </div>
       

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nom</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Prix</th>
                <th scope="col">Etat</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Chemise</th>
                <td>Haut</td>
                <td>45€</td>
                <td>Soldé</td>
                <td><a href="{{url('edit.blade.php')}}"><i class="fa-solid fa-2x fa-gear"></i></a></td>
                <td><a href=""><i class="fa-solid fa-2x fa-xmark"></i></a></td>

              </tr>
              <tr>
                <th scope="row">Jean</th>
                <td>Bas</td>
                <td>34€</td>
                <td>Standart</td>
                <td><a href=""><i class="fa-solid fa-2x fa-gear"></i></a></td>
                <td><a href=""><i class="fa-solid fa-2x fa-xmark"></i></a></td>

              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <td><a href=""><i class="fa-solid fa-2x fa-gear"></i></a></td>
                <td><a href=""><i class="fa-solid fa-2x fa-xmark"></i></a></td>

              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <td><a href=""><i class="fa-solid fa-2x fa-gear"></i></a></td>
                <td><a href=""><i class="fa-solid fa-2x fa-xmark"></i></a></td>

              </tr>
            </tbody>
          </table>
    </main>
</body>
</html>
