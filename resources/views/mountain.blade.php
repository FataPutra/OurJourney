@extends('layouts.mainlayout')

@section('title', 'Mountain')

@section('content')
    <div class=" flex mb-4 justify-center items-center">
        <h1 class="text-4xl font-bold justify-center text-black">Mountain</h1>
    </div>
    <div class=" flex mb-4 justify-center items-center">
        <button type="submit" class="bg-slate-500 hover:bg-slate-600 text-white font-semibold rounded-md py-2 px-4 w-fit">
            Add Mountain</button>
    </div>
    <div class="p-4 sm:ml-24">
        <div class="grid grid-cols-3 mb-4">
            <div class="flex items-center justify-center rounded h-64">
                <div class="flex items-center">
                    <div class="w-auto h-64 mr-4 flex-none rounded-xl border overflow-hidden cursor-pointer">
                        <a href="/mountaininfo">
                            <img class="w-full h-full mr-4 object-cover" src="{{ asset('/bg.jpg') }}" alt="Avatar Upload">
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center rounded h-64">
                <div class="flex items-center">
                    <div class="w-auto h-64 mr-4 flex-none rounded-xl border overflow-hidden cursor-pointer">
                        <a href="/mountaininfo">
                            <img class="w-full h-full mr-4 object-cover" src="{{ asset('/bg.jpg') }}" alt="Avatar Upload">
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center rounded h-64">
                <div class="flex items-center">
                    <div class="w-auto h-64 mr-4 flex-none rounded-xl border overflow-hidden cursor-pointer">
                        <a href="/mountaininfo">
                            <img class="w-full h-full mr-4 object-cover" src="{{ asset('/bg.jpg') }}" alt="Avatar Upload">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-3 mb-4">
            <div class="flex items-center justify-center rounded h-64">
                <div class="flex items-center">
                    <div class="w-auto h-64 mr-4 flex-none rounded-xl border overflow-hidden cursor-pointer">
                        <a href="/mountaininfo">
                            <img class="w-full h-full mr-4 object-cover" src="{{ asset('/bg.jpg') }}" alt="Avatar Upload">
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center rounded h-64">
                <div class="flex items-center">
                    <div class="w-auto h-64 mr-4 flex-none rounded-xl border overflow-hidden cursor-pointer">
                        <a href="/mountaininfo">
                            <img class="w-full h-full mr-4 object-cover" src="{{ asset('/bg.jpg') }}" alt="Avatar Upload">
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center rounded h-64">
                <div class="flex items-center">
                    <div class="w-auto h-64 mr-4 flex-none rounded-xl border overflow-hidden cursor-pointer">
                        <a href="/mountaininfo">
                            <img class="w-full h-full mr-4 object-cover" src="{{ asset('/bg.jpg') }}" alt="Avatar Upload">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection
