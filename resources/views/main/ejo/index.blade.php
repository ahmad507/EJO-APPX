@extends('layouts.master')
@section('content')
    <h1>EJO LIST</h1>
    <ul>
        @foreach ($ejo as $items)
            <li>
                <span>Number EJO : {{ $items->number }}</span>
                <span>Machine: {{ $items->machine }}</span>
                <p>Problem : {{ $items->problem }} </p>
                <p>Category : {{ $items->category }} </p>
                <p>Group : {{ $items->group }} </p>
                <p>Machine : {{ $items->machine }} </p>
                <p>Status : {{ $items->status }} </p>
                <button type="button" class="btn btn-primary">Primary</button>
            </li>
        @endforeach
    </ul>
@endsection
