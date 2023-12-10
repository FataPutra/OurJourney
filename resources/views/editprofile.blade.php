@extends('layouts.mainlayout')

@section('title', 'Edit Profile')

@section('content')

    <!-- component -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div
        class="relative min-h-screen flex items-center justify-center bg-center sm:px-6 lg:px-8 bg-no-repeat bg-cover relative items-center">
        <div class="max-w-7xl w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
            <div class="grid  gap-8 grid-cols-1">
                <div class="flex flex-col ">
                    <div class="flex flex-col sm:flex-row items-center">
                        <h2 class="font-bold text-lg mr-auto">Edit Profile</h2>
                    </div>
                    <div class="mt-2">
                        <form action="#" method="POST">
                            <div class="form">
                                <div class="md:space-y-2 mb-3">
                                    <div class="flex items-center">
                                        <div class="w-48 h-48 mr-4 flex-none rounded-full border overflow-hidden">
                                            <img class="w-full h-full mr-4 object-cover" src="{{ asset('/pp.jpeg') }}"
                                                alt="Avatar Upload">
                                        </div>
                                        <label class="cursor-pointer ">
                                            <span
                                                class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-blue-400 hover:bg-blue-500 hover:shadow-lg">Change
                                                Photo Profile</span>
                                            <input type="file" class="hidden" :multiple="multiple"
                                                :accept="accept">
                                        </label>
                                    </div>
                                </div>
                                <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                    <div class="mb-3 space-y-2 w-full text-xs">
                                        <label class="font-semibold text-gray-600 py-2">Username </label>
                                        <input placeholder="Username"
                                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                            required="required" type="text" name="integration[shop_name]"
                                            id="integration_shop_name">
                                    </div>
                                </div>
                                <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                    <div class="mb-3 space-y-2 w-full text-xs">
                                        <label class="font-semibold text-gray-600 py-2">Full Name</label>
                                        <input placeholder="Full Name"
                                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                            required="required" type="text" name="integration[shop_name]"
                                            id="integration_shop_name">
                                    </div>
                                </div>
                                <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                    <label class="font-semibold text-gray-600 py-2">Bio</label>
                                    <textarea required="" name="message" id=""
                                        class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                                        placeholder="Bio" spellcheck="false"></textarea>
                                </div>
                                <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                    <button
                                        class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                                        Cancel </button>
                                    <button
                                        class="mb-2 md:mb-0 bg-blue-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-blue-500">Save</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
