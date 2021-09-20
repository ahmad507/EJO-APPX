@extends('layouts.master')
@section('content')
    <div class="flex flex-wrap h-screen">
        <div class="w-2/12 h-screen bg-blue_ocean">
            NAVIGATION
        </div>
        <div class="w-8/12 h-screen">
            <div class="mx-auto">
                <x-list-ejo-component :dataejo='$ejo'></x-list-ejo-component>
            </div>
        </div>
        <div class="w-2/12 h-screen bg-blue_ocean">
            STATISTIK
        </div>
    </div>
@endsection
