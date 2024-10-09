@extends("components.layout.RootLayout", ["title"=>"Услуги"])
@section("layout")
<div class="container mx-auto mt-8">
    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Список услуг</h1>
    @include("components.additional.Search")
    @include("components.buttons.createButtonServices")
    @include("components.alert.Alert")
    @include("components.tables.services.ServicesTable")
</div>
<div class="container mx-auto mt-8 mb-6">
    @include("components.additional.Pagination", ["pagination"=>$services])
</div>
@endsection

