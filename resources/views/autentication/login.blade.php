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
            <h1 class="flex justify-center ml-4 text-4xl font-bold text-white"> Login</h1>
        </div>

        <form action="{{route('login.store')}}" method="POST">
            @csrf
            <div class="flex flex-col gap-2 p-4 rounded-md ">
                <div class="w-full">
                    <label for="name" class="text-white">Nome</label>
                    <input type="text" name="name" class="w-full border input border-azul1"
                        placeholder="Nome do usuario">
                    @error('name')
                    <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full">
                    <label for="email" class="text-white">Email</label>
                    <input type="email" name="email" class="w-full border input border-azul1"
                        placeholder="Email do usuario">

                    @error('email')
                    <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full">
                    <label for="password" class="text-white">Password</label>
                    <input type="password" name="password" class="w-full border input border-azul1"
                        placeholder="Senha do usuario">

                    @error('password')
                    <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="w-full mt-2 text-center">
                    <button class="w-full text-white shadow-sm bg-azul1 btn shadow-white">Login</button>
                </div>

                <div>
                    <label for="remember">
                        <input type="checkbox" name="remember" id="remember"> Lembrar-me
                    </label>
                </div>

                <div class="self-center ">
                    <p>Esqueceu sua senha? <a class="font-semibold text-azul1" href="#"></a></p>
                </div>
            </div>
        </form>
    </div>
</body>


</html>