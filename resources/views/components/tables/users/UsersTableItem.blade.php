<tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
    <td class="px-6 py-4 pointer-events-none">{{$id}}</td>
    <td class="px-6 py-4 pointer-events-none">{{$name}}</td>
    <td class="px-6 py-4 pointer-events-none">{{$email}}</td>
    <td class="px-6 py-4 pointer-events-none">{{$role}}</td>
    <td class="px-6 py-4 pointer-events-none text-center">{{date("d F Y", strtotime($created_at))}}</td>
    <td class="px-6 py-4 justify-center">
        <div class="flex gap-2">
            <a href="{{ route("users.edit", ["user"=>$id]) }}" class="bg-green-500 text-white px-4 py-2 rounded duration-300 hover:bg-green-600">Изменить</a>
            <form method="POST" action="{{route("users.destroy", ["user"=>$id])}}">
                @csrf
                @method("DELETE")
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded duration-300 hover:bg-red-700">Удалить</button>
            </form>
        </div>
    </td>
</tr>
