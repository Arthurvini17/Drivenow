<header class="w-full bg-slate-800">
    <nav class="flex items-center justify-between w-full p-5 font-bold text-marrom font-poppins">
        <h1 class="text-azul1"><a href="{{route('home.index')}}">DriveNow</a></h1>
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="ml-10 font-bold text-azul1 bg-fundescuro btn">Menu</div>
            <ul tabindex="0"
                class="right-0 font-bold bg-white shadow-sm text-fundoescuro dropdown-content menu rounded-box w-52">
                @auth
                <li><a href="{{ route('vehicle.create') }}">Anunciar Veiculo</a></li>
                <li><a>Meus anuncios</a></li>
                <li><a href="{{ route('logout') }}">Sair</a></li>
                @endauth
                @guest
                {{-- <li><a href="{{route('register.index')}}">Criar Conta</a></li> --}}
                <li><a href="/register" wire:navigate class="">Criar Conta</a></li> {{--Redirecinando com livewire --}}
                <li><a href="/login" wire:navigate>Logar</a></li>
                @endguest
            </ul>
        </div>


    </nav>
</header>