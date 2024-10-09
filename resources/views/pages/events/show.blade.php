@extends("components.layout.RootLayout", ["title"=>"Мероприятия"])
@section("layout")
    <div class="mt-5 brightness-50" style="height: 60vh; background-image: url({{ $event->image }}); background-size: cover"></div>
    <div class="container mx-auto mt-8">
        <p class="mt-5 tracking-tight text-gray-700 md:text-lg dark:text-white">Дата создания: {{ $event->created_at }}</p>
        <h2 class="mt-5 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Мероприятие {{ $event->id }}: {{ $event->title }}</h2>
        <p class="mt-5 mb-6 tracking-tight text-gray-700 md:text-lg dark:text-white text-justify">Описание: {{ $event->description }}</p>
    </div>
@endsection


