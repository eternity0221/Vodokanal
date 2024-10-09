<form action="{{ route(Auth::user()->role == 'user' ? "profile.update" : 'users.update', ['user'=>$user]) }}" method="POST"  class="max-w-sm mx-auto m-12">
    @method('PATCH')
    @csrf
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Изменить пользователя {{ $user->name }}</h1>

    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ФИО</label>
        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="ФИО"/>
        @error("name")<p class="text-red-700">{{ $message }}</p>@enderror
    </div>
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Эл.почта</label>
        <input type="text" name="email" id="email" value="{{ old('email', $user->email) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Эл.почта" />
        @error("email")<p class="text-red-700">{{ $message }}</p>@enderror
    </div>
    @include('components.select.Select', ['selects'=>$selects, 'name'=>'role', 'useDisablled'=>in_array(Auth::user()->role, ['user','employee','moderator'])])
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Пароль</label>
        <input type="password" name="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Пароль" />
        @error("password")<p class="text-red-700">{{ $message }}</p>@enderror
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Изменить пользователя</button>
</form>

