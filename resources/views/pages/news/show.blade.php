@extends("components.layout.RootLayout", ["title"=>"Новости"])
@section("layout")
    <div class="mt-5 brightness-50" style="height: 60vh; background-image: url({{ $news->image }}); background-size: cover"></div>
    <div class="container mx-auto mt-8">
        <p class="mt-5 tracking-tight text-gray-700 md:text-lg dark:text-white">Дата создания: {{ $news->created_at }}</p>
        <h2 class="mt-5 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Новость {{ $news->id }}: {{ $news->title }}</h2>
        <p class="mt-5 mb-6 tracking-tight text-gray-700 md:text-lg dark:text-white text-justify">Описание: {{ $news->description }}</p>
    </div>
@endsection
