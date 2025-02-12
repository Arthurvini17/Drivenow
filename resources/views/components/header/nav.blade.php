<header class="w-full bg-fundoescuro">
    <nav class="flex items-center justify-between w-full p-5 font-bold text-marrom font-poppins">
        <h1 class="font-bold text-azul1">DriveNow</h1>
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="ml-10 font-bold text-azul1 bg-slate-800 btn">Menu</div>
            <ul tabindex="0" class="right-0 font-bold bg-white shadow-sm text-fundoescuro dropdown-content menu rounded-box w-52">
                @auth
                    <li><a>Meus itens</a></li>
                    <li><a href="#">Sair</a></li>
                @endauth
                @guest
                    <li><a>Criar Conta</a></li>
                    <li><a href="#">Logar</a></li>
                @endguest
            </ul>
        </div>
    </nav>
</header>
