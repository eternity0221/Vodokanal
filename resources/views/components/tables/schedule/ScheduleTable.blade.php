<div class="m-8 mt-6 relative overflow-x-auto shadow-md sm:rounded-lg animate-simple-fadeout-top">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">День недели</th>
            <th scope="col" class="px-6 py-3">Время</th>
            @if(in_array(Auth::user()->role, ['admin', 'moderator']))
                <th scope="col" class="px-6 py-3">Изменен</th>
                <th scope="col" class="px-6 py-3">Действия</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach($schedules as $key => $dataItem)
            @include("components.tables.schedule.ScheduleTableItem", [
                "id"=>$dataItem->id,
                "schedule"=>$dataItem,
                "day"=>$dataItem->day,
                "time"=>$dataItem->time,
                "updated_at"=>$dataItem->updated_at,
            ])
        @endforeach
        </tbody>
    </table>
</div>
