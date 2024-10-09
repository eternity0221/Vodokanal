@extends("components.layout.RootLayout", ["title"=>"Мероприятия"])
@section("layout")
    <div class="container mx-auto mt-8">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Список мероприятий</h1>
        @include("components.additional.Search")
        @include("components.buttons.createButtonEvents")
        @include("components.alert.Alert")
        @include("components.tables.events.EventsTable")
    </div>
    <div class="container mx-auto mt-8 mb-6">
        @include("components.additional.Pagination", ["pagination"=>$events])
    </div>
@endsection

{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Список мероприятий</title>--}}
{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">--}}
{{--</head>--}}

{{--<div class="row">--}}
{{--    <div class="col-lg-12 margin-tb">--}}
{{--        <div class="pull-left">--}}
{{--            <h2>Список мероприятий</h2>--}}
{{--            <a class="btn btn-success" href="{{ route('events.create') }}"> Создать новое мероприятие</a>--}}
{{--            <div class="pull-right">--}}
{{--                <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--@if ($message = Session::get('success'))--}}
{{--    <div class="alert alert-success">--}}
{{--        <p>{{ $message }}</p>--}}
{{--    </div>--}}
{{--@endif--}}

{{--<table class="table table-bordered">--}}
{{--    <tr>--}}
{{--        <th>Название</th>--}}
{{--        <th>Описание</th>--}}
{{--        <th>Создан</th>--}}
{{--    </tr>--}}
{{--    @foreach ($events as $event)--}}
{{--        <tr>--}}
{{--            <td>{{ $event->title }}</td>--}}
{{--            <td>{{ $event->description }}</td>--}}
{{--            <td>{{ $event->created_at }}</td>--}}
{{--            <td>--}}
{{--                <a class="btn btn-info" href="{{ route('events.show',$event->id) }}">Посмотреть</a>--}}
{{--                <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Изменить</a>--}}
{{--                <form action="{{ route('events.destroy',$event->id) }}" method="POST">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                    <button type="submit" class="btn btn-danger">Удалить</button>--}}
{{--                </form>--}}
{{--            </td>--}}

{{--        </tr>--}}
{{--    @endforeach--}}
{{--</table>--}}

{{--{!! $events->links('pagination::bootstrap-4') !!}--}}
