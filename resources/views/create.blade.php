@extends('layouts.mainlayout')

@section('title', 'Create')

@section('content')
    <!-- component -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div
        class="relative min-h-screen flex items-center justify-center bg-center sm:px-6 lg:px-8 bg-no-repeat bg-cover relative items-center">
        <div class="max-w-7xl w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
            <div class="grid  gap-8 grid-cols-1">
                <div class="flex flex-col ">
                    <div class="flex flex-col sm:flex-row items-center">
                        <h1 class="font-bold text-xl mr-auto">Create New Post</h1>
                    </div>
                    <div class="mb-6 mt-5 flex items-center">
                        <img src="{{ asset('photos/' . Auth::user()->profile->photos) }}" class="mr-2 h-16 rounded-full"
                            alt="avatar" loading="lazy" />
                        <div>
                            <p class="font-medium text-black">{{ Auth::user()->username }}</p>
                        </div>
                    </div>
                    <div class="mt-2">
                        <form action="post" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form">
                                <div class="md:space-y-2 mb-3">
                                    <label class="text-md font-semibold text-black py-2">Upload Images</label>
                                    <div class="flex items-center">
                                        <div class="w-1/2 h-96 mr-4 flex-none rounded-xl border overflow-hidden">
                                            <img id="imagePreview" class="w-full h-full mr-4 object-cover"
                                                src="{{ asset('/bg.jpg') }}" alt="Avatar Upload">
                                        </div>
                                        <label class="cursor-pointer ">
                                            <span
                                                class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-green-400 hover:bg-green-500 hover:shadow-lg">Browse</span>
                                            <input type="file" class="hidden" :multiple="multiple" name="images"
                                                :accept="accept" onchange="previewImage(event)">
                                        </label>
                                    </div>
                                </div>
                                <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                    <label class="font-semibold text-black py-2 text-lg">Caption</label>
                                    <textarea required="" id="caption" name="caption"
                                        class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                                        placeholder="Caption" spellcheck="false"></textarea>
                                </div>
                            </div>

                            <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">

                                <button type="reset"
                                    class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                                    <a href="/">Cancel </a></button>
                                <button type="submit"
                                    class="mb-2 md:mb-0 bg-blue-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-blue-500">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
