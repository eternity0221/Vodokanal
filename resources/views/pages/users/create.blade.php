@extends("components.layout.RootLayout", ["title"=>"Пользователи"])
@section("layout")
    @include("components.forms.users.UsersCreateForm")
@endsection

