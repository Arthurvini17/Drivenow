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
            <h1 class="flex justify-center ml-4 text-3xl font-bold text-white">Crie Sua Conta</h1>
        </div>

        <form action="{{route('register.store')}}" method="POST">
            @csrf
            <div class="flex flex-col gap-2 p-4 rounded-md ">
                <div class="w-full">
                    <label class="flex items-center gap-2 input input-bordered">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4 opacity-70">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                        </svg>
                        <input type="text" name="name" class="grow" placeholder="Username" />
                    </label>
                    @error('name')
                    <div class="mt-1 text-sm ">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full">
                    <label class="flex items-center gap-2 input input-bordered">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4 opacity-70">
                            <path
                                d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                            <path
                                d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                        </svg>
                        <input type="text" name="email" class="grow" placeholder="Email" />
                    </label>
                    @error('email')
                    <div> <span>{{ $message }}</span></div>
                    @enderror
                </div>

                <div class="w-full">
                    <label class="flex items-center gap-2 input input-bordered">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                            class="w-4 h-4 opacity-70">
                            <path fill-rule="evenodd"
                                d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                clip-rule="evenodd" />
                        </svg>
                        <input type="password" name="password" class="grow focus:border-blue-400 focus:outline-none"
                            placeholder="Senha" />
                    </label>
                    @error('password')
                    <div class="mt-1 text-sm ">{{ $message }}</div>
                    @enderror
                </div>


                <div class="w-full mt-2 text-center">
                    <button class="w-full text-white shadow-sm bg-azul1 btn shadow-white">Criar Conta</button>
                </div>

                <div class="self-center ">
                    <p>Ja tem uma conta? <a class="font-semibold text-azul1" href="#">Login</a></p>
                </div>
            </div>
        </form>
    </div>
</body>


</html>