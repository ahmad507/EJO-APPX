@extends('layouts.master')
@section('content')
    <h1>create status</h1>
    <form method="POST" enctype="multipart/form-data" action="{{ route('status.store') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="status_name" class="form-control" placeholder="Status Name">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
