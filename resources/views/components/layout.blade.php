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
    <!-- Meta Description -->
    <meta name="description"
        content="Código Accesible con Leo es un sitio dedicado a ofrecer soluciones de desarrollo web accesibles y eficientes para todos los usuarios.">

    <!-- Meta Keywords -->
    <meta name="keywords"
        content="desarrollo web, accesibilidad web, Laravel, PHP, Vue.js, Node.js, soluciones web, programación">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Código Accesible con Leo">
    <meta property="og:description"
        content="Código Accesible con Leo es un sitio dedicado a ofrecer soluciones de desarrollo web accesibles y eficientes para todos los usuarios.'">
    <meta property="og:image" content="https://codigoaccesibleconleo.com/img/leo.jpeg">
    <meta property="og:url" content="https://codigoaccesibleconleo.com/">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Código Accesible con Leo">
    <meta name="twitter:description"
        content="Código Accesible con Leo es un sitio dedicado a ofrecer soluciones de desarrollo web accesibles y eficientes para todos los usuarios.'">
    <meta name="twitter:image" content="https://codigoaccesibleconleo.com/img/leo.jpeg">
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


    <nav class="bg-white fixed  dark:bg-gray-700 w-full top-0 border-b-2 border-gray-200 dark:border-gray-600 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"> <!-- Navbar -->
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">

                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                    @if (session('locale') == 'en' || session('locale') == null)
                        Code accessible with Leo
                    @else
                        Código Accesible con Leo
                    @endif
                </span>
            </a>
            <div class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse"> <!-- Dropdown menu -->
                <button type="button" data-dropdown-toggle="language-dropdown-menu"
                    class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                    @if (session('locale') == 'en' || session('locale') == null)
                        <svg class="w-5 h-5 rounded-full me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900">
                            <path fill="#b22234" d="M0 0h7410v3900H0z" />
                            <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff"
                                stroke-width="300" />
                            <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
                            <g fill="#fff">
                                <g id="d">
                                    <g id="c">
                                        <g id="e">
                                            <g id="b">
                                                <path id="a"
                                                    d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z" />
                                                <use xlink:href="#a" y="420" />
                                                <use xlink:href="#a" y="840" />
                                                <use xlink:href="#a" y="1260" />
                                            </g>
                                            <use xlink:href="#a" y="1680" />
                                        </g>
                                        <use xlink:href="#b" x="247" y="210" />
                                    </g>
                                    <use xlink:href="#c" x="494" />
                                </g>
                                <use xlink:href="#d" x="988" />
                                <use xlink:href="#c" x="1976" />
                                <use xlink:href="#e" x="2470" />
                            </g>
                        </svg>
                        English
                    @else
                        <svg class="h-6 w-6 rounded-full me-2" viewBox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                            class="iconify iconify--twemoji" preserveAspectRatio="xMidYMid meet" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                            </g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill="#002B7F"
                                    d="M36 27a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V9a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v18z">
                                </path>
                                <path fill="#EEE" d="M0 9h36v18H0z"></path>
                                <path fill="#CE1225" d="M0 13h36v10H0z"></path>
                                <ellipse fill="#EEE" cx="8.5" cy="18" rx="3.5" ry="4">
                                </ellipse>
                                <path fill="#F4CB58"
                                    d="M10.269 19.5c0 .828-.792 2.079-1.769 2.079S6.731 20.328 6.731 19.5c0-.829.792-1.5 1.769-1.5s1.769.671 1.769 1.5z">
                                </path>
                                <ellipse fill="#DCA841" cx="8.5" cy="19.5" rx="2.5" ry="1.5">
                                </ellipse>
                                <ellipse fill="#89C5E4" cx="8.5" cy="16" rx="1.5"
                                    ry="1">
                                </ellipse>
                                <ellipse fill="#088930" cx="8.5" cy="18.5" rx="1.5"
                                    ry="2.5">
                                </ellipse>
                                <ellipse fill="#DCA841" cx="8.5" cy="16.5" rx="1.5"
                                    ry=".5">
                                </ellipse>
                                <path fill="#89C5E4"
                                    d="M10 18c0 1.104-.671 2-1.5 2S7 19.104 7 18s.671-1.498 1.5-1.498S10 16.896 10 18z">
                                </path>
                                <ellipse fill="#DCA841" cx="8.5" cy="18.5" rx="1.5"
                                    ry=".5">
                                </ellipse>
                            </g>
                        </svg>
                        Spanish
                        {{-- @elseif (session('locale') == 'en')
                        <svg class="h-6 w-6 rounded-full me-2" viewBox="0 0 512 512" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#a22020"
                            stroke="#a22020">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                            </g>
                            <g id="SVGRepo_iconCarrier">
                                <title>sign-language</title>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="drop" fill="#2b77b1" transform="translate(42.607947, 42.705442)">
                                        <path
                                            d="M418.405386,319.961225 C415.800907,315.158746 412.493256,310.772513 408.592053,306.947892 L408.592053,306.947892 L408.592053,306.947892 C422.012971,294.391539 428.463033,276.076551 425.872053,257.881225 C425.364131,251.398193 423.549969,245.08491 420.538719,239.321225 C410.305633,219.758401 389.689468,207.870854 367.632053,208.814558 L365.925386,208.814558 L379.365386,183.854558 C381.77114,179.851415 383.636238,175.547343 384.912053,171.054558 C391.564892,146.298896 380.927348,120.141002 358.885386,107.054558 C354.410951,104.481336 349.600445,102.542774 344.592053,101.294558 L343.525386,101.294558 L351.632053,85.2945585 C353.844986,81.1481386 355.631898,76.7880734 356.965386,72.2812252 C364.232397,46.7448101 352.821672,19.5831939 329.497669,6.89820971 C306.173666,-5.78677444 277.17203,-0.603810715 259.685386,19.3745585 L259.685386,19.3745585 L259.685386,19.3745585 C256.206116,15.4498433 252.096349,12.1331898 247.525386,9.56122515 C234.635023,2.04375763 219.281025,-0.0290320119 204.858719,3.80122515 C189.380084,7.01754963 175.934434,16.5222327 167.738719,30.0412252 L111.418719,127.961225 L111.418719,126.041225 C106.279556,115.30603 97.9297053,106.434313 87.5253859,100.654558 C66.9250238,88.8461522 41.2283345,90.6728578 22.5055406,105.276637 C3.78274666,119.880416 -4.2454082,144.359089 2.19205261,167.214558 L52.7520526,311.214558 L80.6987193,262.361225 L77.7120526,253.614558 C68.3253859,226.307892 46.3520526,162.947892 44.2187193,155.694558 C42.4163679,151.46987 42.4163679,146.692581 44.2187193,142.467892 C46.3371915,138.227089 50.1240743,135.058472 54.6720526,133.721225 C59.1116788,132.24232 63.9612826,132.627209 68.1120526,134.787892 C72.3056376,136.965648 75.454789,140.729268 76.8587193,145.241225 C78.5653859,150.787892 88.8053859,178.521225 94.7787193,194.521225 L94.7787193,196.867892 L116.112053,196.867892 L201.445386,49.4545585 C205.944544,42.2356635 215.257634,39.7211292 222.778719,43.6945585 C230.089398,48.1251353 232.625977,57.5198723 228.538719,65.0278918 L187.365386,141.614558 L222.778719,162.947892 L288.485386,49.4545585 C290.473083,45.2818183 294.234116,42.2259786 298.725386,41.1345585 C302.91497,40.0751727 307.352361,40.6872266 311.098719,42.8412252 C314.866741,44.9053381 317.580909,48.4725307 318.565386,52.6545585 C319.612759,56.7748837 318.999867,61.141745 316.858719,64.8145585 L251.365386,178.094558 L286.565386,199.427892 L304.058719,169.134558 L317.072053,147.801225 C319.164516,144.145761 322.613996,141.462832 326.672053,140.334558 C330.955116,139.256432 335.49189,139.948482 339.258719,142.254558 C342.914184,144.347022 345.597113,147.796502 346.725386,151.854558 C347.80874,155.998303 347.112758,160.406191 344.805386,164.014558 L306.618719,234.841225 L306.618719,234.841225 L253.285386,261.934558 L253.285386,260.014558 C254.777864,248.570574 252.691252,236.945165 247.312053,226.734558 C239.807061,212.163568 226.470012,201.462913 210.618719,197.294558 C195.293329,193.30398 179.008476,195.60844 165.392053,203.694558 C152.860914,210.140165 143.361554,221.248287 138.938719,234.627892 L105.018719,383.961225 L155.792053,357.507892 L155.792053,356.441225 C155.792053,356.441225 177.125386,257.881225 180.325386,248.494558 C181.4758,243.935369 184.392401,240.020983 188.432053,237.614558 C192.530244,235.351818 197.338385,234.741261 201.872053,235.907892 C206.516696,237.137509 210.451141,240.223349 212.752053,244.441225 C215.115357,248.427915 215.732644,253.211882 214.458719,257.667892 C212.965386,263.001225 206.992053,290.947892 204.645386,302.254558 L220.645386,323.587892 L362.725386,250.201225 C366.55762,248.262183 370.991173,247.87998 375.098719,249.134558 C379.24659,250.457782 382.699487,253.373562 384.698719,257.241225 C386.397183,261.116632 386.397183,265.525818 384.698719,269.401225 C383.462258,273.478047 380.609639,276.87035 376.805386,278.787892 L268.858719,334.041225 L294.032053,366.894558 L360.165386,333.187892 C363.921524,331.274059 368.253077,330.818106 372.325386,331.907892 C376.484948,333.209899 379.945112,336.131816 381.925386,340.014558 C383.879148,343.720181 384.279962,348.050407 383.039565,352.051687 C381.799168,356.052967 379.01928,359.397176 375.312053,361.347892 L315.365386,394.627892 L341.392053,426.627892 L395.792053,396.974558 C399.940471,394.739588 403.807743,392.018174 407.312053,388.867892 C426.296724,371.119438 430.860527,342.771197 418.405386,319.961225 Z"
                                            id="sign-language"> </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        LESCO --}}
                    @endif
                </button>
                <!-- Dropdown -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                    id="language-dropdown-menu">
                    <ul class="py-2 font-medium" role="none">

                        {{-- <li>
                            <a href="{{ route('set-locale', 'lesco') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-6 w-6 rounded-full me-2" viewBox="0 0 512 512" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        fill="#a22020" stroke="#a22020">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <title>sign-language</title>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <g id="drop" fill="#2b77b1"
                                                    transform="translate(42.607947, 42.705442)">
                                                    <path
                                                        d="M418.405386,319.961225 C415.800907,315.158746 412.493256,310.772513 408.592053,306.947892 L408.592053,306.947892 L408.592053,306.947892 C422.012971,294.391539 428.463033,276.076551 425.872053,257.881225 C425.364131,251.398193 423.549969,245.08491 420.538719,239.321225 C410.305633,219.758401 389.689468,207.870854 367.632053,208.814558 L365.925386,208.814558 L379.365386,183.854558 C381.77114,179.851415 383.636238,175.547343 384.912053,171.054558 C391.564892,146.298896 380.927348,120.141002 358.885386,107.054558 C354.410951,104.481336 349.600445,102.542774 344.592053,101.294558 L343.525386,101.294558 L351.632053,85.2945585 C353.844986,81.1481386 355.631898,76.7880734 356.965386,72.2812252 C364.232397,46.7448101 352.821672,19.5831939 329.497669,6.89820971 C306.173666,-5.78677444 277.17203,-0.603810715 259.685386,19.3745585 L259.685386,19.3745585 L259.685386,19.3745585 C256.206116,15.4498433 252.096349,12.1331898 247.525386,9.56122515 C234.635023,2.04375763 219.281025,-0.0290320119 204.858719,3.80122515 C189.380084,7.01754963 175.934434,16.5222327 167.738719,30.0412252 L111.418719,127.961225 L111.418719,126.041225 C106.279556,115.30603 97.9297053,106.434313 87.5253859,100.654558 C66.9250238,88.8461522 41.2283345,90.6728578 22.5055406,105.276637 C3.78274666,119.880416 -4.2454082,144.359089 2.19205261,167.214558 L52.7520526,311.214558 L80.6987193,262.361225 L77.7120526,253.614558 C68.3253859,226.307892 46.3520526,162.947892 44.2187193,155.694558 C42.4163679,151.46987 42.4163679,146.692581 44.2187193,142.467892 C46.3371915,138.227089 50.1240743,135.058472 54.6720526,133.721225 C59.1116788,132.24232 63.9612826,132.627209 68.1120526,134.787892 C72.3056376,136.965648 75.454789,140.729268 76.8587193,145.241225 C78.5653859,150.787892 88.8053859,178.521225 94.7787193,194.521225 L94.7787193,196.867892 L116.112053,196.867892 L201.445386,49.4545585 C205.944544,42.2356635 215.257634,39.7211292 222.778719,43.6945585 C230.089398,48.1251353 232.625977,57.5198723 228.538719,65.0278918 L187.365386,141.614558 L222.778719,162.947892 L288.485386,49.4545585 C290.473083,45.2818183 294.234116,42.2259786 298.725386,41.1345585 C302.91497,40.0751727 307.352361,40.6872266 311.098719,42.8412252 C314.866741,44.9053381 317.580909,48.4725307 318.565386,52.6545585 C319.612759,56.7748837 318.999867,61.141745 316.858719,64.8145585 L251.365386,178.094558 L286.565386,199.427892 L304.058719,169.134558 L317.072053,147.801225 C319.164516,144.145761 322.613996,141.462832 326.672053,140.334558 C330.955116,139.256432 335.49189,139.948482 339.258719,142.254558 C342.914184,144.347022 345.597113,147.796502 346.725386,151.854558 C347.80874,155.998303 347.112758,160.406191 344.805386,164.014558 L306.618719,234.841225 L306.618719,234.841225 L253.285386,261.934558 L253.285386,260.014558 C254.777864,248.570574 252.691252,236.945165 247.312053,226.734558 C239.807061,212.163568 226.470012,201.462913 210.618719,197.294558 C195.293329,193.30398 179.008476,195.60844 165.392053,203.694558 C152.860914,210.140165 143.361554,221.248287 138.938719,234.627892 L105.018719,383.961225 L155.792053,357.507892 L155.792053,356.441225 C155.792053,356.441225 177.125386,257.881225 180.325386,248.494558 C181.4758,243.935369 184.392401,240.020983 188.432053,237.614558 C192.530244,235.351818 197.338385,234.741261 201.872053,235.907892 C206.516696,237.137509 210.451141,240.223349 212.752053,244.441225 C215.115357,248.427915 215.732644,253.211882 214.458719,257.667892 C212.965386,263.001225 206.992053,290.947892 204.645386,302.254558 L220.645386,323.587892 L362.725386,250.201225 C366.55762,248.262183 370.991173,247.87998 375.098719,249.134558 C379.24659,250.457782 382.699487,253.373562 384.698719,257.241225 C386.397183,261.116632 386.397183,265.525818 384.698719,269.401225 C383.462258,273.478047 380.609639,276.87035 376.805386,278.787892 L268.858719,334.041225 L294.032053,366.894558 L360.165386,333.187892 C363.921524,331.274059 368.253077,330.818106 372.325386,331.907892 C376.484948,333.209899 379.945112,336.131816 381.925386,340.014558 C383.879148,343.720181 384.279962,348.050407 383.039565,352.051687 C381.799168,356.052967 379.01928,359.397176 375.312053,361.347892 L315.365386,394.627892 L341.392053,426.627892 L395.792053,396.974558 C399.940471,394.739588 403.807743,392.018174 407.312053,388.867892 C426.296724,371.119438 430.860527,342.771197 418.405386,319.961225 Z"
                                                        id="sign-language"> </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    LESCO
                                </div>
                            </a>
                        </li> --}}
                        <li>
                            <a href="{{ route('set-locale', 'es') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-6 w-6 rounded-full me-2" viewBox="0 0 36 36"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" role="img" class="iconify iconify--twemoji"
                                        preserveAspectRatio="xMidYMid meet" fill="#000000">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill="#002B7F"
                                                d="M36 27a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V9a4 4 0 0 1 4-4h28a4 4 0 0 1 4 4v18z">
                                            </path>
                                            <path fill="#EEE" d="M0 9h36v18H0z"></path>
                                            <path fill="#CE1225" d="M0 13h36v10H0z"></path>
                                            <ellipse fill="#EEE" cx="8.5" cy="18" rx="3.5"
                                                ry="4"></ellipse>
                                            <path fill="#F4CB58"
                                                d="M10.269 19.5c0 .828-.792 2.079-1.769 2.079S6.731 20.328 6.731 19.5c0-.829.792-1.5 1.769-1.5s1.769.671 1.769 1.5z">
                                            </path>
                                            <ellipse fill="#DCA841" cx="8.5" cy="19.5" rx="2.5"
                                                ry="1.5"></ellipse>
                                            <ellipse fill="#89C5E4" cx="8.5" cy="16" rx="1.5"
                                                ry="1"></ellipse>
                                            <ellipse fill="#088930" cx="8.5" cy="18.5" rx="1.5"
                                                ry="2.5"></ellipse>
                                            <ellipse fill="#DCA841" cx="8.5" cy="16.5" rx="1.5"
                                                ry=".5"></ellipse>
                                            <path fill="#89C5E4"
                                                d="M10 18c0 1.104-.671 2-1.5 2S7 19.104 7 18s.671-1.498 1.5-1.498S10 16.896 10 18z">
                                            </path>
                                            <ellipse fill="#DCA841" cx="8.5" cy="18.5" rx="1.5"
                                                ry=".5"></ellipse>
                                        </g>
                                    </svg>
                                    Spanish
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('set-locale', 'en') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="w-5 h-5 rounded-full me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 3900 3900">
                                        <path fill="#b22234" d="M0 0h7410v3900H0z" />
                                        <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0"
                                            stroke="#fff" stroke-width="300" />
                                        <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
                                        <g fill="#fff">
                                            <g id="d">
                                                <g id="c">
                                                    <g id="e">
                                                        <g id="b">
                                                            <path id="a"
                                                                d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z" />
                                                            <use xlink:href="#a" y="420" />
                                                            <use xlink:href="#a" y="840" />
                                                            <use xlink:href="#a" y="1260" />
                                                        </g>
                                                        <use xlink:href="#a" y="1680" />
                                                    </g>
                                                    <use xlink:href="#b" x="247" y="210" />
                                                </g>
                                                <use xlink:href="#c" x="494" />
                                            </g>
                                            <use xlink:href="#d" x="988" />
                                            <use xlink:href="#c" x="1976" />
                                            <use xlink:href="#e" x="2470" />
                                        </g>
                                    </svg>
                                    English
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-language" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-language" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div>
                    <button id="theme-toggle" type="button"
                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="items-center justify-between hidden w-full lg:flex md:w-auto md:order-1" id="navbar-language">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    @foreach ($page as $menu)
                        <li>
                            <x-nav-link href="{{ route($menu->route) }}" :active="request()->is($menu->route)">
                                {{ $menu->name }}
                            </x-nav-link>
                    @endforeach
                    {{-- <li>
                        <x-nav-link href="{{ route('home') }}" :active="request()->is('/')">
                          
                        </x-nav-link>
               
                    </li> --}}

                    <li>
                        <a href="https://github.com/technoquo" target="_blank" data-tooltip-target="tooltip-github-2"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">View on Github</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/lelobo/" target="_blank"
                            data-tooltip-target="tooltip-github-2"
                            class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                                    clip-rule="evenodd" />
                                <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                            </svg>

                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <main class="max-w-[986px] mx-auto h-auto px-5 py-20">
        {{ $slot }}
    </main>

    <footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">{{ date('Y') }} <a
                    href="/" class="hover:underline">
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

    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
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
