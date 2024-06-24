<x-layout :seo="$seo" :page="$page">
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto">
            <div class="flex flex-col justify-center">

                <div class="text-6xl dark:text-white mt-10">
                    @if (session('locale') == 'en')
                        Contact me
                    @else
                        Contáctame
                    @endif
                    <div class="flex flex-row justify-center items-center p-8">
                        <div class="mb-4">
                            <svg class="md:h-28 md:w-28 h-14 w-14 dark:fill-white" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 128 128" version="1.1" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <style type="text/css">
                                        .st0 {
                                            display: none;
                                        }

                                        .st1 {
                                            display: inline;
                                        }

                                        .st2 {
                                            fill: none;
                                            stroke: #6a696e;
                                            stroke-width: 8;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-miterlimit: 10;
                                        }
                                    </style>
                                    <g class="st0" id="Layer_1"></g>
                                    <g id="Layer_2">
                                        <path class="st2" d="M20.1,40l38.1,31.5c3.3,2.8,8.2,2.8,11.5,0L107.9,40">
                                        </path>
                                        <path class="st2"
                                            d="M107.9,85.6V36.1c0-2.1-1.7-3.7-3.7-3.7H23.9c-2.1,0-3.7,1.7-3.7,3.7v55.7c0,2.1,1.7,3.7,3.7,3.7h84">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="mb-4">
                            <svg class="md:h-28 md:w-28 h-14 w-14" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg" fill="none">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path fill="#0A66C2"
                                        d="M12.225 12.225h-1.778V9.44c0-.664-.012-1.519-.925-1.519-.926 0-1.068.724-1.068 1.47v2.834H6.676V6.498h1.707v.783h.024c.348-.594.996-.95 1.684-.925 1.802 0 2.135 1.185 2.135 2.728l-.001 3.14zM4.67 5.715a1.037 1.037 0 01-1.032-1.031c0-.566.466-1.032 1.032-1.032.566 0 1.031.466 1.032 1.032 0 .566-.466 1.032-1.032 1.032zm.889 6.51h-1.78V6.498h1.78v5.727zM13.11 2H2.885A.88.88 0 002 2.866v10.268a.88.88 0 00.885.866h10.226a.882.882 0 00.889-.866V2.865a.88.88 0 00-.889-.864z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <div class="mb-4">
                            <svg class="md:h-28 md:w-28 h-14 w-14" viewBox="0 0 48 48" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>Skype-color</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Icons" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Color-" transform="translate(-400.000000, -660.000000)"
                                            fill="#00AEF3">
                                            <path
                                                d="M446.619944,689.095462 C446.967074,687.531907 447.147695,685.912711 447.147695,684.249 C447.147695,671.785081 436.900282,661.677621 424.253998,661.677621 C422.921919,661.677621 421.61524,661.791688 420.339605,662.008694 C418.293509,660.737263 415.87206,660 413.278457,660 C405.943556,660 400,665.859155 400,673.09268 C400,675.507564 400.66604,677.766649 401.823142,679.714137 C401.521167,681.177534 401.360301,682.696575 401.360301,684.249 C401.360301,696.718484 411.610536,706.823161 424.253998,706.823161 C425.687676,706.823161 427.087488,706.692401 428.447789,706.444792 C430.318909,707.435229 432.452493,708 434.724365,708 C442.056444,708 448,702.138063 448,694.910103 C448,692.820727 447.503293,690.8482 446.619944,689.095462 Z M435.997178,695.03808 C434.938852,696.518171 433.375353,697.686663 431.343368,698.515736 C429.336783,699.339245 426.932267,699.759346 424.19191,699.759346 C420.904045,699.759346 418.146754,699.189011 415.993415,698.06225 C414.455315,697.244305 413.188147,696.13702 412.225776,694.76265 C411.252117,693.382716 410.761054,692.011128 410.761054,690.684055 C410.761054,689.860546 411.082785,689.142758 411.714958,688.555729 C412.341486,687.971483 413.145814,687.67936 414.105362,687.67936 C414.889934,687.67936 415.570085,687.910276 416.120414,688.369327 C416.648166,688.811685 417.099718,689.465484 417.463782,690.302904 C417.870179,691.221005 418.310442,691.994436 418.776105,692.598157 C419.227658,693.187967 419.873942,693.680403 420.698024,694.067119 C421.527752,694.451052 422.648166,694.651365 424.022578,694.651365 C425.916275,694.651365 427.468485,694.250739 428.634055,693.46618 C429.777046,692.701095 430.330198,691.77743 430.330198,690.647887 C430.330198,689.760389 430.039511,689.059294 429.446849,688.508433 C428.82032,687.935316 427.999059,687.490176 427.002822,687.178578 C425.96143,686.861415 424.550329,686.51365 422.803387,686.151974 C420.424271,685.651191 418.406397,685.058599 416.803387,684.382542 C415.160865,683.695357 413.837253,682.741089 412.869238,681.547557 C411.887112,680.331768 411.387582,678.809946 411.387582,677.02104 C411.387582,675.318379 411.90969,673.779864 412.942615,672.455573 C413.964252,671.139628 415.460019,670.110242 417.387582,669.411928 C419.286924,668.719179 421.544685,668.368632 424.104421,668.368632 C426.147695,668.368632 427.945437,668.60233 429.446849,669.064163 C430.956726,669.525995 432.226717,670.149191 433.225776,670.91984 C434.233302,671.698835 434.984008,672.525126 435.452493,673.387585 C435.926623,674.25839 436.169332,675.123631 436.169332,675.96105 C436.169332,676.767866 435.853246,677.502347 435.229539,678.139454 C434.60301,678.784907 433.809972,679.110416 432.878645,679.110416 C432.031985,679.110416 431.365945,678.904538 430.908749,678.503912 C430.479774,678.128326 430.033866,677.544079 429.539981,676.709442 C428.969897,675.641106 428.278457,674.798122 427.485419,674.202747 C426.714958,673.624065 425.430856,673.334724 423.661336,673.334724 C422.024459,673.334724 420.686736,673.657451 419.696143,674.300122 C418.742239,674.914971 418.276576,675.624413 418.276576,676.464615 C418.276576,676.976526 418.426152,677.407755 418.736595,677.774996 C419.058325,678.170057 419.518344,678.509477 420.099718,678.798818 C420.700847,679.096505 421.321731,679.335768 421.942615,679.502695 C422.577611,679.677969 423.644403,679.936707 425.109125,680.270562 C426.963311,680.660059 428.665099,681.102417 430.169332,681.57816 C431.696143,682.056686 433.011289,682.646496 434.08937,683.339245 C435.184384,684.043123 436.0508,684.944531 436.668862,686.023996 C437.286924,687.111807 437.600188,688.447227 437.600188,690.002434 C437.600188,691.860894 437.058325,693.555208 435.997178,695.03808 Z"
                                                id="Skype"> </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="mb-4">
                            <svg class="md:h-28 md:w-28 h-14 w-14" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <circle cx="16" cy="16" r="14" fill="url(#paint0_linear_87_7225)">
                                    </circle>
                                    <path
                                        d="M22.9866 10.2088C23.1112 9.40332 22.3454 8.76755 21.6292 9.082L7.36482 15.3448C6.85123 15.5703 6.8888 16.3483 7.42147 16.5179L10.3631 17.4547C10.9246 17.6335 11.5325 17.541 12.0228 17.2023L18.655 12.6203C18.855 12.4821 19.073 12.7665 18.9021 12.9426L14.1281 17.8646C13.665 18.3421 13.7569 19.1512 14.314 19.5005L19.659 22.8523C20.2585 23.2282 21.0297 22.8506 21.1418 22.1261L22.9866 10.2088Z"
                                        fill="white"></path>
                                    <defs>
                                        <linearGradient id="paint0_linear_87_7225" x1="16" y1="2"
                                            x2="16" y2="30" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#37BBFE"></stop>
                                            <stop offset="1" stop-color="#007DBB"></stop>
                                        </linearGradient>
                                    </defs>
                                </g>
                            </svg>
                        </div>
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 24 24">
                                <path fill="white"
                                    d="M23.004 15.588a.995.995 0 1 0 .002-1.99a.995.995 0 0 0-.002 1.99m-.996-3.705h-.85c-.546 0-.84.41-.84 1.092v2.466h-1.61v-3.558h-.684c-.547 0-.84.41-.84 1.092v2.466h-1.61v-4.874h1.61v.74c.264-.574.626-.74 1.163-.74h1.972v.74c.264-.574.625-.74 1.162-.74h.527zm-6.786 1.501h-3.359c.088.546.43.858 1.006.858c.43 0 .732-.175.83-.487l1.425.4c-.351.848-1.22 1.364-2.255 1.364c-1.748 0-2.549-1.355-2.549-2.515c0-1.14.703-2.505 2.45-2.505c1.856 0 2.471 1.384 2.471 2.408c0 .224-.01.37-.02.477zm-1.562-.945c-.04-.42-.342-.81-.889-.81c-.508 0-.81.225-.908.81zM7.508 15.44h1.416l1.767-4.874h-1.62l-.86 2.837l-.878-2.837H5.72l1.787 4.874zm-6.6 0H2.51v-3.558h1.524v3.558h1.591v-4.874H2.51v-.302c0-.332.235-.536.606-.536h.918V8.412H2.85c-1.162 0-1.943.712-1.943 1.755v.4H0v1.316h.908v3.558z" />
                            </svg>
                        </div>
                    </div>

                </div>
                <div class="flex flex-col md:flex-row text-center justify-center gap-4">


                    <a href="mailto:leonel@codigoaccesibleconleo.com"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mb-3">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">E-Mail</h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            leonel@codigoaccesibleconleo.com
                        </p>
                    </a>


                    <a href="https://www.linkedin.com/in/lelobo" target="_blank"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mb-3">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Linkeldn
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">lelobo</p>
                    </a>


                    <a href="https://t.me/lelobo75" target="_blank"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mb-3">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Telegram
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">@lelobo75</p>
                    </a>




                    <a href="skype:live:lelobo75?chat" target="_blank"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mb-3">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Skype
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">@lelobo75</p>
                    </a>

                    <a href="https://www.fiverr.com/lelobo" target="_blank"
                        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 mb-3">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Fiverr
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">lelobo</p>
                    </a>







                </div>

            </div>
            <div class="text-gray-600 dark:text-white text-xl w-full mt-5">
                @if (session('locale') == 'en')
                    I enjoy taking on new challenges, especially those related to web development accessibility.
                    I
                    am open to opportunities that allow me to grow professionally and contribute value to a web
                    development team.
                @else
                    Me gusta asumir nuevos retos, especialmente los relacionados con la accesibilidad en el
                    desarrollo web. Estoy abierto a oportunidades que me permitan crecer profesionalmente y
                    aportar valor a un equipo de desarrollo web.
                @endif
            </div>


</x-layout>
