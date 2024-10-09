@if(isset($key) && isset($value))
    <form enctype="{{$enctype ?? ''}}" class="{{$className ?? ''}}" method="{{!isset($method) || $method == "GET" ? 'GET' : 'POST'}}" action="{{$action ? route($action, [$key => $value]) : ''}}">
        @if(isset($method) && $method != "GET")
            @csrf
            @method($method)
        @endif
        @yield($yield ?? "form")
    </form>
@else
    <form enctype="{{$enctype ?? ''}}" class="{{$className ?? ''}}" method="{{!isset($method) || $method == "GET" ? 'GET' : 'POST'}}">
        @if(isset($method) && $method != "GET")
            @csrf
            @method($method)
        @endif
        @yield($yield ?? "form")
    </form>
@endif
