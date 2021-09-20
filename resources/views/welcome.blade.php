@extends('layoutS.master')
@section('content')
    <div class="container flex-row justify-center mx-auto h-72 mt-16 md:justify-between md:mt-32 md:h-96">
        <div class="flex justify-center mx-auto mt-16  h-60  md:h-90 md:mt-32 ">
            <img src="{{ asset('/images/logo.png') }}" alt="__logo" class="h-44 md:h-60">
        </div>
        <div class="flex flex-col -mt-12  h-8 md:justify-center md:mt-12 ">
            <p class="my-2 text-teal_primary text-xl mx-auto">Welcome to <strong>EJO</strong></p>
            <a href="{{ route('ejo.index') }}"
                class="btn btn-outline btn-accent my-2  text-xl mx-auto w-32 md:w-44 lowercase">Get Started</a>
        </div>
    </div>
@endsection
