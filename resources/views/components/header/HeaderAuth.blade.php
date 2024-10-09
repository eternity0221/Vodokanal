@guest()
    <li>
        <a href="{{ route('register') }}" class="block bg-blue-500 rounded-full py-2 px-3 duration-300 text-white hover:bg-blue-400">Регистрация</a>
    </li>
    <li>
        <a href="{{ route('login') }}" class="block border border-solid border-blue-400 rounded-full py-2 px-3 duration-300 text-blue-400 hover:text-white hover:bg-blue-500">Войти</a>
    </li>
@endguest
@auth()
    <li>
        <a href="{{ route('logout') }}" class="block py-2 px-3 duration-300 text-white hover:text-blue-500">Выход</a>
    </li>
@endauth
