<header class="bg-[#1b0d06]">
    <nav class="flex items-center justify-between p-5 font-bold text-white font-poppins">
        <div>DriveNow</div>
        <ul class="flex gap-2">
            @guest
                <li><a href="">Login</a></li>
                <li><a href="#">Registro</a></li>
            @endguest
            <li></li>
            @auth
                <p> Olá, {{ Auth::user()->name_funcionario }}</p>
                <li><a href="#">Sair</a></li>
            @endauth
        </ul>
    </nav>
</header>
