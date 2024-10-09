{{--<tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">--}}
{{--    <td class="px-6 py-4 pointer-events-none">{{$id}}</td>--}}
{{--    <td class="px-6 py-4 pointer-events-none">{{$user->name}}</td>--}}
{{--    <td class="px-6 py-4 pointer-events-none">{{$title}}</td>--}}
{{--    <td class="px-6 py-4 pointer-events-none">{{number_format($price, 0, '', ' ')}} руб</td>--}}
{{--    <td class="px-6 py-4 pointer-events-none">{{$status}}</td>--}}
{{--    <td class="px-6 py-4 pointer-events-none text-center">{{date("d F Y", strtotime($created_at))}}</td>--}}
{{--    <td class="px-6 py-4 justify-center">--}}
{{--        <div class="flex gap-2">--}}
{{--            @if(Auth::user()->role=='admin')--}}
{{--                        @if($status=='Новый')--}}
{{--                            <a href="{{ route("alerts.edit", ["alert"=>$id]) }}" class="bg-green-500 text-white px-4 py-2 rounded duration-300 hover:bg-green-600">Принять</a>--}}
{{--                            <a href="{{ route("alerts.edit", ["alert"=>$id]) }}" class="bg-red-500 text-white px-4 py-2 rounded duration-300 hover:bg-red-600">Отклонить</a>--}}
{{--                        @endif--}}
{{--                <form method="POST" action="{{route("events.destroy", ["event"=>$id])}}">--}}
{{--                    @csrf--}}
{{--                    @method("DELETE")--}}
{{--                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded duration-300 hover:bg-red-700">Удалить</button>--}}
{{--                </form>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </td>--}}
{{--</tr>--}}

<tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
    @if(Auth::user()->role == "admin")
        <td class="px-6 py-4 pointer-events-none text-center">{{$user->id}}</td>
    @endif
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white pointer-events-none">
        <div class="flex flex-col">
            <span>{{$user->name}}</span>
            <span class="text-xs text-gray-400">{{$user->email}}</span>
        </div>
    </th>
    <td class="px-6 py-4 pointer-events-none text-center">{{$title}}</td>
    <td class="px-6 py-4 pointer-events-none">{{number_format($price, 0, '', ' ')}} руб</td>
    <td class="px-6 py-4 pointer-events-none text-center {{$status == "Новый" ? "text-blue-400 animate-pulse" : ($status == "Принят" ? "text-green-400" : "text-red-600")}}">{{$status == "Новый" ? "Новый" : ($status == "Принят" ? "Принят" : "Отклонен")}}</td>
    <td class="px-6 py-4 pointer-events-none text-center">{{date("d F Y", strtotime($created_at))}}</td>
    @if(Auth::user()->role == "admin")
        <td class="px-6 py-4 justify-center">
            @if($status == "Новый")
                <div class="flex gap-2">
                    <form method="POST" action="{{route("reports.accept", ["id"=>$id])}}">
                        @csrf
                        @method("PATCH")
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded duration-300 hover:bg-green-600">Принять</button>
                    </form>
                    <form method="POST" action="{{route("reports.reject", ["id"=>$id])}}">
                        @csrf
                        @method("PATCH")
                        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded duration-300 hover:bg-red-700">Отклонить</button>
                    </form>
                </div>
            @else
                -
            @endif
        </td>
    @endif
</tr>
