@extends("components.layout.RootLayout", ["title"=>"Новости"])
@section("layout")
    <div class="container mx-auto mt-8">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Список новостей</h1>
        @include("components.additional.Search")
        <div class="grid grid-cols-3 gap-2">
            @foreach($data as $key => $dataItem)
                @include("components.cards.news.NewsCards", [
                  "id"=>$dataItem->id,
                  "title"=>$dataItem->title,
                  "image"=>$dataItem->image,
                  "description"=>$dataItem->description,
                  "created_at"=>$dataItem->created_at,
              ])
            @endforeach
        </div>
    </div>
    <div class="container mx-auto mt-8 mb-6">
        @include("components.additional.Pagination", ["pagination"=>$data])
    </div>
@endsection
