@extends("components.layout.RootLayout", ['title'=>'Личный кабинет'])

@section("layout")

    <div class="container mx-auto">
        <h1 class="mb-4 text-4xl font-bold tracking-tight leading-none text-white md:text-5xl lg:text-6xl pt-6 text-center pt-6">ЛИЧНЫЙ КАБИНЕТ</h1>


        <p class="max-w-lg text-3xl font-semibold leading-normal text-gray-900 dark:text-white">Добро пожаловать, {{ Auth::user()->name }}</p>

        @include("components.alert.Alert")

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Имя
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Почта
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Дествия
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ Auth::user()->name }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ Auth::user()->email }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-green-500">
                        <a href="{{route(Auth::user()->role == 'user' ? "profile.edit" : "users.edit", ["user"=>Auth::user()])}}">ИЗМЕНИТЬ</a>
                    </th>
                </tr>
                </tbody>
            </table>
        </div>

        @if(Auth::user()->role==['user','employee','moderator'])
            <div class="pt-6">
                <form action="{{ route("profile.delete") }}" method="POST">
                    @method("DELETE")
                    <button class="dark:bg-gray-900 hover:bg-blue-700 font-bold py-2 px-4 rounded text-red-500">УДАЛИТЬ АККАУНТ</button>
                    @csrf
                </form>
            </div>
        @endif

        <div class="bg-gray-700 mt-8 rounded-md">
            <div class="flex justify-between p-8">
                @include("components.role.dashboard.user")
                @include("components.role.dashboard.employee")
                @include("components.role.dashboard.moderator")
                @include("components.role.dashboard.admin")
            </div>
        </div>

    </div>

@endsection
