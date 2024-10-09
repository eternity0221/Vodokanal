<tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
    <td class="px-6 py-4 pointer-events-none">{{$title}}</td>
    <td class="px-6 py-4 pointer-events-none">{{strlen($description) >= 256 ? substr($description, 0, 256)."..." : $description}}</td>
    <td class="px-6 py-4 pointer-events-none text-center">{{date("d F Y", strtotime($created_at))}}</td>
    <td class="px-6 py-4 pointer-events-none text-center"><img class="w-8 h-8 object-cover" src="{{$image}}" alt='-'></td>
    <td class="px-6 py-4 justify-center">
        <div class="flex gap-2">
            <a href="{{ route("events.show", ["event"=>$id]) }}" class="bg-blue-500 text-white px-4 py-2 rounded duration-300 hover:bg-blue-600">Посмотреть</a>
            <a href="{{ route("events.edit", ["event"=>$id]) }}" class="bg-green-500 text-white px-4 py-2 rounded duration-300 hover:bg-green-600">Изменить</a>
            @if(Auth::user()->role=='admin')
                <form method="POST" action="{{route("events.destroy", ["event"=>$id])}}">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded duration-300 hover:bg-red-700">Удалить</button>
                </form>
            @endif
        </div>
    </td>
</tr>
