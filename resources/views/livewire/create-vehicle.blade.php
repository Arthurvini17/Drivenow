<div>
    <x-header.nav />

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <div class="flex flex-col mt-20 ">
        <div class="text-center">
            <h1 class="mb-4 text-3xl font-semibold text-white ">Crie seu anuncio</h1>
        </div>
        <form wire:submit.prevent='store_vehicle' class="text-center " enctype="multipart/form-data">
            @csrf
            <div class="grid items-center justify-center grid-cols-2 gap-2 p-5 text-center ">
                <div class="w-full">
                    <label for="">Modelo do veiculo</label>
                    <input
                        class="w-full px-2 py-2 truncate bg-transparent border-2 input input-bordered placeholder:text-white focus-visible:border-azul1 "
                        type="text" wire:model='model' placeholder="Modelo do veiculo">
                    @error('model')
                    <span class="animate-pulse">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full">
                    <label for="">Marca do veiculo</label>
                    <input wire:model='marca'
                        class="w-full px-2 py-2 truncate bg-transparent border-2 rounded-md input input-bordered placeholder:text-white focus-visible:border-azul1 "
                        placeholder="Marca do veiculo">
                    @error('marca')
                    <span class="animate-pulse">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full">
                    <label for="year">Ano do veiculo</label>
                    <input type="number"
                        class="w-full px-2 py-2 truncate bg-transparent border-2 rounded-md input input-bordered placeholder:text-white focus-visible:border-azul1"
                        wire:model='year' min="1900" max="{{ date('Y') }} required" placeholder="Ano do veiculo">
                    @error('year')
                    <span class="animate-pulse">{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full">
                    <label for="price">Preço do veiculo</label>
                    <input type="number" wire:model='price'
                        class="w-full px-2 py-2 truncate bg-transparent border-2 rounded-md input input-bordered placeholder:text-white focus-visible:border-azul1 "
                        placeholder="Preço do veiculo">
                    @error('price')
                    <span class="animate-pulse">{{ $message }}</span>
                    @enderror
                </div>

                <div class="grid col-span-2 ">
                    <label for="description">Descrição do veiculo</label>
                    <textarea name="description" id="" cols="30" rows="2" placeholder="Fale sobre o veiculo"
                        class="w-full px-2 py-2 truncate bg-transparent border-2 rounded-md input input-bordered focus-visible:border-azul1 placeholder:text-white"
                        wire:model='description'></textarea>
                    @error('description')
                    <span class="animate-pulse">{{ $message }}</span>
                    @enderror
                </div>


                <div>
                    <input type="file" wire:model='image'>
                    @error('image') <span class="animate-pulse">{{$message}}</span>
                    @enderror
                </div>


            </div>

            <div class="mt-5">
                <button class="px-2 py-2 font-semibold text-white rounded-md bg-azul1" type="submit">Criar
                    Anuncio</button>
            </div>

            <div class="mt-10">
                <button class="items-center self-center justify-center btn ">
                    <a href="/" wire:navigate.hover>Voltar</a>
                </button>
            </div>
        </form>



    </div>





</div>