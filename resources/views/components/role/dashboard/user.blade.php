@if(Auth::user()->role=='user')
    <button class="duration-300 dark:bg-gray-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> <a href="{{ route('alerts.index') }}"> МОИ ЗАЯВКИ </a> </button>
    <a href="{{ route('alerts.create') }}" class="duration-300 dark:bg-gray-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Создать</a>
@endif
