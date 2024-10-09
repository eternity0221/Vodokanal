<form method="POST" novalidate>
    @csrf
    @method("POST")
    <div class="bg-white relative p-8 rounded-lg shadow-lg max-w-sm w-full">

        <a href="{{route("home")}}" class="absolute left-4 top-10 p-2 flex justify-center items-center w-8 h-8 duration-300 rounded-full bg-slate-300 shadow-2xl hover:bg-blue-500 group">
            <svg class="w-6 h-6 fill-black rotate-180 group-hover:fill-white duration-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
            </svg>
        </a>

        <div class="flex justify-center mb-6">
            <span class="inline-block bg-gray-200 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
            </span>
        </div>

        <h2 class="text-2xl font-semibold text-center mb-4">Войдите в свой аккаунт</h2>
        <p class="text-gray-600 text-center mb-6">Введите свои данные для входа</p>

        <div class="flex flex-col gap-4">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Адрес Эл.Почты</label>
                <input type="email" name="email" id="email" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" placeholder="ivanov@mail.ru">
                @error("email")<p class="text-red-700">{{ $message }}</p>@enderror
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Пароль</label>
                <input type="password" name="password" id="password" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" placeholder="*********">
                @error('password')<p class="text-red-700">{{ $message }}</p>@enderror
            </div>
        </div>

        <button type="submit" class="w-full bg-blue-500 mt-4 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Войти</button>

        <p class="text-gray-600 text-xs text-center mt-4">
            Если у вас нету аккаунта
            <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Зарегистрироваться</a>.
        </p>
    </div>
</form>
