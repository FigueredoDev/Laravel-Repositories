@extends('admin.layouts.app')

@section('title', 'Admin Page')

@section('content')

    <h1>Show the Products</h1>
    @if ($test === 123)
        <h2>Equals in first if</h2>
    @else
        Is different
    @endif

    @unless($test === '123')
        <h2>Is different in unless function</h2>
    @else
        Equals
    @endunless

    @isset($test2)
        <p>{{ $test2 }}</p>
    @endisset

    @empty($test3)
        <p>This value is empty...</p>
    @endempty

    @auth
        <p>Authenticated</p>
    @else
        <p>You are not authenticated</p>
    @endauth

    @guest
        <p>You are not authenticated</p>
    @endguest

    @switch($test)
        @case(1)
            Equals one
        @break

        @case(2)
            Equals two
        @break

        @case(123)
            Equals 123
        @break

        @default
            Default
    @endswitch
@endsection
