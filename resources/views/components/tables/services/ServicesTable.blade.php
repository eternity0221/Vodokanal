<div class="mt-6 relative overflow-x-auto shadow-md sm:rounded-lg animate-simple-fadeout-top">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">Название</th>
            <th scope="col" class="px-6 py-3 text-center">Описание</th>
            <th scope="col" class="px-6 py-3 w-[125px]">Стоимость</th>
            <th scope="col" class="px-6 py-3 text-center">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($services as $key => $dataItem)
            @include("components.tables.services.ServicesTableItem", [
                "id"=>$dataItem->id,
                "title"=>$dataItem->title,
                "description"=>$dataItem->description,
                "price"=>$dataItem->price,
            ])
        @endforeach
        </tbody>
    </table>
</div>
