@extends("components.layout.RootLayout", ['title'=>'Авторизация', "type"=>"oauth"])
@section("layout")
    @include("components.forms.auth.LoginForm")
@endsection




