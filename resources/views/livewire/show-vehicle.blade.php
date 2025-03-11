<!DOCTYPE html>
<html lang="en" class="">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <title>Document</title>
</head>
<x-header.nav />

<body>
  <div class="">
    <div class="flex items-center self-center justify-center ">
      <img src="{{ asset('storage/' . $vehicles->image) }}" class="" alt="">
    </div>
    <div class="text-white rounded-tl-md rounded-tr-md bg-slate-800">

      <div class="flex flex-col justify-center gap-1 text-white p-9 text-start">
        <h1 class="text-2xl ">Marca Do Veiculo: <span class="text-azul1">{{$vehicles->marca}} </span></h1>
        <h2 class="text-2xl">Modelo: <span class="text-azul1">{{$vehicles->model}} </span> </h2>
        <h2 class="text-2xl">Ano do veiculo: <span class="text-azul1">{{$vehicles->year}}</span></h2>
        <p class="text-xl ">{{$vehicles->description}}</p>
        <p class="mb-2 text-2xl font-semibold">
          R$: <span class="text-azul1">{{ number_format($vehicles->price, 2, ',', '.') }}</span></p>


        <form action="" class="flex flex-col justify-center w-full" method="post">
          <div class=" form-control">
            <div>
              <label class="label">
                <span class="label-text">Valor da Proposta</span>
              </label>
              <h3>Anunciante: {{$vehicles->user->name}}</h3>
            </div>
            <label class=" input-group">
              <span class="font-bold ">Preço</span>
              <input type="text" placeholder="{{ number_format($vehicles->price, 2, ',', '.') }}"
                class="input input-bordered" />
              <span>BR</span>
            </label>
          </div>


          <button class="w-full mt-2 font-semibold text-white bg-azul1 btn hover:bg-slate-800 ">Enviar Proposta</button>
        </form>

      </div>

    </div>
  </div>
</body>

</html>