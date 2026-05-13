@extends('theme.mocksurl.website2')

@section('content2')


@php
    $teams = json_decode($user->favorite_teams);
@endphp

@if($teams)
    <ul>
        @foreach($teams as $team)
            <li>{{ $team }}</li>
        @endforeach
    </ul>
@endif


@endsection