<x-app-layout  :meta-title="'GeoffroyCodeLab Blog - ' . $category->title"
    :meta-description="'Posts filtrés par la catégorie ' . $category->title">
    <div class="  flex flex-wrap py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3  px-3">
            <div class=" flex flex-col items-center">
                @foreach($posts as $post)
                    <x-post-item :post="$post"/>
                @endforeach
            </div>
           
            <!-- Pagination -->
            {{$posts->links()}}
        </section>

        <!-- Sidebar Section -->
        <x-sidebar />

    </div>
</x-app-layout>