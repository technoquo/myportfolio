<footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">{{ date('Y') }} <a href="/"
                class="hover:underline">
                @if (session('locale') == 'en' || session('locale') == null)
                    Code accessible with Leo
                @else
                    Código Accesible con Leo
                @endif
            </a>.

            @if (session('locale') == 'en')
                All Rights Reserved.
            @else
                Todos los derechos reservados.
            @endif
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="{{ route('about') }}" class="hover:underline me-4 md:me-6">
                    @if (session('locale') == 'en')
                        About
                    @else
                        Acerca
                    @endif

                </a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="hover:underline">
                    @if (session('locale') == 'en')
                        Contact
                    @else
                        Contacto
                    @endif
                </a>
            </li>
        </ul>
    </div>
</footer>
