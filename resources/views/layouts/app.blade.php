<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?: 'Fifamin Blog' }}</title>
    <meta name="author" content="Fifamin">
    <meta name="description" content="{{ $metaDescription }}">


    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
    </style>


    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 font-family-karla">

    <!-- Top Bar Nav -->
    <!-- <nav class="w-full py-4 bg-blue-800 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="#">Shop</a></li>
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="#">About</a></li>
                </ul>
            </nav>

            <div class="flex items-center text-lg no-underline text-white pr-6">
                <a class="" href="#">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

    </nav> -->

    <!-- Text Header -->
    <div class="fixed right-0 left-0 top-0">
        <header class="w-full  flex justify-between items-center px-10  bg-blue-800 shadow-md mx-auto">
            <div class="flex flex-col  justify-startitems-center">
                <a class="font-bold text-white  text-3xl" href="{{ route('home') }}">

                    {{ \App\Models\TextWidget::getTitle('header') }}
                </a>
                <span class="text-lg text-white">
                    {!! \App\Models\TextWidget::getContent('header') !!}
                </span>
            </div>
            <div class="flex sm:items-center  text-white">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'bg-blue-600 text-white' : '' }} rounded py-2 px-4 mx-2 hover:bg-blue-600 text-white hover:text-white">Accueil</a>
                <a href="#" class=" text-white hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2">Portfolio</a>

                <a href="{{ route('about-us') }}" class="{{ request()->routeIs('about-us') ? 'bg-blue-600 text-white' : '' }}   hover:bg-blue-600 hover:text-white text-white rounded py-2 px-4 mx-2">A
                    propos</a>


                <!-- Settings Dropdown -->
                @auth
                <div class="flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="hover:bg-blue-600 hover:text-white flex items-center rounded py-2 px-4 mx-2">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profil') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();" class="border-b">
                                    {{ __('Se déconnecter') }}
                                </x-dropdown-link>
                            </form>
                            @can('access-admin-panel')
                            <a href="/admin" class=" text-gray-800 text-[0.9rem] rounded py-3 px-2 mx-2">Panel Admin</a>
                            @endcan
                        </x-slot>
                    </x-dropdown>
                </div>
                @else
                <a href="{{route('login')}}" class="hover:bg-blue-600 text-white rounded py-2 px-4 mx-2">Se connecter</a>
                <a href="{{route('register')}}" class="hover:bg-blue-600  text-white rounded py-2 px-4 mx-2">S'inscrire</a>
                @endauth
            </div>
        </header>

        <!-- Topic Nav -->
        <nav class=" w-full   border-t border-b bg-gray-100" x-data="{ open: false }">
            <div class="block sm:hidden">
                <a href="#" class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center" @click="open = !open">
                    Sujets <i :class="open ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-2"></i>
                </a>

            </div>
            <div :class="open ? 'block' : 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
                <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">

                    {{-- <a href="{{route('home')}}" class="{{ request()->routeIs('home') ? 'bg-blue-600 text-white' : '' }} rounded py-2 px-4 mx-2 hover:bg-blue-600 hover:text-white">Accueil</a> --}}


                    @foreach ($categories as $category)
                    <a href="{{ route('by-category', $category) }}" class="hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2 {{ request('category')?->slug === $category->slug ? 'bg-blue-600 text-white' : '' }}">{{ $category->title }}</a>
                    @endforeach



                </div>
            </div>
        </nav>
    </div>


    <main>
        <div class="container mx-auto flex flex-wrap p-6 border">

            {{ $slot }}

        </div>
    </main>


    <footer class="w-full border-t bg-white pb-12">
        <!-- <div
            class="relative w-full flex items-center invisible md:visible md:pb-12"
            x-data="getCarouselData()"
        >
            <button
                class="absolute bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 ml-12"
                x-on:click="decrement()">
                &#8592;
            </button>
            <template x-for="image in images.slice(currentIndex, currentIndex + 6)" :key="images.indexOf(image)">
                <img class="w-1/6 hover:opacity-75" :src="image">
            </template>
            <button
                class="absolute right-0 bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 mr-12"
                x-on:click="increment()">
                &#8594;
            </button>
        </div> -->
        <div class="w-full container mx-auto flex flex-col items-center">
            <!-- <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                <a href="#" class="uppercase px-3">About Us</a>
                <a href="#" class="uppercase px-3">Privacy Policy</a>
                <a href="#" class="uppercase px-3">Terms & Conditions</a>
                <a href="#" class="uppercase px-3">Contact Us</a>
            </div> -->
            <div class="uppercase py-6">&copy; fifamin.com</div>
        </div>
    </footer>
    @livewireScripts
    <script>
        // function getCarouselData() {
        //     return {
        //         currentIndex: 0,
        //         images: [
        //             'https://source.unsplash.com/collection/1346951/800x800?sig=1',
        //             'https://source.unsplash.com/collection/1346951/800x800?sig=2',
        //             'https://source.unsplash.com/collection/1346951/800x800?sig=3',
        //             'https://source.unsplash.com/collection/1346951/800x800?sig=4',
        //             'https://source.unsplash.com/collection/1346951/800x800?sig=5',
        //             'https://source.unsplash.com/collection/1346951/800x800?sig=6',
        //             'https://source.unsplash.com/collection/1346951/800x800?sig=7',
        //             'https://source.unsplash.com/collection/1346951/800x800?sig=8',
        //             'https://source.unsplash.com/collection/1346951/800x800?sig=9',
        //         ],
        //         increment() {
        //             this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
        //         },
        //         decrement() {
        //             this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
        //         },
        //     }
        // }
    </script>

</body>

</html>