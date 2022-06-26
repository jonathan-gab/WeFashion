<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/f3742b5c87.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>



    <script>
        $(window).on("scroll", function() {
          var scrollPos = $(window).scrollTop();
          if (scrollPos <= 0) {
              $('.navbar-default').addClass('top-of-page');
          } else {
              $('.navbar-default').removeClass('top-of-page');
          }
      });
      </script>
</head>
<!--Navbar commune à toutes les pages-->

    <header class=" col-lg-12 ">
        <nav class="navbar-default navbar fixed-top navbar-expand-lg ">
            <div class="container-fluid">
              <a class="col-3 p-2 font-monospace col-md-3 col-md-1 Title text-sm-center col-lg-2 neontextnavbar navbar-brand" href="/index.blade.php">
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
                        <a class=" font-monospace MenuText nav-link" href="#competences">SOLDES</a>
                      </li>
                      <li class="nav-item">
                        <a class=" font-monospace MenuText nav-link" href="#competences">HOMME</a>
                      </li>
                      <li class="nav-item">
                        <a class=" font-monospace MenuText nav-link" href="#portfolio">FEMME</a>
                      </li>
                      
                      </li>
                    </ul>
                  </div>
              </div>
             
            </div>
          </nav>
    </header>

</html>