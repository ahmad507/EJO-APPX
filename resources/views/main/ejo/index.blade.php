@extends('layouts.master')
@section('content')
    <div class="flex flex-col h-screen md:flex-row ">
        <div class=" md:w-2/12  ">
            <x-left-navigation-component></x-left-navigation-component>
        </div>
        <div class=" md:w-6/12 ">
            <div class="mx-auto">
                <x-list-ejo-component :dataejo='$ejo'></x-list-ejo-component>
            </div>
        </div>
        <div class=" md:w-4/12 ">
            <x-right-navigation-component></x-right-navigation-component>
        </div>
    </div>
@endsection
