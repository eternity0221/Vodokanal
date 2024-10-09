{{--<div class="mt-6 relative overflow-x-auto shadow-md sm:rounded-lg animate-simple-fadeout-top">--}}
{{--    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">--}}
{{--        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">--}}
{{--        <tr>--}}
{{--            <th scope="col" class="px-6 py-3">Номер заявки</th>--}}
{{--            <th scope="col" class="px-6 py-3">Имя отправителя</th>--}}
{{--            <th scope="col" class="px-6 py-3">Название услуги</th>--}}
{{--            <th scope="col" class="px-6 py-3">Стоимость</th>--}}
{{--            <th scope="col" class="px-6 py-3">Статус</th>--}}
{{--            <th scope="col" class="px-6 py-3 text-center">Создан</th>--}}
{{--            <th scope="col" class="px-6 py-3">Действия</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($data as $key => $dataItem)--}}
{{--            @include("components.tables.alerts.AlertsTableItem", [--}}
{{--                "id"=>$dataItem->id,--}}
{{--                "user_id"=>$dataItem->user_id,--}}
{{--                "user"=>$dataItem->user,--}}
{{--                "title"=>$dataItem->title,--}}
{{--                "price"=>$dataItem->price,--}}
{{--                "status"=>$dataItem->status,--}}
{{--                "created_at"=>$dataItem->created_at,--}}
{{--            ])--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}

<div class="mt-6 relative overflow-x-auto shadow-md sm:rounded-lg animate-simple-fadeout-top">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            @if(Auth::user()->role == "admin")
                <th scope="col" class="px-6 py-3">ID</th>
            @endif
            <th scope="col" class="px-6 py-3">Пользователь</th>
            <th scope="col" class="px-6 py-3 text-center">Название услуги</th>
            <th scope="col" class="px-6 py-3">Стоимость</th>
            <th scope="col" class="px-6 py-3 text-center">Статус</th>
            <th scope="col" class="px-6 py-3 text-center">Создан</th>
            @if(Auth::user()->role == "admin")
                <th scope="col" class="px-6 py-3 text-center">Действия</th>
            @endif
        </tr>
        </thead>
        <tbody>
            @foreach(Auth::user()->role == "user" ? Auth::user()->alert : $data as $key => $dataItem)
                @include("components.tables.alerts.AlertsTableItem", [
                    "id"=>$dataItem->id,
                    "user"=>$dataItem->user,
                    "title"=>$dataItem->title,
                    "price"=>$dataItem->price,
                    "status"=>$dataItem->status,
                    "created_at"=>$dataItem->created_at,
                    "updated_at"=>$dataItem->updated_at,
                ])
            @endforeach
        </tbody>
    </table>
</div>


{{--<div class="mt-6 relative overflow-x-auto shadow-md sm:rounded-lg animate-simple-fadeout-top">--}}
{{--    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">--}}
{{--        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">--}}
{{--        <tr>--}}
{{--            <th scope="col" class="px-6 py-3">id</th>--}}
{{--            <th scope="col" class="px-6 py-3">Имя</th>--}}
{{--            <th scope="col" class="px-6 py-3">Эл.почта</th>--}}
{{--            <th scope="col" class="px-6 py-3">Роль</th>--}}
{{--            <th scope="col" class="px-6 py-3 text-center">Создан</th>--}}
{{--            <th scope="col" class="px-6 py-3">Действия</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($users as $key => $dataItem)--}}
{{--            @include("components.tables.users.UsersTableItem", [--}}
{{--                "id"=>$dataItem->id,--}}
{{--                "name"=>$dataItem->name,--}}
{{--                "email"=>$dataItem->email,--}}
{{--                "role"=>$dataItem->role,--}}
{{--                "created_at"=>$dataItem->created_at,--}}
{{--            ])--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}
