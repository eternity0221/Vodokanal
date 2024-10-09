@extends("components.layout.RootLayout", ["title"=>"Заявки"])
@section("layout")
    <div class="container mx-auto mt-8">
        @if(Auth::user()->role == "admin")
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Список заявок</h1>
        @else
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Мои заявки</h1>
        @endif
        @if(Auth::user()->role == "admin")
            @include("components.additional.Search")
        @endif
        @include("components.buttons.createButtonAlerts")
        @include("components.alert.Alert")
        @include("components.tables.alerts.AlertsTable")
    </div>
    @if(Auth::user()->role == "admin")
        <div class="container mx-auto mt-8 mb-6">
            @include("components.additional.Pagination", ["pagination"=>$data])
        </div>
    @endif
@endsection
