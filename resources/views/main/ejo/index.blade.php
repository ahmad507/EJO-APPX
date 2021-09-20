@extends('layouts.master')
@section('content')
    <h1>EJO LIST</h1>
    <hr>
    <a href="/ejo/ejo_create">Create</a>
    <ul>
        @foreach ($ejo as $items)
            <li>
                <div class="flex mx-1 justify-between justify-items-center">
                    <p>{{ $items->number }}</p>
                    <p>{{ $items->machine }}</p>
                    <p>{{ $items->problem }}</p>
                    <p>{{ $items->category }}</p>
                    <p>{{ $items->group }}</p>
                    <p>{{ $items->shift }}</p>
                    <p>{{ $items->machine }}</p>
                    <p>{{ $items->status }}</p>
                    <a href="{{ url('/ejo/ejo_edit', $items->id) }}" class="btn btn-outline-success btn-xs">edit</i>
                    </a>
                    <form method="DELETE" enctype="multipart/form-data" action="{{ route('ejo.destroy', $items->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
