<div class="">
    <x-header.nav />


    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <div class="h-screen mt-24 overflow-x-auto border rounded-box border-base-content/5 bg-base-100">

        <table class="table ">
            <thead class="text-center">
                <tr class="text-xl text-center text-white bg-slate-800">
                    <th>Imagem</th>
                    <th>Modelo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($vehicles as $vehicle)
                <tr class="text-center">
                    <td class="px-4 py-2">
                        <img src="{{ asset('storage/' . $vehicle->image) }}" class="w-20" alt="">
                    </td>
                    <td class="px-4 py-2">{{ $vehicle->model }}</td>
                    <td class="flex flex-col items-center justify-center">
                        <button class="w-20 text-black bg-red-600 btn" wire:click="deleteVehicles({{ $vehicle->id }})"
                            wire:confirm='Tem certeza que deseja excluir esse anuncio?'>Excluir</button>
                        <button class="w-20 text-black bg-blue-400 btn">Editar</button>
                    </td>
                </tr>
                @empty
                <p>Você ainda nao criou anuncios</p>
                @endforelse



            </tbody>
        </table>

        <div class="flex items-center justify-center">
            {{ $vehicles->links() }}
        </div>
    </div>
</div>