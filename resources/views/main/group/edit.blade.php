@extends('layouts.master')
@section('content')
    <h1>edit group</h1>
    <form method="POST" enctype="multipart/form-data" action="{{ route('group.update', $group->id) }}">
        @csrf
        <div class="form-group">
            <input type="text" name="group_name" class="form-control" value="{{ $group->group_name }}">
        </div>
        <button type="submit" class="btn btn-primary ">save</button>
    </form>
@endsection
