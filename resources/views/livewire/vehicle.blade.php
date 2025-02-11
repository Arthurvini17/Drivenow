<div>

<html class=" bg-marrom">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="overflow-y-auto ">
  <x-header.nav />

  @forelse ($vehicles as $vehicle)
  <div class="flex-col bg-marrom p-7">
    <div class="p-2 bg-white rounded-md">
      <a href="{{ route('vehicle.show', ['vehicle' => $vehicle->id]) }}">
        <div class="flex justify-between">
          <div class="flex flex-col gap-2 font-semibold border-2 text-start">
            <h1 class="font-bold text-marrom">{{$vehicle->name_vehicle}}</h1>
            <p class="text-marrom">Preço: {{$vehicle->price}}</p>
            <p class="text-marrom">Ano lançamento: {{$vehicle->year}}</p>
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