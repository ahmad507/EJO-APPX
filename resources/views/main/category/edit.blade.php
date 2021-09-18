@extends('layouts.master')
@section('content')
    <h1>edit category</h1>
    <form method="POST" enctype="multipart/form-data" action="{{ route('category.update', $category->id) }}">
        @csrf
        <div class="form-group">
            <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}">
        </div>
        <button type="submit" class="btn btn-primary ">save</button>
    </form>
@endsection
