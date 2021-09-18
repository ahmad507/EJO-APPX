@extends('layouts.master')
@section('content')
    <h1>EJO LIST</h1>
    <ul>
        @foreach ($ejo as $items)
            <li>
                <span>Number EJO : {{ $items->number }}</span>
                <span>Machine: {{ $items->machine }}</span>
                <p>Problem : {{ $items->problem }} </p>
                <button type="button" class="btn btn-primary">Primary</button>
            </li>
        @endforeach
    </ul>
@endsection

{{-- 'id' => $ejo->id,
'number' => $ejo->ejo_number,
'machine' => $ejo->ejo_machine,
'problem' => $ejo->ejo_description,
'shift' => $ejo->shift->shift_name,
'group' => $ejo->group->group_name,
'category' => $ejo->category->category_name,
'status' => $ejo->status->status_name, --}}
