@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')
    <!-- Container for demo purpose -->
    <div class="container mx-36 w-3/4">
        @foreach ($users as $data)
            @if ($data->posts->isNotEmpty())
                @foreach ($data->posts as $post)
                    <!-- Section: Design Block -->
                    <div class="mb-6 flex items-center">
                        <img src="{{ asset('photos/' . $data->profile->photos) }}" class="mr-2 h-8 rounded-full" alt="avatar"
                            loading="lazy" />
                        <div>
                            <a href="/account/{{ $data->id }}"
                                class="text-lg font-bold text-black">{{ $data->username }}</a>
                            <span class="text-sm bold">{{ $post->created_at }}</span>
                        </div>
                    </div>

                    <section class="mb-10">
                        <img src="{{ asset('images/' . $post->images) }}"
                            class="mb-6 rounded-lg shadow-lg dark:shadow-black/20 object-fill h-96 w-1/2" alt="image" />
                        <p class="max-w-screen-lg">
                            {{ $post->caption }}
                        </p>

                        <div class="relative max-w-xs overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init
                            data-te-ripple-color="light">
                            <img src="{{ asset('/comment.png') }}" class="mt-2 h-6 w-6 max-w-xs" alt="image" />
                            <a href="/comment">
                                <div
                                    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsl(0,0%,98.4%,0.5)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                                </div>
                            </a>
                        </div>
                        <div class="mt-4 mb-6 flex items-center bg-gray">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (23).jpg"
                                class="mr-2 h-6 rounded-full" alt="avatar" loading="lazy" />
                            <div>
                                <a href="/account" class="text-sm text-black font-bold">Anna Maria Doe</a>
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
            @endif
        @endforeach
        <!-- Section: Design Block -->
        <!-- Container for demo purpose -->
    </div>
@endsection
