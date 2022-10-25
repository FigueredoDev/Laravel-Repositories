@extends('admin.layouts.app')

@section('title', 'Edit product')

@section('content')
    <h1>Edit product - {{ $id }}</h1>
    <form action="{{ route('products.update', $id) }}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Name:">
        <input type="text" name="description" placeholder="Description: ">
        <button type="submit">Send</button>
    </form>
@endsection
