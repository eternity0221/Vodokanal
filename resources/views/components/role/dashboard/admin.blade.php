@if(Auth::user()->role=='admin')
    <button class="duration-300 dark:bg-gray-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> <a href="{{ route('users.index') }}">СПИСОК ПОЛЬЗОВАТЕЛЕЙ</a> </button>
    <button class="duration-300 dark:bg-gray-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> <a href="{{ route('news.index') }}">СПИСОК НОВОСТЕЙ</a> </button>
    <button class="duration-300 dark:bg-gray-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> <a href="{{ route('events.index') }}">СПИСОК МЕРОПРИЯТИЙ</a> </button>
    <button class="duration-300 dark:bg-gray-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> <a href="{{ route('schedules.index') }}"> СПИСОК РАСПИСАНИЕ</a> </button>
    <button class="duration-300 dark:bg-gray-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> <a href="{{ route('services.index') }}">СПИСОК УСЛУГ</a> </button>
    <button class="duration-300 dark:bg-gray-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> <a href="{{ route('alerts.index') }}">СПИСОК ЗАЯВОК</a> </button>
@endif
