<?php
    $links = [
        ["label"=>"Главная","href"=>"home","onlyAuth"=>false],
        ["label"=>"Новости","href"=>"news.publish","onlyAuth"=>false],
        ["label"=>"Контакты","href"=>"contact","onlyAuth"=>false],
        ["label"=>"Услуги","href"=>"services.publish","onlyAuth"=>true],
        ["label"=>"Личный кабинет","href"=>"dashboard","onlyAuth"=>true],
    ];
?>

<ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
    @foreach($links as $key => $link)
        @if($link["onlyAuth"] && Auth::check())
            <li>
                <a href="{{route($link["href"])}}"
                   class="block py-2 px-3 duration-300 hover:text-blue-500 {{isActive($link["href"]) ? "text-blue-500" : "text-white"}}">
                    {{$link["label"]}}
                </a>
            </li>
        @elseif(!$link["onlyAuth"])
            <li>
                <a href="{{route($link["href"])}}"
                   class="block py-2 px-3 duration-300 hover:text-blue-500 {{isActive($link["href"]) ? "text-blue-500" : "text-white"}}">
                    {{$link["label"]}}
                </a>
            </li>
        @endif
    @endforeach
    @include("components.header.HeaderAuth")
</ul>
