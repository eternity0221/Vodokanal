@extends("components.layout.RootLayout", ['title'=>'Регистрация', "type"=>"oauth"])
@section("layout")
    @include("components.forms.auth.RegisterForm")
@endsection
