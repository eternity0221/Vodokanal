<div class="mb-5">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Роль</label>
    @if(isset($useDisablled) && $useDisablled)
        <select disabled name="{{$name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{$className ?? ""}}" style="{{$style ?? ""}}">
            @foreach($selects as $select)
                @if($select["isActive"])
                    <option class="color-dark" value="{{$select["value"]}}" selected>{{$select["title"]}}</option>
                @else
                    <option class="color-dark" value="{{$select["value"]}}">{{$select["title"]}}</option>
                @endif
            @endforeach
        </select>
    @else
        <select name="{{$name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{$className ?? ""}}" style="{{$style ?? ""}}">
            @foreach($selects as $select)
                @if($select["isActive"])
                    <option class="color-dark" value="{{$select["value"]}}" selected>{{$select["title"]}}</option>
                @else
                    <option class="color-dark" value="{{$select["value"]}}">{{$select["title"]}}</option>
                @endif
            @endforeach
        </select>
    @endif
</div>
