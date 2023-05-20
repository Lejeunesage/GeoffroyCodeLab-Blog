<article class="bg-white flex flex-col justify-center items-center lg:flex-row border shadow-xl my-4">
    <!-- Article Image -->
    <a href="{{ route('view', $post) }}" class=" lg:w-1/2">
        <img src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}" class="aspect-[5/3] object-contain">
    </a>
    <div class="bg-white flex flex-col justify-start p-6 lg:w-1/2">
        {{-- <div class="flex gap-4">
            @foreach ($post->categories as $category)
                <a href="#" class="text-[#0c7187] text-sm font-bold uppercase ">
                    {{ $category->title }}
                </a>
            @endforeach
        </div> --}}
        <a href="{{ route('view', $post) }}" class="text-xl font-bold hover:text-gray-700 mb-4">
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
        <div class="flex justify-end ">
            <button class=" bg-[#0c7187] p-2 rounded-2xl ">
                <i class="fas fa-arrow-right text-white"></i>
                <a href="{{ route('view', $post) }}" class=" text-white ">Continuer à lire </a>
            </button>
        </div>
    </div>
</article>
