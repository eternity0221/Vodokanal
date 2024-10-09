<div class="mt-6 relative overflow-x-auto shadow-md sm:rounded-lg animate-simple-fadeout-top">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">id</th>
            <th scope="col" class="px-6 py-3">Имя</th>
            <th scope="col" class="px-6 py-3">Эл.почта</th>
            <th scope="col" class="px-6 py-3">Роль</th>
            <th scope="col" class="px-6 py-3 text-center">Создан</th>
            <th scope="col" class="px-6 py-3">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $dataItem)
            @include("components.tables.users.UsersTableItem", [
                "id"=>$dataItem->id,
                "name"=>$dataItem->name,
                "email"=>$dataItem->email,
                "role"=>$dataItem->role,
                "created_at"=>$dataItem->created_at,
            ])
        @endforeach
        </tbody>
    </table>
</div>
