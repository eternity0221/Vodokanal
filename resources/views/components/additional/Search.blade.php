@section("form")
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Поиск</label>
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input name="{{$name ?? "search"}}" style="{{$style ?? ""}}" value="{{old($name ?? "search", $_GET[$name ?? "search"] ?? "")}}" type="search" max="32" id="default-search" class="{{$className ?? ""}} block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Искать новость..." />
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Поиск</button>
        </div>
{{--    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Поиск</label>--}}
{{--    <input--}}
{{--        name="{{$name ?? "search"}}"--}}
{{--        class="bg-secondary rad-2 pad-2 w-full {{$className ?? ""}}"--}}
{{--        type="search" max="32"--}}
{{--        value="{{old($name ?? "search", $_GET[$name ?? "search"] ?? "")}}"--}}
{{--        style="{{$style ?? ""}}"--}}
{{--        placeholder="Поиск..."--}}
{{--    />--}}
@endsection

@include("components.forms.Form", ['className'=>'m-4 w-1/3 m-auto'])
