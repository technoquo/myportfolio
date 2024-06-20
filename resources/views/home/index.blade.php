<x-layout :seo="$seo" :page="$page" :config="$config">


    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    👋, {{ $config->intro }}</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    {{ $config->intro_desc }} </p>

            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
            </div>

        </div>
        <div class="px-4 py-8 mx-auto">
            <blockquote class="text-xl italic font-semibold text-left text-gray-900 dark:text-white mt-5">
                <p>"{{ $config->phrase }}."</p>
            </blockquote>
        </div>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                {{ $config->skills }}</h1>
        </div>
        <div class="grid md:grid-cols-3 grid-cols-1 gap-4 mx-auto">

            @foreach ($skills as $skill)
                <div class="m-auto"><!-- {{ $skill->name }} -->
                    <div
                        class="block max-w-sm p-6 bg-white border border-transparentborder-gray-200 rounded-lg shadow-inner hover:border-blue-600  dark:bg-gray-800  hover:bg-gray-100 dark:hover:bg-slate-700 transition-all">

                        {!! $skill->svg !!}
                        <h3
                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center mt-5 uppercase">
                            {{ $skill->name }}
                        </h3>
                    </div>
                </div>
            @endforeach



        </div>

    </section>

</x-layout>
