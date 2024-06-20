<x-layout :seo="$seo" :page="$page">

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                    @if (session('locale') == 'en')
                        What I do for my clients: Accessible digital experiences.
                    @else
                        Lo que hago por mis clientes: Experiencias digitales accesibles.
                    @endif
                </h1>
            </div>

            <div class="text-2xl">

                @foreach ($services as $service)
                    <h2>
                        <div
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-800 border gap-3 bg-gray-50 dark:bg-gray-800">
                            <span class="font-bold dark:text-white">

                                {{ $service->{'subtitle_' . session('locale')} }}
                            </span>

                        </div>
                    </h2>
                    <div>
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">
                                {{ $service->{'description_' . session('locale')} }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
</x-layout>
