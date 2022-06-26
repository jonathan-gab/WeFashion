


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


    <!--Tableau répertoriant les différentes catégories-->

    <main class="col-lg-6 m-auto mt-5 pt-5">
      <h1 class="text-center font-monospace NeonText">CATEGORIES</h1>
        <div class="row m-auto col-lg-11">
            <div class="col-lg-10">
            </div>
            <div class="col-lg-2 m-auto text-center">
                <a href="categories/create" type="button" class="btn btn-primary">
                  Nouveau
                </a>
            </div>
        </div>
       

        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Catégorie</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
                <tr>
                  <th scope="row">{{$category->id}}</th>
                  <td>{{$category->name}}</td>
                  <td>
                    <a href="{{url('categories/'.$category->id.'/edit')}}">
                      <i class="fa-solid fa-2x fa-gear"></i>
                    </a>
                  </td>
                  <td>
                    <form
                      action="{{ route('categories.destroy', $category) }}"
                      method="POST"
                      onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')">
                      @csrf @method('DELETE')
                      <button
                          type="submit"
                          class="btn btn-light text-danger">
                          <i class="fa-solid fa-2x fa-xmark"></i>                    
                      </button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </main>
</body>
</html>
