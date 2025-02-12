<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="flex flex-col justify-center min-h-screen">
        <div>
            <h1 class="ml-4 text-3xl font-bold text-white">Crie Sua Conta</h1>
        </div>

        <form action="" method="POST">
            @csrf
            <div class="flex flex-col gap-2 p-4 rounded-md ">
                <div class="w-full">
                    <label for="name" class="">Nome</label>
                    <input type="text" class="w-full border input border-azul1" placeholder="Nome">
                </div>

                <div class="w-full">
                    <label for="email" class="">Email</label>
                    <input type="email" class="w-full border input border-azul1" placeholder="Email">
                </div>

                <div class="w-full ">
                    <label for="password" class="">Password</label>
                    <input type="password" class="w-full border input border-azul1" placeholder="Password">
                </div>

                <div class="w-full mt-2 text-center">
                    <button class="w-full text-white bg-azul1 btn">Criar Conta</button>
                </div>
            </div>
        </form>
    </div>
</body>


</html>