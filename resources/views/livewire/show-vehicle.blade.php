<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <title>Document</title>
</head>
<body>
  <div class="">
  <p class="text-4xl">Marca do veiculo {{$vehicles->marca}}</p>
  <p>Modelo do veiculo {{$vehicles->model}}</p>
  <p>{{$vehicles->price}}</p>
  </div>
</body>
</html>