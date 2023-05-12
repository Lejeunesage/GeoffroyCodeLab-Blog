<article class="bg-white    flex flex-col  lg:flex-row  shadow-lg my-4">
    <!-- Article Image -->
    <a href="{{ route('view', $post) }}" class="hover:opacity-75 lg:w-1/2">
        <img src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}" class="aspect-[4/3] object-contain">
    </a>
    <div class="bg-white flex flex-col justify-start p-6 lg:w-1/2">
        <div class="flex gap-4">
            @foreach ($post->categories as $category)
                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                    {{ $category->title }}
                </a>
            @endforeach
        </div>
        <a href="{{ route('view', $post) }}" class="text-xl font-bold hover:text-gray-700 pb-4">
            {{ $post->title }}
        </a>

        <p href="#" class="text-sm pb-3">
            Par <a href="{{ route('view', $post) }}"
                class="font-semibold hover:text-gray-800">{{ $post->user->name }}</a>, Publier le
            {{ $post->getFormattedDate() }} | {{ $post->human_read_time }}
        </p>

        <a href="{{ route('view', $post) }}" class="pb-6">
            {{ html_entity_decode($post->shortBody()) }}
        </a>
        <a href="{{ route('view', $post) }}" class="uppercase text-gray-800 hover:text-black">Continuer à lire <i
                class="fas fa-arrow-right"></i></a>
    </div>
</article>
