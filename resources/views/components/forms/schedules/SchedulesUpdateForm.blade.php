<form action="{{ route('schedules.update', ['schedule'=>$schedules->id]) }}" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto m-12">
    @method('PATCH')
    @csrf
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Изменить расписание дня {{ $schedules->day }}</h1>

    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Время</label>
        <input type="text" name="time" id="time" value="{{ old('time', $schedules->time) }}" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Время"/>
        @error("time")<p class="text-red-700">{{ $message }}</p>@enderror
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Изменить раписание</button>
</form>

