<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Journey | @yield('title')</title>
    @vite('resources/css/app.css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
</head>

<body>
    <div class="flex flex-row h-full relative">
        <aside
            class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700 fixed top-0 left-0 z-40">
            <a href="/" class="mx-auto">
                <img class="w-auto h-6 sm:h-auto" src="{{ asset('/Logo.png') }}" alt="">
            </a>

            <div class="flex flex-col items-center mt-6 -mx-2 relative max-w-xs overflow-hidden bg-cover bg-no-repeat"
                data-te-ripple-init data-te-ripple-color="light">
                <a href="/account">
                    <img class="object-cover w-24 h-24 mx-2 rounded-full"
                        src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
                        alt="avatar">
                    <div
                        class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.2)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                    </div>
                    <h4 class="mx-2 mt-2 font-bold text-xl text-slate-700 "> {{ Auth::user()->username }}</h4>
                </a>
            </div>

            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav>
                    <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-lg dark:bg-gray-800 dark:text-gray-200"
                        href="/">
                        <img class="object-cover w-auto h-auto mx-2" src="{{ asset('/home.png') }}" alt="">
                        <span class="mx-4 font-medium">Home</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                        href="/mountain">
                        <img class="object-cover w-auto h-auto mx-2" src="{{ asset('/mountain.png') }}" alt="">
                        <span class="font-medium">Mountain</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                        href="/create">
                        <img class="object-cover w-auto h-auto mx-2" src="{{ asset('/create.png') }}" alt="">
                        <span class="mx-2 font-medium">Create</span>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                        href="/logout">
                        <img class="object-cover w-auto h-auto mx-2" src="{{ asset('/logout.png') }}" alt="">
                        <span class="mx-2 font-medium">Logout</span>
                    </a>
                </nav>
            </div>
        </aside>
        <div class="sm:ml-24">
            <div class="px-16 py-4 text-gray-700 bg-light-200 h-screen w-screen">
                <!-- Content -->
                @yield('content')
            </div>
        </div>
    </div>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> --}}
</body>

</html>
