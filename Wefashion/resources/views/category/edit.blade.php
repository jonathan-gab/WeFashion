<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    
    <header>
        @extends('layouts.app')

    </header>

    <main>

        <!-- Récupération de la catégorie modifié-->

        <div class="col-lg-6 pt-5 mt-5 m-auto">
              <div class="  mb-3">
                <form action="{{ route('categories.update', $category) }}" method='POST'>
                  @csrf
                  @method('PUT')

                  <label for="exampleFormControlInput1" class="form-label font-monospace NeonText">Modifier</label>
                    <textarea class="form-control" name="name">{{ old('name', $category->name) }}</textarea>
                  <button type="submit" class="btn btn-primary">Primary</button>
                </form>
              </div>
        </div>
        
    </main>
</body>
</html>