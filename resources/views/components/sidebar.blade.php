<!-- Sidebar Section -->
<aside class="w-96 md:w-1/3  flex flex-col items-center px-3">



  <div class="w-full bg-white shadow flex flex-col my-4 p-6">
    <h3 class="text-xl font-semibold mb-3">Categories
    </h3>
    @foreach($categories as $category)
    <a href="{{route('by-category', $category)}}" class="text-semibold block py-2 px-3 rounded {{ request('category')?->slug === $category->slug
                ? 'bg-blue-600 text-white' :  ''}}">
      {{$category->title}} ({{$category->total}})
    </a>
    @endforeach
  </div>


  <div class="w-full bg-white flex flex-col my-4 p-6 shadow-lg rounded">
    <img class="w-32 h-32 rounded-full mx-auto" src=" {{ \App\Models\TextWidget::getImage('about-us-sidebar') }}" alt="Geoffroy OTEGBEYE" class="aspect-[4/3] object-contain">

    <p class="text-xl font-semibold pb-5">
      {{ \App\Models\TextWidget::getTitle('about-us-sidebar') }}
    </p>

    {!! \App\Models\TextWidget::getContent('about-us-sidebar') !!}

    <a href="{{route('portfolio')}}" class="w-full bg-[#0c7187] text-white font-bold text-sm uppercase rounded hover:bg-[#015466] flex items-center justify-center px-2 py-3 mt-4">
      Apprendre à mieux me connaître
    </a>
  </div>

  <!-- <div class="w-full bg-white shadow flex flex-col my-4 p-6">
    <p class="text-xl font-semibold pb-5">Instagram</p>
    <div class="grid grid-cols-3 gap-3">
      <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
      <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
      <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
      <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
      <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
      <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
      <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
      <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
      <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
    </div>
    <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
      <i class="fab fa-instagram mr-2"></i> Follow @dgrzyb
    </a>
    </div> -->

</aside>