<!DOCTYPE html>
<html lang="en" class="">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <title>Document</title>
</head>
<x-header.nav/>
<body>
  <div class="">
    <div class="flex items-center self-center justify-center ">
      <img src="{{$vehicles->image}}" class="" alt="">
    </div>
    <div class="text-white rounded-tl-md rounded-tr-md bg-fundoescuro">
      <div class="flex flex-col justify-center gap-1 text-white p-9 text-start">
        <h1 class="text-2xl">Marca Do Veiculo: {{$vehicles->marca}}</h1>
        <h2 class="text-2xl">Modelo: {{$vehicles->model}}</h2>
        <p class="text-xl">{{$vehicles->description}}</p>
        <p class="mb-2 text-2xl font-semibold">R$: {{$vehicles->price}}</p>
        <button class="text-white bg-textocinza btn hover:bg-slate-800 ">Enviar proposta</button>
      </div>
    </div>
  </div>
</body>

</html>