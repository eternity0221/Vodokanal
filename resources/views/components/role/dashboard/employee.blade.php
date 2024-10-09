@if(Auth::user()->role=='employee')
    <button class="duration-300 dark:bg-gray-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> <a href="{{ route('events.publish') }}">МЕРОПРИЯТИЯ</a> </button>
    <button class="duration-300 dark:bg-gray-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> <a href="{{ route('schedules.index') }}"> РАСПИСАНИЕ</a> </button>
@endif
