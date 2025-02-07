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
 <div class="flex-col p-2 border-2">
    <a href="{{ route('vehicle.show', ['vehicle' => $vehicle->id]) }}">
    <p>{{$vehicle->name_vehicle}}</p>
    <p>{{$vehicle->price}}</p>
    <p>{{$vehicle->year}}</p>
    <p>Image</p>
</a>

  </div>
     
 @empty
     <p>nada aqui</p>
 @endforelse
  
</body>
</div>
