<div>

<html class="">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
  <x-header.nav />

  @forelse ($vehicles as $vehicle)
  <div class="flex-col p-7 bg-cinza">
    <div class="p-2 bg-white rounded-md">
      <a href="{{ route('vehicle.show', ['vehicle' => $vehicle->id]) }}">
        <div class="flex justify-between">
          <div class="flex flex-col gap-2 font-semibold text-start">
            <h1 class="font-bold text-fundoescuro">{{$vehicle->name_vehicle}}</h1>
            <p class="text-fundoescuro">Preço: {{$vehicle->price}}</p>
            <p class="text-fundoescuro">Ano lançamento: {{$vehicle->year}}</p>
          </div>
          <img src="{{$vehicle->image}}" class="self-end w-20 h-20 mb-2 mr-2">
        </div>
      </a>
    </div>
  </div>
  
  @empty
  <p>nada aqui</p>
  @endforelse

  <div class="flex items-center">
    {{$vehicles->links() }}
  </div>
</body>
</html>
</div>