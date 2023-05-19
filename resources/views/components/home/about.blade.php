<!-- ====== About Section Start -->
<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
      <div class="flex flex-wrap justify-between items-center -mx-4">
        <div class="w-full lg:w-6/12 px-4">
          <div class="flex items-center -mx-3 sm:-mx-4">
            <div class="w-full xl:w-1/2 px-3 sm:px-4">
              <div class="py-3 sm:py-4">
                <img
                  src="{{ url('/img/me1.jpg') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
              </div>
              <div class="py-3 sm:py-4">
                <img
                  src="{{ url('/img/me1.jpg') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
              </div>
            </div>
            <div class="w-full xl:w-1/2 px-3 sm:px-4">
              <div class="my-4 relative z-10">
                <img
                  src="{{ url('/img/me1.jpg') }}"
                  alt=""
                  class="rounded-2xl w-full"
                />
                <x-about-dots></x-about-dots>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
          <div class="mt-10 lg:mt-0">
            <span class="font-semibold text-lg text-primary mb-2 block">
               <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                   "Tout est réalisable avec beaucoup de travail"
               </blockquote>
            </span>
            <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
              A propos de moi
            </h2>
            <p class="text-base dark:text-gray-400 mb-8">
              En qualité de développeur d'applications web, j'exerce mes compétences sur une variété de projets technologiques. <br /> Malgré cela, je perçois régulièrement cette sensation d'être un développeur novice, à peine initié aux arcanes de la programmation. <br />
            </p>
            <p class="text-base dark:text-gray-400 mb-8">
             J'ai décidé de créer une chaîne YouTube et de partager mes connaissances. Ma chaîne est principalement axée sur
              <span class="text-amber-500 font-bold">PHP</span> and <span class="text-amber-500 font-bold">JavaScript</span>. <br />
              Mon contenu est principalement axé sur des exemples pratiques de tutoriel et des projets. <br />
            </p>
            <x-button-link href="https://www.youtube.com/channel/UC4o6gBv71UMlwlQSLzm8blw/featured" variant="red" target="_blank">
              Voir ma chaîne
            </x-button-link>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====== About Section End -->