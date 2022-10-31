@extends('admin.layouts.app')

@section('title', 'create product')

@section('content')
<h1>Create new product</h1>
<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Name:">
    <input type="text" name="description" placeholder="Description: ">
    <input type="file" name="photo">
    <button type="submit">Send</button>
</form>
@endsection
