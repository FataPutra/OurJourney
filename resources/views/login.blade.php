<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Journey | Login</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="vh-100 d-flex justify content-center align-items-center flex-column">
        @if (Session::has('status'))
            <div class="bg-green-900 text-center py-4 lg:px-4">
                <div class="p-2 bg-green-800 items-center text-green-100 leading-none lg:rounded-full flex lg:inline-flex"
                    role="alert">
                    <span
                        class="flex rounded-full bg-green-500 uppercase px-2 py-1 text-xs font-bold mr-3">Helloo</span>
                    <span class="font-semibold mr-2 text-left flex-auto">{{ Session::get('message') }}</span>
                    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                    </svg>
                </div>
            </div>
        @endif
    </div>
    <!-- component -->
    <div class="bg-gray-100 flex justify-center items-center h-screen">
        <!-- Left: Image -->
        <div class="w-1/2 h-screen hidden lg:block ">
            <img src="{{ asset('/login.jpg') }}" alt="Placeholder Image" class="object-cover auto h-auto">
        </div>
        <!-- Right: Login Form -->
        <div class="lg:p-48 md:p-52 sm:20 p-8 w-full lg:w-1/2">
            <img class="w-auto sm:h-auto mb-20" src="{{ asset('/Logo.png') }}" alt="">
            <h1 class="text-xl font-semibold mb-4">Welcome !!!</h1>
            <h1 class="text-2xl font-bold mb-6">Login to Your Account</h1>
            @if (Session::has('statuss'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-2 mb-2"
                    role="alert">
                    <strong class="font-bold">{{ Session::get('message') }}</strong>
                    <span class="block sm:inline"></span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            @endif
            <form action="" method="POST">
                @csrf
                <!-- Username Input -->
                <div class="mb-4">
                    <label for="username" class="block text-gray-600">Username</label>
                    <input type="text" id="username" name="username"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        required autocomplete="off">
                </div>
                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-600">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        required autocomplete="off">
                </div>

                <!-- Login Button -->
                <button type="submit"
                    class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold rounded-md py-2 px-4 w-full">Login</button>
            </form>
            <!-- Sign up  Link -->
            <div class="mt-6 text-slate-500 text-center">
                <a href="/signup" class="hover:underline">Sign up Here</a>
            </div>
        </div>
    </div>
</body>

</html>
