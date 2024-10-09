@extends("components.layout.RootLayout", ["title"=>"Расписание"])
@section("layout")
    <div class="container mx-auto mt-8">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Расписание</h1>
        @include("components.alert.Alert")
        @include("components.tables.schedule.ScheduleTable")
    </div>
@endsection
