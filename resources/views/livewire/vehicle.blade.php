<div>
  <html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

  </head>

  <body class="">
    <x-header.nav />


    @forelse ($this->vehicles as $vehicle)
    <div class="flex-col bg-marrom p-7">
      <div class="bg-white rounded-md">
        <a href="{{ route('vehicle.show', ['vehicle' => $vehicle->id]) }}">
          <div class="flex flex-col ml-2 text-start">
            <p class="text-xl font-semibold text-marrom">{{$vehicle->name_vehicle}}</p>
            <p>{{$vehicle->price}}</p>
            <p>{{$vehicle->year}}</p>
           <img src="{{$vehicle->image}}" class="self-end w-32 h-32 mb-2 mr-2">
          </div>
        </a>
      </div>
    </div>

    @empty
    <p>nada aqui</p>
    @endforelse

  </body>
</div>