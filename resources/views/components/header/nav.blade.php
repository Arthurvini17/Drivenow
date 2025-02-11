<header class="bg-[#EEDCC6] w-full">
    <nav class="flex items-center justify-between w-full p-5 font-bold text-marrom font-poppins">
        <div>DriveNow</div>
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="ml-10 bg-marrom btn">Menu</div>
            <ul tabindex="0" class="right-0 bg-white shadow-sm dropdown-content menu rounded-box w-52">
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
