@extends('layouts.mainlayout')

@section('title', Auth::user()->username)

@section('content')
    <div class="container mx-36 w-3/4">
        <div class="container mx-auto mt-10">
            <div class="mb-6 flex items-center">
                <div>
                    <img src="{{ asset('photos/' . $user->profile->photos) }}" class="mr-4 h-36 mb-6 rounded-full"
                        alt="avatar" loading="lazy" />
                    <p class="font-bold text-xl text-black">{{ $user->username }}</p>
                    <p class="text-md text-black font-bold mt-2"> {{ $user->profile->fullname }}</p>
                    <p class="text-sm mt-2"> {{ $user->profile->bio }}</p>
                    <a href="/editprofile">
                        <button
                            class="mt-4 mb-2 md:mb-0 bg-slate-300 px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-black-600 rounded-full hover:shadow-lg hover:bg-slate-100">
                            Edit Profile </button>
                    </a>
                    <div class="h-px mt-4 bg-gray-200 border-0 dark:bg-gray-700 w-screen"></div>
                </div>
            </div>
        </div>

        <!-- Container for demo purpose -->
        <div class="container mr-24 mx-auto">
            @foreach ($user->posts as $post)
                <!-- Section: Design Block -->

                <div class="mb-6 flex items-cente3r">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (23).jpg" class="mr-2 h-8 rounded-full"
                        alt="avatar" loading="lazy" />
                    <div>
                        <a href="/account" class="font-medium text-black">{{ $post->user->username }}</a>
                        <span class="text-sm bold"> {{ $post->created_at }}</span>
                    </div>
                </div>

                <section class="mb-32">
                    <img src="{{ asset('images/' . $post->images) }}"
                        class="mb-6 rounded-lg shadow-lg dark:shadow-black/20 object-fill h-96 w-1/2" alt="image" />
                    <p class="max-w-screen-lg">
                        {{ $post->caption }}
                    </p>

                    <div class="flex relative max-w-xs overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init
                        data-te-ripple-color="light">
                        <img src="{{ asset('/comment.png') }}" class="mt-2 h-6 w-6 max-w-xs" alt="image" />
                        <a href="/comment">
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.5)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                        <div class="ml-4 relative max-w-xs overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init
                            data-te-ripple-color="light">
                            <img src="{{ asset('/edit.png') }}" class="mt-2 h-6 w-6 max-w-xs" alt="image" />
                            <a href="/editpost">
                                <div
                                    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.5)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mt-4 mb-6 flex items-center bg-gray">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (23).jpg" class="mr-2 h-6 rounded-full"
                            alt="avatar" loading="lazy" />
                        <div>
                            <a href="/account" class="font-xs text-black font-bold">Anna Maria Doe</a>
                            <br>
                            <div class="max-w-xl">
                                <span class="text-sm w-max"> Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="h-px bg-gray-200 border-0 dark:bg-gray-700 w-screen"></div>
                </section>
            @endforeach
            <!-- Section: Design Block -->
            <!-- Container for demo purpose -->
        </div>
    @endsection
