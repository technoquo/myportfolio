<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @if (session('locale') == 'en' || session('locale') == null)
            Code accessible with Leo - {{ $seo }}
        @else
            Código Accesible con Leo - {{ $seo }}
        @endif
    </title>
    <meta name="description"
        content="Código Accesible con Leo es un sitio dedicado a ofrecer soluciones de desarrollo web accesibles y eficientes para todos los usuarios.">
    <meta name="keywords" content="desarrollo web, accesibilidad web, soluciones web, Código Accesible, Leo">
    <meta name="author" content="Leo">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <!-- Existing Open Graph Meta Tags -->
    <meta property="og:title" content="Código Accesible con Leo">
    <meta property="og:description"
        content="Código Accesible con Leo es un sitio dedicado a ofrecer soluciones de desarrollo web accesibles y eficientes para todos los usuarios.">
    <meta property="og:image" content="https://codigoaccesibleconleo.com/img/leo.png">
    <meta property="og:url" content="https://codigoaccesibleconleo.com/">
    <meta property="og:type" content="website">

    <!-- Existing Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Código Accesible con Leo">
    <meta name="twitter:description"
        content="Código Accesible con Leo es un sitio dedicado a ofrecer soluciones de desarrollo web accesibles y eficientes para todos los usuarios.">
    <meta name="twitter:image" content="https://codigoaccesibleconleo.com/img/leo.png">
    <meta name="twitter:site" content="@codigo_leo">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {

            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4HSPERD24E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4HSPERD24E');
    </script>
</head>

<body class="dark:bg-gray-900 font-hanken-grotesk pb-20  h-screen">
    <x-header :page="$page" />
    <main class="max-w-[986px] mx-auto h-auto px-5 py-20">
        {{ $slot }}
    </main>
    <x-footer />
    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            // themeToggleLightIcon.classList.remove('hidden');
        } else {
            //  themeToggleDarkIcon.classList.remove('hidden');
            document.documentElement.classList.add('dark');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });
    </script>

</body>



</html>
