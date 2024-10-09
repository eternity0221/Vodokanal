<div class="bg-white w-full mb-5 mt-9">
    <div class="flex h-full flex-col gap-2 p-6 text-surface dark:text-dark">
        <h5 class="mb-2 text-xl font-medium leading-tight">{{$title}}</h5>
        <p class="mb-4 text-base">{{strlen($description) >= 50 ? substr($description, 0, 50)."..." : $description}}</p>
        <div class="flex mt-auto items-center justify-items-center justify-between">
            <div class="flex gap-2 justify-items-center justify-between">
                <a href="{{ route("services.show", ["service"=>$id]) }}" class="bg-blue-500 text-white px-4 py-2 rounded duration-300 hover:bg-blue-600">Посмотреть</a>
            </div>
            <p class="ml-1 text-base">{{number_format($price, 0, '', ' ')}} руб</p>
        </div>
    </div>
</div>



