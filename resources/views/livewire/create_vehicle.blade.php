<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Document</title>
</head>

<body class="flex items-center justify-center min-h-screen p-2 text-white ">
    <div class="flex flex-col ">
        <div class="text-center">
            <h1 class="mb-4 text-3xl font-semibold text-white ">Crie seu anuncio</h1>
        </div>
        <form wire:submit.prevent='store_vehicle' class="text-center ">
            @csrf
            <div class="grid items-center justify-center grid-cols-2 gap-2 text-center ">
                <div class="w-full">
                    <label for="">Modelo do veiculo</label>
                    <input
                        class="w-full px-2 py-2 truncate bg-transparent border rounded-md border-azul1 focus:border-azul1 focus:outline-none"
                        type="text" wire:model='model' placeholder="Digite o modelo do seu veiculo">
                    @error('model')
                    <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full">
                    <label for="">Marca do veiculo</label>
                    <input type="text"
                        class="w-full px-2 py-2 truncate bg-transparent border rounded-md border-azul1 focus:border-azul1 focus:outline-none "
                        name="marca" placeholder="Marca do seu veiculo">
                </div>

                <div class="w-full">
                    <label for="year">Ano do veiculo</label>
                    <input type="date"
                        class="w-full px-2 py-2 truncate bg-transparent border rounded-md border-azul1 placeholder:bg-slate- focus:border-azul1 focus:outline-none "
                        name="year">
                </div>

                <div class="w-full">
                    <label for="price">Preço do veiculo</label>
                    <input type="number"
                        class="w-full px-2 py-2 truncate bg-transparent border rounded-md border-azul1 focus:border-azul1 focus:outline-none "
                        placeholder="Digite o preço do veiculo">
                </div>

                <div class="grid col-span-2 ">
                    <label for="description">Descrição do veiculo</label>
                    <textarea name="description" id="" cols="30" rows="2" placeholder="Fale sobre o veiculo"
                        class="w-full px-2 py-2 truncate bg-transparent border rounded-md border-azul1 focus:border-azul1 focus:outline-none"></textarea>
                </div>
            </div>

            <div class="mt-2">
                <button class="px-2 py-2 font-semibold rounded-md bg-azul1 " type="submit">Criar Anuncio</button>
            </div>
        </form>
    </div>
</body>

</html>