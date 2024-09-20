@extends('layouts.app_Movies')
@section('content')
    <ol>
    @foreach ($movies as $item)
        <li>
            {{$item}}<br>
        </li>
    @endforeach
    </ol>
@endsection