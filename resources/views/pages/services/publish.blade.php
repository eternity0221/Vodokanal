@extends("components.layout.RootLayout", ["title"=>"Новости"])
@section("layout")
    <div class="container mx-auto mt-8">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Услуги</h1>
        <div class="grid grid-cols-3 gap-2">
            @foreach($data as $key => $dataItem)
                @include("components.cards.services.ServicesCards", [
                  "id"=>$dataItem->id,
                  "title"=>$dataItem->title,
                  "price"=>$dataItem->price,
                  "description"=>$dataItem->description,
              ])
            @endforeach
        </div>
    </div>
    <div class="container mx-auto mt-8 mb-6">
        @include("components.additional.Pagination", ["pagination"=>$data])
    </div>
@endsection
