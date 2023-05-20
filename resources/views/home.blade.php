    <x-app-layout meta-title="Le blog personnel de Fifamin sur les tutoriels de programmation"
        meta-description="Apprenez à créer une application perfornante">
        <div class="   py-6">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <!-- Latest Post -->
                <div class="col-span-2">
                    <h2 class="text-lg sm:text-xl font-bold text-[#d97706] uppercase pb-1 border-b mb-3">
                        Dernier Article
                    </h2>

                    @if ($latestPost)
                        <x-post-item :post="$latestPost" />
                    @endif
                </div>

                <!-- Popular 3 post -->
                <div>
                    <h2 class="text-lg sm:text-xl font-bold text-[#d97706] uppercase pb-1 border-b mb-3">
                        Articles Populaires
                    </h2>
                    @foreach ($popularPosts as $post)
                        <div class="grid grid-cols-4 gap-2 mb-4">
                            <a href="{{ route('view', $post) }}" class="pt-1">
                                <img src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}" />
                            </a>
                            <div class="col-span-3">
                                <a href="{{ route('view', $post) }}">
                                    <h3 class="text-sm  font-bold whitespace-nowrap truncate">{{ $post->title }}</h3>
                                </a>

                                <div class="text-xs">
                                    {{ html_entity_decode($post->shortBody(10)) }}
                                </div>
                                <div class="flex gap-4">
                                    @foreach ($post->categories as $category)
                                        <a href="#"
                                            class="text-[#0c7187] p-1 rounded text-xs font-bold uppercase">
                                            {{ $category->title }}
                                        </a>
                                    @endforeach
                                </div>
                                <a href="{{ route('view', $post) }}"
                                    class="text-xs uppercase text-gray-800 hover:text-black">continuer la lecture
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex gap-5">
                 <!-- Latest Categories -->


                 <div class="mb-8 max-w-[50%]"">
                    @foreach ($categories as $category)
                <div>
                    <h2
                        class="text-lg text-[#d97706] sm:text-xl font-bold  uppercase pb-1 border-b mb-3">

                        <a href="{{ route('by-category', $category) }}">
                            {{ $category->title }}
                            <i class="fas fa-arrow-down"></i>
                        </a>
                    </h2>

                    <div class="mb-6">
                        <div class="flex flex-col gap-3">
                            @foreach ($category->publishedPosts()->limit(3)->get() as $post)
                                <x-post-item :post="$post" :show-author="false" />
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
                </div>

                <!-- Recommended posts -->
                <div class="mb-8 max-w-[50%]">
                    <h2 class="text-lg sm:text-xl font-bold text-[#d97706] uppercase pb-1 border-b mb-3">
                        Articles Recommandés
                    </h2>

                    <div class="flex flex-col gap-3">
                        @foreach ($recommendedPosts as $post)
                            <x-post-item :post="$post" :show-author="false" />
                        @endforeach
                    </div>
                </div>

               
            </div>

        </div>


        {{-- <!-- About section -->
        <div
        class="hidden md:flex w-full flex flex-col lg:gap-0 gap-5 text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
        <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
            <img src=" {{ \App\Models\TextWidget::getImage('about-us-sidebar') }}" alt="Geoffroy OTEGBEYE"
                class="rounded-full shadow h-32 w-32">
        </div>
        <div class="flex-1 flex flex-col justify-center md:justify-start">
            <p class="font-semibold text-2xl">
                {{ \App\Models\TextWidget::getTitle('about-us-sidebar') }}
            </p>
            {!! \App\Models\TextWidget::getContent('about-us-sidebar') !!}
            <div
                class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4">
                <a class="pl-4" href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a class="pl-4" href="#">
                    <i class="fab fa-github"></i>
                </a>
                <a class="pl-4" href="#">
                    <i class="fab fa-gitlab"></i>
                </a>
                <a class="pl-4" href="#">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div> --}}
        {{-- <x-sidebar >

    </x-sidebar> --}}
    </x-app-layout>
