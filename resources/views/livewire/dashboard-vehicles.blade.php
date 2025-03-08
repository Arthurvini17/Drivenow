<div>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <table class="w-full table-auto">
        <thead>
            <tr>
                <th class="px-4 py-2 text-left">Imagem</th>
                <th class="px-4 py-2 text-left">Modelo</th>
                <th class="px-4 py-2 text-left">Ano</th>
                <th class="px-4 py-2 text-left">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($vehicles as $vehicle)
            <tr>
                <td class="px-4 py-2">
                    <img src="{{ asset('storage/' . $vehicle->image) }}" class="w-20" alt="Imagem do veículo">
                </td>
                <td class="px-4 py-2">{{ $vehicle->model }}</td>
                <td class="px-4 py-2">{{ $vehicle->year }}</td>
                <td class="px-4 py-2">
                    <button class="btn btn-primary">Ação</button>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="px-4 py-2 text-center">Não tem veículos</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>