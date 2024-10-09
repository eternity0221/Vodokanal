<div class="mt-6 relative overflow-x-auto shadow-md sm:rounded-lg animate-simple-fadeout-top">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">Название</th>
            <th scope="col" class="px-6 py-3 text-center">Описание</th>
            <th scope="col" class="px-6 py-3">Создан</th>
            <th scope="col" class="px-6 py-3">Изображение</th>
            <th scope="col" class="px-6 py-3 text-center">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $key => $dataItem)
            @include("components.tables.news.NewsTableItem", [
                "id"=>$dataItem->id,
                "title"=>$dataItem->title,
                "image"=>$dataItem->image,
                "description"=>$dataItem->description,
                "created_at"=>$dataItem->created_at,
            ])
        @endforeach
        </tbody>
    </table>
</div>
