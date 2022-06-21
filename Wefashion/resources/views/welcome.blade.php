<!DOCTYPE html>
<html lang="en">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="../style/style.css">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Fashion</title>
</head>
<body>
    <header class="HeaderWelcome">

    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>

    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="../assets/videos/Wallpaper_welcome.mp4" type="video/mp4">
    </video>

    <div class="container h-100">
    <div class="col-lg-12 d-flex h-100 text-center align-items-center">
        <div class="col-lg-2 w-100 text-white">
        <h1 class="col-lg-4 m-auto Titlebox NeonText display-3 font-monospace">WE FASHION</h1>
        <a href="{{url('/index.blade.php')}}"><button type="button" class="my-4 NeonText font-monospace btn-enter ">ENTRER</button></a>
        </div>
    </div>
    </div>
    </header>
</body>
</html>