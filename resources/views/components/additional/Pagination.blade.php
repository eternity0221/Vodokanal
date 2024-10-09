@if(isset($pagination) && $pagination->links())
    {{$pagination->appends($_GET)->links("pagination::tailwind")}}
@endif
