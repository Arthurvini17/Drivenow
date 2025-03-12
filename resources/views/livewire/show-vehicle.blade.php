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

<body class="min-h-screen bg-slate-800">
  <div class="">
    <div class="flex flex-col items-center justify-center ">
      <img src="{{ Storage::url($vehicles->image) }}" class="w-30" alt="">
    </div>
    <div class="text-white rounded-tl-md rounded-tr-md">

      <div class="flex flex-col justify-center gap-1 text-xl text-white p-9 text-start ">
        <h1 class="font-bold">Marca Do Veiculo: <span class="text-azul1">{{$vehicles->marca}} </span></h1>
        <h2 class="font-bold">Modelo: <span class="text-azul1">{{$vehicles->model}} </span> </h2>
        <h2 class="font-bold">Ano do veiculo: <span class="text-azul1">{{$vehicles->year}}</span></h2>
        <p class="overflow-hidden text-xl ">{{$vehicles->description}}</p>
        <p class="mb-2 text-2xl font-semibold">
          R$: <span class="text-azul1">{{ number_format($vehicles->price, 2, ',', '.') }}</span></p>
        <form action="" class="flex flex-col justify-center w-full" method="post">
          <div class=" form-control">
            <label class=" label">
              <span class="label-text">Valor da Proposta</span>
            </label>
            <label class="text-base input-group">
              <span class="font-bold">Preço</span>
              <input type="text" placeholder="{{ number_format($vehicles->price, 2, ',', '.') }}"
                class="input input-bordered" />
              <span class="font-bold">BR</span>
            </label>
          </div>
          <button class="w-full mt-1 font-semibold text-white bg-azul1 btn hover:bg-slate-800 ">Enviar Proposta</button>
        </form>

      </div>

    </div>
  </div>
</body>

</html>