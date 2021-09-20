<div>
    <ul>
        @foreach ($dataejo as $items)
            <li class="flex justify-around bg-white mx-2 my-2 h-12" id="{{ $items->status }}">
                <div class="container flex items-center space-x-3">
                    <div class="avatar">
                        <div class="w-12 h-12 mask mask-circle">
                            <img src="{{ asset('/images/machine.png') }}" alt="__logo" class="h-12 md:h-24">
                        </div>
                    </div>
                    <div>
                        <div class="font-bold">
                            EJO NUM: {{ $items->number }}
                        </div>
                        <div class="text-sm">
                            Machine: {{ $items->machine }}
                        </div>
                    </div>
                </div>
                <div class="container flex items-center space-x-3">
                    <div>
                        <div class="font-bold">
                            {{ $items->problem }}
                        </div>
                        <span class="badge badge-outline badge-md uppercase"
                            id="{{ $items->category }}">{{ $items->category }}</span>
                    </div>
                </div>
                <div class="container flex items-center space-x-3">
                    <div>
                        <div class="font-bold">
                            GROUP : {{ $items->group }}
                        </div>
                        <span class="badge badge-outline badge-sm">Shift: {{ $items->shift }}</span>
                    </div>
                </div>
                <div class="container flex items-center justify-end space-x-3">
                    <div>
                        <div class="font-bold badge badge-outline badge-lg capitalize">
                            {{ $items->status }}
                        </div>
                    </div>
                </div>
                <div class="container flex items-center justify-end space-x-3">
                    <div>
                        <div class="btn btn-square btn-sm btn-accent">
                            <a href="{{ url('/ejo/ejo_edit', $items->id) }}" style="text-decoration: none">edit</a>
                        </div>
                    </div>
                    <form method="DELETE" enctype="multipart/form-data"
                        action="{{ route('ejo.destroy', $items->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-circle btn-sm btn-warning ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="inline-block w-6 h-6 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </li>
            <hr>
        @endforeach
    </ul>
</div>

<style>
    #new {
        border-left: 3px solid #ff0000;

    }

    #process {
        border-left: 3px solid #e5ff00;
    }

    #done {
        border-left: 3px solid #15ff00;
    }

    #electrics {
        background-color: red;
        color: aliceblue;
    }

    #mechanics {
        background-color: blue;
        color: aliceblue
    }

    #joins {
        background-color: tomato;
        color: aliceblue;
    }

</style>
