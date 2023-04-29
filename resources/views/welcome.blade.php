    <x-app-layout  meta-title="Le blog personnel de Fifamin sur les tutoriels de programmation"
    meta-description="Apprenez à créer une application perfornante">
        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">


            @foreach($posts as $post)
            <x-post-item :post=$post>

            </x-post-item>
            @endforeach


            
            <!-- Pagination -->
            {{$posts->links()}}
         


            <!-- About section -->
            <div class="hidden md:flex w-full flex flex-col lg:gap-0 gap-5 text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
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
        </div>

        </section>


        <x-sidebar>

        </x-sidebar>
    </x-app-layout>