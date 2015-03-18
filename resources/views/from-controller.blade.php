@if('' == $string)
    <b>Ingen parameter skickades med</b>
@else
    Du skrev: {{ $string }}
@endif
