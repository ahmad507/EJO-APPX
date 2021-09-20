@extends('layouts.master')
@section('content')
    <hr>
    <a href="/category/category_create">Create</a>
    <ul>
        @foreach ($category as $items)
            <li> {{ $items->category }}</li>
            <a href="{{ url('/category/category_edit', $items->id) }}" class="btn btn-outline-success btn-xs">edit</i>
            </a>
            <form method="DELETE" enctype="multipart/form-data" action="{{ route('category.destroy', $items->id) }}">
                @csrf
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
        @endforeach
    </ul>
@endsection
