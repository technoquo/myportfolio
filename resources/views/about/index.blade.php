<x-layout :seo="$seo" :page="$page">
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16">
            <div class="px-4 sm:px-0">
                <h3 class="text-base font-semibold leading-7 text-gray-900 dark:text-white">
                    @if (session('locale') == 'en')
                        About Me
                    @else
                        Acerca de mi
                    @endif

                </h3>

            </div>
            <div class="mt-6 border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900  dark:text-white">
                            @if (session('locale') == 'en')
                                Full name
                            @else
                                Nombre completo
                            @endif
                        </dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0  dark:text-white">Leonel
                            López Borbón</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900  dark:text-white">
                            @if (session('locale') == 'en')
                                My position
                            @else
                                Mi cargo
                            @endif
                        </dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700  dark:text-white sm:col-span-2 sm:mt-0">
                            Backend/Frontend
                            Developer </dd>
                    </div>

                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900  dark:text-white">
                            @if (session('locale') == 'en')
                                About
                            @else
                                Sobre mi
                            @endif
                        </dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700  dark:text-white sm:col-span-2 sm:mt-0">

                            @if (session('locale') == 'en')
                                I have over 10 years of experience as a web developer, both backend and frontend. I have
                                worked on various projects for different clients and companies, acquiring skills in
                                multiple
                                programming languages through self-learning. I graduated from the Latin American
                                University
                                of Science and Technology in Costa Rica with a Bachelor's degree in Computer
                                Engineering.

                                I was born deaf, but thanks to web technologies such as email, chat, WhatsApp, and AI
                                tools
                                like ChatGPT, I have no issues communicating with clients. There are no digital barriers
                                for
                                me.

                                My strong skills are in Laravel, but I am also constantly learning new technologies like
                                Next.js and Vue.js. Feel free to contact me.
                            @else
                                Tengo más de 10 años de experiencia como desarrollador web, tanto en el backend como en
                                el frontend. He trabajado en diversos proyectos para diferentes clientes y empresas,
                                adquiriendo habilidades en múltiples lenguajes de programación a través del aprendizaje
                                autodidacta. Me gradué de la Universidad Latinoamericana de Ciencia y Tecnología en
                                Costa Rica con un bachiller en Ingeniería Informática.

                                Nací sordo, pero gracias a tecnologías web como el correo electrónico, chat, WhatsApp y
                                herramientas de inteligencia artificial como ChatGPT, no tengo problemas para
                                comunicarme con los clientes. No existen barreras digitales para mí.

                                Mis habilidades principales están en Laravel, pero también estoy constantemente
                                aprendiendo nuevas tecnologías como Next.js y Vue.js. No dudes en contactarme.
                            @endif



                        </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900  dark:text-white">
                            @if (session('locale') == 'en')
                                Language
                            @else
                                Idioma
                            @endif
                        </dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700  dark:text-white sm:col-span-2 sm:mt-0">
                            @if (session('locale') == 'en')
                                Spanish (native), English B1(write and read), LESCO (Lengua de Senas Costarricenses),
                                ASL
                                (American Sign Lenguage)
                            @else
                                Español (nativo), Inglés B1 (lectura y escritura), LESCO (Lengua de Señas
                                Costarricense), ASL (American Sign Language)
                            @endif
                        </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900  dark:text-white">
                            @if (session('locale') == 'en')
                                Attachment
                            @else
                                Adjunto
                            @endif
                        </dt>
                        <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                                <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                    @if (session('locale') == 'en')
                                        <div class="flex w-0 flex-1 items-center">
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="ml-4 flex min-w-0 flex-1 gap-2  dark:text-white">
                                                <span class="truncate font-medium">resume_fullstack_developer.pdf</span>

                                            </div>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="{{ asset('curriculum/resume_fullstack_developer.pdf') }}"
                                                target="_blank"
                                                class="font-medium text-indigo-600 hover:text-indigo-500">
                                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M12 7L12 14M12 14L15 11M12 14L9 11" stroke="#FFFFFF"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M16 17H12H8" stroke="#FFFFFF" stroke-width="1.5"
                                                            stroke-linecap="round"></path>
                                                        <path
                                                            d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                            stroke="#FFFFFF" stroke-width="1.5"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    @else
                                        <div class="flex w-0 flex-1 items-center">
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="ml-4 flex min-w-0 flex-1 gap-2  dark:text-white">
                                                <span
                                                    class="truncate font-medium">curriculum_fullstack_developer.pdf</span>

                                            </div>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="{{ asset('curriculum/curriculum_fullstack_developer.pdf') }}"
                                                target="_blank"
                                                class="font-medium text-indigo-600 hover:text-indigo-500">
                                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M12 7L12 14M12 14L15 11M12 14L9 11" stroke="#FFFFFF"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M16 17H12H8" stroke="#FFFFFF" stroke-width="1.5"
                                                            stroke-linecap="round"></path>
                                                        <path
                                                            d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                            stroke="#FFFFFF" stroke-width="1.5"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    @endif
                                </li>
                                {{-- <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                    <div class="flex w-0 flex-1 items-center">
                                        <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                            <span
                                                class="truncate font-medium  dark:text-white">coverletter_back_end_developer.pdf</span>

                                        </div>
                                    </div>
                                    <div class="ml-4 flex-shrink-0">
                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M12 7L12 14M12 14L15 11M12 14L9 11" stroke="#1C274C"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M16 17H12H8" stroke="#1C274C" stroke-width="1.5"
                                                        stroke-linecap="round"></path>
                                                    <path
                                                        d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                        stroke="#1C274C" stroke-width="1.5"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>
                                </li> --}}
                            </ul>
                        </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900  dark:text-white">
                            @if (session('locale') == 'en')
                                Reference as an accessibility guide created by DeafTech
                            @else
                                Referencia como guía de accesibilidad realizada por DeafTech
                            @endif
                        </dt>
                        <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                                @if (session('locale') == 'en')
                                    <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                        <div class="flex w-0 flex-1 items-center">
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                <span class="truncate font-medium  dark:text-white">Accessibility guide
                                                    for deaf workers in
                                                    software companies</span>

                                            </div>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="https://deaftech.com.mx/ACCESSIBILITY-GUIDE-FOR-DEAF-WORKERS-IN-SOFTWARE-COMPANIES.pdf"
                                                target="_blank"
                                                class="font-medium text-indigo-600 hover:text-indigo-500">
                                                <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M12 7L12 14M12 14L15 11M12 14L9 11" stroke="#FFFF"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M16 17H12H8" stroke="#FFFF" stroke-width="1.5"
                                                            stroke-linecap="round"></path>
                                                        <path
                                                            d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                            stroke="#FFFF" stroke-width="1.5"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </li>
                                @else
                                    <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                        <div class="flex w-0 flex-1 items-center">
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                <span class="truncate font-medium  dark:text-white">Guía de
                                                    accesibilidad
                                                    para trabajadores
                                                    sordos en empresas
                                                    de software</span>

                                            </div>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="https://deaftech.com.mx/GUIA-DE-ACCESIBILIDAD-PARA-TRABAJADORES-SORDOS-EN-EMPRESAS-DE-SOFTWARE.pdf"
                                                target="_blank"
                                                class="font-medium text-indigo-600 hover:text-indigo-500">
                                                <svg width="24px" height="24px" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path d="M12 7L12 14M12 14L15 11M12 14L9 11" stroke="#FFFF"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M16 17H12H8" stroke="#FFFF" stroke-width="1.5"
                                                            stroke-linecap="round"></path>
                                                        <path
                                                            d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z"
                                                            stroke="#FFFF" stroke-width="1.5"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

        <div class="text-center mb-5">
            <h1 class="text-3xl font-bold dark:text-white">
                @if (@session('locale') == 'en')
                    I am still learning my courses...
                @else
                    Todavía estoy aprendiendo mis cursos...
                @endif
            </h1>
        </div>

        <div id="controls-carousel" class="relative w-full bg-gray-900" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                @foreach ($learnings as $learning)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <a href="{{ $learning->url }}" target="_blank">
                            <img src="{{ $learning->image }}"
                                class="absolute block w-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="{{ $learning->name }}">
                        </a>
                    </div>
                @endforeach


            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  dark:bg-white/75 group-hover:bg-white/50 dark:group-hover:bg-white/25 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30  dark:bg-white/75 group-hover:bg-white/50 dark:group-hover:bg-white/25 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </section>

</x-layout>
