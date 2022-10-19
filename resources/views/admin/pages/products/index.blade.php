@extends('admin.layouts.app')

@section('title', 'Admin Page')

@section('content')

    <h1>Show the Products</h1>

    @component('admin.components.card')
        @slot('title')
            <h1>Card title</h1>
        @endslot
        A example card
    @endcomponent

    <hr>

    @include('admin.includes.alerts', ['content' => 'alert of products'])

    <hr>
    @if (isset($products))
        @foreach ($products as $product)
            <p class="@if ($loop->first) last @endif">{{ $product }}</p>
        @endforeach
    @endif

    <hr>
    @forelse ($products as $product)
        <p class="@if ($loop->last) last @endif">{{ $product }}</p>
    @empty
        <p>Products is empty</p>
    @endforelse
    <hr>

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

<style>
.last {
    background: grey;
}
</style>
