@extends('layouts.master')
@section('content')
    <form method="POST" enctype="multipart/form-data" action="{{ route('ejo.store') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="ejo_number" class="form-control" placeholder="EJO Number">
        </div>
        <div class="form-group">
            <input type="text" name="ejo_machine" class="form-control" placeholder="Machine">
        </div>
        <div class="form-group">
            <input type="text" name="ejo_description" class="form-control" placeholder="Problem">
        </div>
        <div class="form-group">
            <select id="inputState" name="shift_id" class="form-control">
                <option selected>--Shift--</option>
                @foreach ($shift as $id => $items)
                    <option value="{{ $items->id }}" {{ old('shift_id') == $id ? 'selected' : '' }}>
                        {{ $items->shift }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select id="inputState" name="group_id" class="form-control">
                <option selected>--Group--</option>
                @foreach ($group as $id => $items)
                    <option value="{{ $items->id }}" {{ old('group_id') == $id ? 'selected' : '' }}>
                        {{ $items->group }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select id="inputState" name="category_id" class="form-control">
                <option selected>--Category--</option>
                @foreach ($category as $id => $items)
                    <option value="{{ $items->id }}" {{ old('category_id') == $id ? 'selected' : '' }}>
                        {{ $items->category }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="hidden" name="status_id" value="1" class="form-control">
        </div>
        <div class="form-group">
            <input type="hidden" name="ejo_flag" value="1" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
