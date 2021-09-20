@extends('layouts.master')
@section('content')
    <h1>edit category</h1>
    <form method="POST" enctype="multipart/form-data" action="{{ route('status.update', $status->id) }}">
        @csrf
        <div class="form-group">
            <input type="text" name="status_name" class="form-control" value="{{ $status->status_name }}">
        </div>
        <button type="submit" class="btn btn-primary ">save</button>
    </form>
@endsection
