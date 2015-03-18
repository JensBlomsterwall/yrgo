@extends('master')

<h1>Studenter</h1>

@foreach($students as $student)
    <li>{{ $student->first_name }} {{ $student->last_name  }}</li>
@endforeach
