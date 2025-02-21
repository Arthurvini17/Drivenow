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
            <h1 class="text-xl text-white">Crie seu anuncio</h1>
        </div>
        <form action="" method="post" class="text-center ">
            <div class="grid items-center justify-center grid-cols-2 gap-2 text-center ">
                <div class="w-full">
                    <label for="">Modelo do veiuclo</label>
                    <input class="w-full " type="text" name="model" placeholder="Digite o modelo do seu veiculo">
                </div>

                <div class="w-full">
                    <label for="">Marca do veiculo</label>
                    <input type="text" class="w-full truncate rounded-md" name="marca"
                        placeholder="Marca do seu veiculo">
                </div>

                <div class="w-full">
                    <label for="year">Ano do veiculo</label>
                    <input type="date" class="w-full rounded-md" name="year">
                </div>

                <div class="w-full">
                    <label for="price">Preço do veiculo</label>
                    <input type="number" class="w-full rounded-md" placeholder="Digite o preço do veiculo">
                </div>

                <div class="grid col-span-2 ">
                    <label for="description">Descrição do veiculo</label>
                    <textarea name="description" id="" cols="30" rows="2" placeholder="Fale sobre o veiculo"></textarea>
                </div>
            </div>
        </form>
    </div>
</body>

</html>