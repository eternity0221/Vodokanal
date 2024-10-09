@extends("components.layout.RootLayout", ['title'=>'Контакты'])
@section("layout")

    <div class="container mx-auto">
        <h2 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl pt-6">Контактная информация</h2>

        <div class="mx-auto p-6 m-8">
            <div class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                <div class="flex flex-col pb-3">
                    <p class="mb-1 font-bold dark:text-gray-800 md:text-lg">Адрес электронной почты</p>
                    <p class="text-lg font-semibold">vodokanal@gmail.com</p>
                </div>
                <div class="flex flex-col py-3">
                    <p class="mb-1 font-bold dark:text-gray-800 md:text-lg">Адрес</p>
                    <p class="text-lg font-semibold">	141303, Московская Область, г.о. Сергиево-посадский, г Сергиев Посад, ул Глинки, двлд. 2</p>
                </div>
                <div class="flex flex-col pt-3">
                    <p class="mb-1 font-bold dark:text-gray-800 md:text-lg">Номера телефонов</p>
                    <p class="text-lg font-semibold">+7 123 456 77 89</p>
                    <p class="text-lg font-semibold">+7 123 456 77 89</p>
                    <p class="text-lg font-semibold">+7 123 456 77 89</p>
                    <p class="text-lg font-semibold">+7 123 456 77 89</p>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A47ce19f60d20a7a2de38860dde37417114fb081160ece6aef1a81ccc12d84c5c&amp;width=100%&amp;height=600&amp;lang=ru_RU&amp;scroll=false"></script>
@endsection
