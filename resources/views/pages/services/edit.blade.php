@extends("components.layout.RootLayout", ["title"=>"Услуги"])
@section("layout")
    @include("components.forms.services.ServicesUpdateForm")
@endsection

{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Изменение услуги {{ $service->name }}</title>--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">--}}
{{--</head>--}}

{{--<div class="row">--}}
{{--    <div class="col-lg-12 margin-tb">--}}
{{--        <div class="pull-left">--}}
{{--            <h2>Изменение услуги {{ $service->name }}</h2>--}}
{{--        </div>--}}
{{--        <div class="pull-right">--}}
{{--            <a class="btn btn-primary" href="{{ route('services.index') }}">Назад</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--@if ($errors->any())--}}
{{--    <div class="alert alert-danger">--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li>{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}

{{--<form action="{{ route('services.update',$service->id) }}" method="POST">--}}
{{--    @csrf--}}

{{--    @method('PUT')--}}
{{--    <div class="row">--}}
{{--        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--            <div class="form-group">--}}
{{--                <strong>Название:</strong>--}}
{{--                <input type="text" name="title" value="{{ $service->title }}" class="form-control" placeholder="Название">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--            <div class="form-group">--}}
{{--                <strong>Почта:</strong>--}}
{{--                <textarea class="form-control" style="height:150px" name="description" placeholder="Почта">{{ $service->description }}</textarea>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--            <div class="form-group">--}}
{{--                <strong>Стоимость:</strong>--}}
{{--                <textarea class="form-control" style="height:150px" name="price" placeholder="Стоимость">{{ $service->price }}</textarea>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}
{{--            <button type="submit" class="btn btn-primary">Изменить</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</form>--}}
