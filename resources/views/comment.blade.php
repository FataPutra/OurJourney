@extends('layouts.mainlayout')

@section('title', 'Comment')

@section('content')

    <!-- Container for demo purpose -->
    <div class="container my- mx-auto">
        <!-- Section: Design Block -->

        <div class="mb-6 flex items-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (23).jpg" class="mr-2 h-8 rounded-full" alt="avatar"
                loading="lazy" />
            <div>
                <a href="/account" class="font-medium text-black">Anna Maria Doe</a>
                <span class="text-sm bold"> 10 minutes a go </span>
            </div>
        </div>

        <section class="mb-32">
            <img src="{{ asset('/contoh.png') }}" class="mb-6 rounded-lg shadow-lg dark:shadow-black/20 object-fill"
                alt="image" />
            <p class="max-w-screen-lg">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi
                harum tempore cupiditate asperiores provident, itaque, quo ex iusto
                rerum voluptatum delectus corporis quisquam maxime a ipsam nisi Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Saepe impedit commodi dolores enim earum! Ipsam minus quo quasi accusamus dignissimos
                accusantium itaque ipsum, quibusdam impedit nobis inventore, unde est odit.
            </p>

            <div class="relative max-w-xs overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init
                data-te-ripple-color="light">
                <img src="{{ asset('/comment.png') }}" class="mt-2 h-6 w-6 max-w-xs" alt="image" />
                <a href="/account">
                    <div
                        class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.5)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                    </div>
                </a>
            </div>
            <div class="mt-4 mb-6 flex items-center bg-gray">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (23).jpg" class="mr-2 h-6 rounded-full"
                    alt="avatar" loading="lazy" />
                <div>
                    <a href="account" class="font-xs text-black font-bold">Anna Maria Doe</a>
                    <br>
                    <div class="max-w-xl">
                        <span class="text-sm w-max"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. </span>
                    </div>
                </div>
            </div>
            <!-- component -->

            <!-- comment form -->
            <form class="w-full max-w-xl bg-white rounded-lg px-2 pt-2">
                <div class="flex flex-wrap mx-3 mb-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (23).jpg" class="mr-2 h-6 rounded-full"
                        alt="avatar" loading="lazy" />
                    <a href="account" class="font-xs text-black font-bold">Anna Maria Doe</a>
                    <div class="w-full md:w-full px-3 mb-2 mt-2">
                        <textarea
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            name="body" placeholder='Add a comment ...' required></textarea>
                    </div>
                    <div class="w-full md:w-full flex items-start md:w-full px-3">
                        <div class="mr-1">
                            <input type='submit'
                                class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100"
                                value='Post Comment'>
                        </div>
                    </div>
            </form>
    </div>
    </section>
@endsection
