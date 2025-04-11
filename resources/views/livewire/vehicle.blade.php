<div class="min-h-screen bg-slate-800">
  <html lang="en" class="">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="">
    <x-header.nav />

    <div class="flex items-center justify-center mt-2">
      <input type="text" class="p-1 font-semibold text-black bg-white border rounded-md placeholder: "
        wire:model.live="search" placeholder="Pesquisar...">
    </div>

    @forelse ($vehicles as $vehicle)
    <div class="flex-col p-7 bg-cinza">
      <div class="p-2 bg-white rounded-md">
        <a href="{{ route('vehicle.show', ['vehicle' => $vehicle->id]) }}">
          <div class="flex items-center justify-between w-full">
            <div class="flex flex-col gap-2 font-semibold text-start max-w-[60%]">
              <h1 class="font-bold text-fundoescuro">{{$vehicle->model}}</h1>
              <h1 class="font-semibold text-black">
                Preço: <span class="text-black">{{ number_format($vehicle->price, 2, ',', '.') }}</span>
              </h1>
              <p class="text-fundoescuro">Ano lançamento: {{$vehicle->year}}</p>
            </div>
            <img src="{{ Storage::disk('vehicles')->url($vehicle->image) }}" class="object-cover w-32 h-32 rounded-md" alt="">
          </div>
        </a>
      </div>
    </div>

    @empty
    <p class="text-center">Ainda não temos itens disponiveis ainda</p>
    @endforelse

    <div class="flex items-center justify-center">
      @if ($vehicles->hasPages())
      {{ $vehicles->links() }}
      @else
      <div class="hidden">
        {{ $vehicles->links() }}
      </div>
      @endif
    </div>

  </body>

  </html>
</div>