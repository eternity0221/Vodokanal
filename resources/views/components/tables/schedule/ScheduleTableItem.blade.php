<tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
    <td class="px-6 py-4 pointer-events-none">{{$day}}</td>
    <td class="px-6 py-4 pointer-events-none">{{$time}}</td>
    @if(in_array(Auth::user()->role, ['admin', 'moderator']))
        <td class="px-6 py-4 pointer-events-none">{{$updated_at}}</td>
        <td class="px-6 py-4 justify-center">
            <div class="flex gap-2">
                <a href="{{ route("schedules.edit", ["schedule"=>$id]) }}" class="bg-green-500 text-white px-4 py-2 rounded duration-300 hover:bg-green-600">Изменить</a>
            </div>
        </td>
    @endif
</tr>
