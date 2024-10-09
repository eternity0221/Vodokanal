@extends("components.layout.RootLayout", ['title'=>'О нас'])
@section("layout")
    <div class="w-screen h-screen overflow-hidden relative before:block before:absolute before:bg-black before:h-full before:w-full before:top-0 before:left-0 before:z-10 before:opacity-30">
        <img src="{{ asset('assets/images/img/1.webp') }}" class="w-full absolute top-0 left-0 min-h-full ob" alt="">
        <div class="relative z-20 max-w-screen-lg mx-auto grid grid-cols-12 h-full items-center">
            <div class="col-span-6">
                <h1 class="text-white font-extrabold text-5xl mb-8" data-aos="fade-up" data-aos-duration="1400">История компании</h1>
                <p class="text-stone-100 text-base" data-aos="fade-up" data-aos-duration="1400">
                    Узнайте об истории и развитии нашего водоканала, о том, как мы стали одним из ведущих поставщиков воды в регионе.
                </p>
            </div>
        </div>
    </div>
    <div class="bg-white py-20">
        <div class="max-w-screen-lg mx-auto flex justify-between items-center">
            <div class="max-w-xl">
                <h2 class="font-black text-sky-950 text-3xl mb-4" data-aos="fade-left" data-aos-duration="1400">Команда профессионалов</h2>
                <p class="text-base text-sky-950" data-aos="fade-right" data-aos-duration="1400">Познакомьтесь с нашей высококвалифицированной командой специалистов, которые работают над обеспечением надежного и качественного водоснабжения.</p>
            </div>
        </div>
    </div>
    <div class="py-12 relative overflow-hidden bg-gray-900">
        <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
            <div class="w-full flex flex-col items-end pr-16">
                <div class="h-full mt-auto overflow-hidden relative">
                    <img src="{{ asset('assets/images/img/2.webp') }}" class="h-full w-full object-contain" alt="" data-aos="fade-right" data-aos-duration="1400">
                </div>
            </div>

            <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-blue-600 before:top-0 before:left-0" data-aos="fade-left" data-aos-duration="1400">
                <div class="relative z-20 pl-12">
                    <h2 class="text-gray-900 font-black text-5xl leading-snug mb-10" data-aos="fade-up" data-aos-duration="1400">Наши ценности и принципы</h2>
                    <p class="text-white text-sm" data-aos="fade-up" data-aos-duration="1400">
                        Узнайте о том, какие ценности и принципы лежат в основе нашей деятельности, и как мы стремимся улучшить качество жизни наших клиентов.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4 relative overflow-hidden bg-white">
        <div class="grid grid-cols-2 max-w-screen-lg mx-auto">


            <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-blue-600 before:top-0 before:right-0" data-aos="fade-right" data-aos-duration="1400">
                <div class="relative z-20 pl-12">
                    <h2 class="text-white font-black text-5xl leading-snug mb-10" data-aos="fade-up" data-aos-duration="1400">Инновационные технологии</h2>
                    <p class="text-sky-950 text-sm" data-aos="fade-up" data-aos-duration="1400">
                        Узнайте о том, как мы используем современные технологии и оборудование для обеспечения стабильного и эффективного водоснабжения.
                    </p>
                </div>
            </div>
            <div class="w-full flex flex-col pl-16">
                <div class="h-full mt-auto overflow-hidden relative">
                    <img src="{{ asset('assets/images/img/3.jpg') }}" class="h-full w-full object-contain" alt="" data-aos="fade-left" data-aos-duration="1400">
                </div>
            </div>

        </div>
    </div>

    <div class="py-12 relative overflow-hidden dark:bg-gray-900">
        <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
            <div class="w-full flex flex-col items-end pr-16">
                <div class="h-full mt-auto overflow-hidden relative">
                    <img src="{{ asset('assets/images/img/4.jpg') }}" class="h-full w-full object-contain" alt="" data-aos="fade-right" data-aos-duration="1400">
                </div>
            </div>

            <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-white before:top-0 before:left-0" data-aos="fade-left" data-aos-duration="1400">
                <div class="relative z-20 pl-12">
                    <h2 class="text-gray-900 font-black text-5xl leading-snug mb-10" data-aos="fade-up" data-aos-duration="1400">Наш вклад в экологию</h2>
                    <p class="text-blue-700 text-sm" data-aos="fade-up" data-aos-duration="1400">
                        Узнайте о наших усилиях по снижению воздействия на окружающую среду и наши проекты по экологической ответственности в области водоснабжения.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <img class=" w-full" src="{{ asset('assets/images/img/image-about.png') }}">

@endsection

