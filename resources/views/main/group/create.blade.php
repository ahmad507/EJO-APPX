@extends('layouts.master')
@section('content')
    <h1>create group</h1>
    <form method="POST" enctype="multipart/form-data" action="{{ route('group.store') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="group_name" class="form-control" placeholder="Group">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
