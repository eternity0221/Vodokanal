@extends("components.layout.RootLayout", ["title"=>"Услуги"])
@section("layout")
    <div class="container mx-auto my-8 w-2/5 bg-gray-900 p-8 shadow-xl rounded-xl">
        <h1 class="mt-5 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Услуга: {{ $service->title }}</h1>
        <p class="mt-5 mb-6 tracking-tight text-gray-700 md:text-lg dark:text-white text-justify">Описание: {{ $service->description }}</p>
        <div class="flex justify-center items-center">
            <p class="mt-5 mb-6 tracking-tight text-gray-700 md:text-lg dark:text-white text-justify mr-6">Стоимость: {{number_format($service->price, 0, '', ' ')}} руб</p>
        </div>
    </div>
@endsection
