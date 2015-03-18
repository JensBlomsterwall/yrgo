@extends('master')

<h1>Studenter</h1>

@foreach($students as $student)
    <li>
        <a href="{{action('StudentController@show', [$student->first_name])}}">{{ $student->first_name }} {{ $student->last_name  }}</a>
    </li>
@endforeach
