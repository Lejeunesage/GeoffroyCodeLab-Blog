<x-app-layout :meta-title="$post->meta_title ?: $post->title" :meta-description="$post->meta_description">




    <!-- Post Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75 bg-white">
                <img src="{{$post->getThumbnail()}}">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <div class="flex gap-4">
                    @foreach($post->categories as $category)
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                        {{$category->title}}
                    </a>
                    @endforeach
                </div>
                <h1 class="text-xl font-bold hover:text-gray-700 pb-4">
                    {{$post->title}}
                </h1>

                <p href="#" class="text-sm pb-3">
                    Par <a href="{{route('view', $post)}}" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, Publier le
                    {{$post->getFormattedDate()}}
                </p>
                <div>
                    {!!$post->body!!}
                </div>
            </div>

        </article>

        <div class="w-full flex pt-6">
            <div class="w-1/2">
                @if($prev)
                <a href="{{route('view', $prev)}}" class="block w-full bg-white shadow hover:shadow-md text-left p-6">
                    <p class="text-lg text-blue-800 font-bold flex items-center">
                        <i class="fas fa-arrow-left pr-1"></i>
                        Précédent
                    </p>
                    <p class="pt-2">{{\Illuminate\Support\Str::words($prev->title, 5)}}</p>
                </a>
                @endif
            </div>
            <div class="w-1/2">
                @if($next)
                <a href="{{route('view', $next)}}" class="block w-full bg-white shadow hover:shadow-md text-right p-6">
                    <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Suivant
                        <i class="fas fa-arrow-right pl-1"></i>
                    </p>
                    <p class="pt-2">
                        {{\Illuminate\Support\Str::words($next->title, 5)}}
                    </p>
                </a>
                @endif
            </div>
        </div>

        <!-- About section -->
        <div class="hidden md:flex w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6 gap-5  lg:gap-0">
            <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                <img src=" {{ \App\Models\TextWidget::getImage('about-us-sidebar') }}" alt="Geoffroy OTEGBEYE" class="rounded-full shadow h-32 w-32">
            </div>
            <div class="flex-1 flex flex-col justify-center md:justify-start">
                <p class="font-semibold text-2xl">
                    {{ \App\Models\TextWidget::getTitle('about-us-sidebar') }}
                </p>
                {!! \App\Models\TextWidget::getContent('about-us-sidebar') !!}
                <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4">
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

    </section>

    <x-sidebar>

    </x-sidebar>

</x-app-layout>