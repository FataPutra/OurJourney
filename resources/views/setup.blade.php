<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Journey | Setup</title>
    @vite('resources/css/app.css')
</head>

<body>

    <!-- component -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div class="relative min-h-screen flex items-center justify-center bg-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
        style="background-image: url('/bg.jpg');">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
        <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
            <div class="grid  gap-8 grid-cols-1">
                <div class="flex flex-col ">
                    <div class="flex flex-col sm:flex-row items-center">
                        <img class="w-auto sm:h-auto mb-5" src="{{ asset('/Logo.png') }}" alt="">
                        <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                    </div>
                    <div class="mt-5">
                        <div class="form">
                            <form action="#" method="POST">
                                <div class="md:space-y-2 mb-3">
                                    <label class="text-xl font-bold text-black py-2">Welcome !!</label>
                                    <div class="flex items-center py-6">
                                        <div class="w-24 h-24 mr-4 flex-none rounded-full border overflow-hidden">
                                            <img class="w-24 h-24 mr-4 object-cover" src="{{ asset('/pp.jpeg') }}"
                                                alt="Avatar Upload">
                                        </div>
                                        <label class="cursor-pointer ">
                                            <span
                                                class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-cyan-400 hover:bg-cyan-700 hover:shadow-lg">Add
                                                Photo Profile</span>
                                            <input type="file" class="hidden" :multiple="multiple"
                                                :accept="accept">
                                        </label>
                                    </div>
                                </div>
                                <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                    <div class="mb-3 space-y-2 w-full text-xs">
                                        <label class="font-semibold text-gray-600 py-2">Full Name </label>
                                        <input placeholder="Full Name"
                                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                            required="required" type="text" name="integration[shop_name]"
                                            id="integration_shop_name">
                                        <p class="text-red text-xs hidden">Please fill out this field.</p>
                                    </div>
                                </div>
                                <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                    <label class="font-semibold text-gray-600 py-2">Bio</label>
                                    <textarea required="" name="message" id=""
                                        class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                                        placeholder="Enter your bio" spellcheck="false"></textarea>
                                </div>
                                <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                    <button
                                        class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                                        Cancel </button>
                                    <button
                                        class="mb-2 md:mb-0 bg-cyan-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-cyan-700">Save</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>
