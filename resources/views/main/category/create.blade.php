@extends('layouts.master')
@section('content')
    <h1>create category</h1>
    <form method="POST" enctype="multipart/form-data" action="{{ route('category.store') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="category_name" class="form-control" placeholder="Company Name">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
