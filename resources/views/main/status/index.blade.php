@extends('layouts.master')
@section('content')
    <h1>Categori Page</h1>
    <hr>
    <a href="/status/status_create">Create</a>
    <ul>
        @foreach ($status as $items)
            <li> {{ $items->status }}</li>
            <a href="{{ url('/status/status_edit', $items->id) }}" class="btn btn-outline-success btn-xs">edit</i>
            </a>
            <form method="DELETE" enctype="multipart/form-data" action="{{ route('status.destroy', $items->id) }}">
                @csrf
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
        @endforeach
    </ul>
@endsection
