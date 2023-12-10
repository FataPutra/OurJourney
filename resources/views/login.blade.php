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
            <form action="#" method="POST">
                <!-- Username Input -->
                <div class="mb-4">
                    <label for="username" class="block text-gray-600">Username</label>
                    <input type="text" id="username" name="username"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off">
                </div>
                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-600">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off">
                </div>

                {{-- <!-- Remember Me Checkbox -->
            <div class="mb-4 flex items-center">
            <input type="checkbox" id="remember" name="remember" class="text-blue-500">
            <label for="remember" class="text-gray-600 ml-2">Remember Me</label>
            </div> --}}

                {{-- <!-- Forgot Password Link -->
            <div class="mb-6 text-blue-500">
            <a href="#" class="hover:underline">Forgot Password?</a>
            </div> --}}

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
