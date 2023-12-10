@extends('layouts.mainlayout')

@section('title', 'Edit Mountain')

@section('content')

    <!-- component -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div
        class="relative min-h-screen flex items-center justify-center bg-center sm:px-6 lg:px-8 bg-no-repeat bg-cover relative items-center">
        <div class="max-w-7xl w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
            <div class="grid  gap-8 grid-cols-1">
                <div class="flex flex-col ">
                    <div class="flex flex-col sm:flex-row items-center">
                        <h2 class="font-bold text-lg mr-auto">Edit Mountain</h2>
                    </div>
                    <div class="mt-2">
                        <form action="#" method="POST">
                            <div class="form">
                                <div class="md:space-y-2 mb-3">
                                    <label class="text-md font-semibold text-gray-600 py-2">Upload Images</label>
                                    <div class="flex items-center">
                                        <div class="w-108 h-96 mr-4 flex-none rounded-xl border overflow-hidden">
                                            <img class="w-full h-full mr-4 object-cover" src="{{ asset('/bg.jpg') }}"
                                                alt="Avatar Upload">
                                        </div>
                                        <label class="cursor-pointer ">
                                            <span
                                                class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-green-400 hover:bg-green-500 hover:shadow-lg">Browse</span>
                                            <input type="file" class="hidden" :multiple="multiple"
                                                :accept="accept">
                                        </label>
                                    </div>
                                </div>
                                <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                    <div class="mb-3 space-y-2 w-full text-xs">
                                        <label class="font-semibold text-gray-600 py-2">Mountain Name </label>
                                        <input placeholder="Mountain Name"
                                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                            required="required" type="text" name="integration[shop_name]"
                                            id="integration_shop_name">
                                    </div>
                                </div>
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <p class="font-semibold mt-2 mb-2 text-xs text-green-500">Dificulty : Beginner</p>
                                    <label class="font-semibold text-gray-600 py-2">Routes </label>
                                    <input placeholder="Routes"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        required="required" type="text" name="integration[shop_name]"
                                        id="integration_shop_name">
                                </div>
                                <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                    <label class="font-semibold text-gray-600 py-2">Safety Tips</label>
                                    <textarea required="" name="message" id=""
                                        class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                                        placeholder="Safety Tips" spellcheck="false"></textarea>
                                </div>

                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <p class="font-semibold mt-2 mb-2 text-xs text-blue-500">Dificulty : Intermediate</p>
                                    <label class="font-semibold text-gray-600 py-2">Routes </label>
                                    <input placeholder="Routes"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        required="required" type="text" name="integration[shop_name]"
                                        id="integration_shop_name">
                                </div>
                                <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                    <label class="font-semibold text-gray-600 py-2">Safety Tips</label>
                                    <textarea required="" name="message" id=""
                                        class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                                        placeholder="Safety Tips" spellcheck="false"></textarea>
                                </div>
                                <div class="mb-3 space-y-2 w-full text-xs">
                                    <p class="font-semibold mt-2 mb-2 text-xs text-red-500">Dificulty : Advanced</p>
                                    <label class="font-semibold text-gray-600 py-2">Routes </label>
                                    <input placeholder="Routes"
                                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                        required="required" type="text" name="integration[shop_name]"
                                        id="integration_shop_name">
                                </div>
                                <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                    <label class="font-semibold text-gray-600 py-2">Safety Tips</label>
                                    <textarea required="" name="message" id=""
                                        class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                                        placeholder="Safety Tips" spellcheck="false"></textarea>
                                </div>
                            </div>

                            <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                <button
                                    class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                                    Cancel </button>
                                <button
                                    class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
