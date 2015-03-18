{{-- detta är en kommentar i blade --}}

@foreach($cars as $car)
    <li>{{ $car  }}</li>
@endforeach


{{--
    Detta är en funktion i laravel som skriver ut data och avslutar exekveringen
    dd = dump & die.
--}}
<?php dd($cars); ?>
