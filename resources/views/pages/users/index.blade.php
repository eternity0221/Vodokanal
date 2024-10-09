@extends("components.layout.RootLayout", ["title"=>"Пользователи"])
@section("layout")
    <div class="container mx-auto mt-8">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Список пользователей</h1>
        @include("components.additional.Search")
        @include("components.buttons.createButtonUsers")
        @include("components.alert.Alert")
        @include("components.tables.users.UsersTable")
    </div>
    <div class="container mx-auto mt-8 mb-6">
        @include("components.additional.Pagination", ["pagination"=>$users])
    </div>
@endsection

