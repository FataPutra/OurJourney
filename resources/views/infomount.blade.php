@extends('layouts.mainlayout')

@section('title', 'Mountain Information')

@section('content')
    <!-- component -->
    <!-- component -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div
        class="relative flex items-center justify-center bg-center sm:px-6 lg:px-8 bg-no-repeat bg-cover relative items-center">
        <div class="max-w-7xl w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
            <div class="grid  gap-8 grid-cols-1">
                <div class="flex flex-col ">
                    <div class="flex flex-col sm:flex-row items-center">
                        <h2 class="font-bold text-xl text-black mr-auto">Mountain Information</h2>
                    </div>
                    <div class="mt-2">
                        <div class="form">
                            <div class="md:space-y-2 mb-3 mt-2">
                                <label class="text-md font-semibold text-gray-600 py-2">Mountain 1</label>
                                <div class="flex items-center">
                                    <div class="w-72 h-86 mr-4 flex-none rounded-xl border overflow-hidden">
                                        <img class="w-full h-full mr-4 object-cover" src="{{ asset('/bg.jpg') }}"
                                            alt="Avatar Upload">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
                    <link rel="stylesheet"
                        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

                    <section>
                        <div class="w-full mb-12 xl:mb-0 mx-auto mt-5">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-grey w-full mb-6 shadow-lg rounded-2xl ">
                                <div class="block w-full overflow-x-auto rounded-2xl">
                                    <table class="items-center bg-gray-100 w-full border-collapse table-fixed">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="px-6 bg-black text-white align-middle border border-solid border-blueGray-100 py-3 text-bold uppercase border-l-0 border-r-0 font-semibold text-left">
                                                    Dificulty Level
                                                </th>
                                                <th
                                                    class="px-6 bg-black text-white align-middle border border-solid border-blueGray-100 py-3 text-bold uppercase border-l-0 border-r-0  font-semibold text-left">
                                                    Routes
                                                </th>
                                                <th
                                                    class="px-6 bg-black text-white align-middle border border-solid border-blueGray-100 py-3 text-bold uppercase border-l-0 border-r-0 font-semibold text-left">
                                                    Safety Tips
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="divide-y divide-gray-300 divide-x">
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                                    Beginner
                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                                    4,569
                                                </td>
                                                <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-md p-4 ">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem
                                                    eius
                                                    nesciunt, aliquid alias vel eligendi? Ipsum fugit aut, culpa sunt
                                                    consequuntur quibusdam, vel optio autem, ipsa officia neque
                                                    reiciendis
                                                    quas.
                                                </td>
                                            </tr>
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4 text-left text-blueGray-700">
                                                    Intermediate
                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                                    3,985
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md p-4">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur
                                                    suscipit ex molestiae id. Enim voluptates similique perferendis quod
                                                    blanditiis eos, asperiores animi sit fugiat modi ab assumenda iure
                                                    nobis? Aliquam!
                                                </td>
                                            </tr>
                                            <tr>
                                                <th
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4 text-left text-blueGray-700">
                                                    Advanced
                                                </th>
                                                <td
                                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                                    3,513
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md p-4">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quis
                                                    voluptatum praesentium debitis, odio officia delectus aliquid, sit
                                                    quo
                                                    iure ipsa illum nam sint maxime dignissimos? Quos sed vel velit!
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="mt-5 ml-5 text-left md:space-x-3 md:block flex flex-col-reverse">
                                <button
                                    class="mb-2 md:mb-0 bg-gray-700 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-gray-300"><a
                                        href="/editmountain">Edit</a></button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>

@endsection
