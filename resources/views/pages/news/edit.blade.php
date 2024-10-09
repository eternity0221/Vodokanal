@extends("components.layout.RootLayout", ["title"=>"Новости"])
@section("layout")
    @include("components.forms.news.NewsUpdateForm")
@endsection


{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Изменить новость {{ $news->title }}</title>--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">--}}
{{--</head>--}}

{{--<div class="row">--}}
{{--    <div class="col-lg-12 margin-tb">--}}
{{--        <div class="pull-left">--}}
{{--            <h2>Изменить новость</h2>--}}
{{--        </div>--}}
{{--        <div class="pull-right">--}}
{{--            <a class="btn btn-primary" href="{{ route('news.index') }}"> Назад</a>--}}
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

{{--<form action="{{ route('news.update',$news->id) }}" method="POST" enctype="multipart/form-data">--}}
{{--    @csrf--}}

{{--    @method('PUT')--}}
{{--    <div class="row">--}}
{{--        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--            <div class="form-group">--}}
{{--                <strong>Title:</strong>--}}
{{--                <input type="text" name="title" value="{{ $news->title }}" class="form-control" placeholder="Title">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--            <div class="form-group">--}}
{{--                <strong>Description:</strong>--}}
{{--                <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $news->description }}</textarea>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                <div class="form-group">--}}
{{--                    <strong>фото:</strong>--}}
{{--                    <input type="file" name="image" class="form-control" placeholder="фото">--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        <div class="col-xs-12 col-sm-12 col-md-12 text-center">--}}
{{--            <button type="submit" class="btn btn-primary">Изменить</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</form>--}}
