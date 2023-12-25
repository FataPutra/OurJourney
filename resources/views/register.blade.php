<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Journey | Sign Up</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- component -->
    <div class="bg-gray-100 flex justify-center items-center h-screen">
        <!-- Left: Image -->
        <div class="w-1/2 h-screen hidden lg:block">
            <img class="w-auto sm:h-auto mt-10 fixed" src="{{ asset('/Logo.png') }}" alt="">
            <img src="{{ asset('/signup.png') }}" alt="Placeholder Image" class="object-cover w-full h-full">
        </div>
        <!-- Right: Login Form -->
        <div class="lg:p-48 md:p-52 sm:20 p-8 w-full lg:w-1/2">
            <h1 class="text-4xl font-bold mb-4"> Create your Account</h1>
            <h2 class="mb-4 text-lg font-semibold"> Come on Join Us !!</h2>
            @if ($errors->any())
                <div role="alert mt-2 mb-2">
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2 ">
                        Danger
                    </div>
                    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <form action="user" method="POST">
                @csrf
                <!-- Username Input -->
                <div class="mb-4">
                    <label for="username" class="block text-gray-600 mb-2">Username</label>
                    <input type="text" id="username" name="username"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off" placeholder="Username">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-600 mb-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off" placeholder="email@email.com">
                </div>

                <!-- Password Input -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-600 mb-2">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off" placeholder="********">
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-600 mb-2">Repeat Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500"
                        autocomplete="off" placeholder="********">
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
                    class="bg-teal-600 hover:bg-teal-800 text-white font-semibold rounded-md py-2 px-4 w-full">Sign
                    Up</button>
            </form>
            <!-- Sign up  Link -->
            <div class="mt-6 text-cyan-700 text-center">
                <a href="/login" class="hover:underline">Login</a>
            </div>
        </div>
    </div>
</body>

</html>
