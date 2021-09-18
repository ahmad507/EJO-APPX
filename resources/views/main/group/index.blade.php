@extends('layouts.master')
@section('content')
    <h1>Categori Page</h1>
    <hr>
    <a href="/group/group_create">Create</a>
    <ul>
        @foreach ($group as $items)
            <li> {{ $items->group }}</li>
            <a href="{{ url('/group/group_edit', $items->id) }}" class="btn btn-outline-success btn-xs">edit</i>
            </a>
            <form method="DELETE" enctype="multipart/form-data" action="{{ route('group.destroy', $items->id) }}">
                @csrf
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
        @endforeach
    </ul>
@endsection
