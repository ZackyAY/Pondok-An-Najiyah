<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="icon" href="{{ asset('assets/sma.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
</head>

<body>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="/dashboard" class="flex ms-2 md:me-24">
                        <img src="{{ asset('assets/sma.png') }}" class="h-8 me-3" alt="FlowBite Logo" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">An-Najiyah</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">{{ Auth::user()->name }} <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="/profile"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group @if (Request::is('dashboard')) bg-gray-200 dark:bg-gray-700 @endif">
                        <?xml version="1.0" ?><svg height="24px" version="1.1" viewBox="0 0 48 48" width="24px"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title />
                            <desc />
                            <g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                                <g id="Artboard-Copy" transform="translate(-347.000000, -249.000000)">
                                    <path
                                        d="M357,254.9995 C355.895,254.9995 354.998,255.8955 354.998,257.0005 L354.998,266.9995 C354.998,268.1045 355.895,269.0005 357,269.0005 L367,269.0005 C368.104,269.0005 369,268.1045 369,266.9995 L369,257.0005 C369,255.8955 368.104,254.9995 367,254.9995 L357,254.9995 Z M357,273.0005 C355.895,273.0005 354.998,273.8945 354.998,274.9995 L354.998,285.0005 C354.998,286.1035 355.895,286.9995 357,286.9995 L367,286.9995 C368.104,286.9995 369,286.1035 369,285.0005 L369,274.9995 C369,273.8945 368.104,273.0005 367,273.0005 L357,273.0005 Z M375,254.9995 C373.896,254.9995 373,255.8955 373,257.0005 L373,266.9995 C373,268.1045 373.896,269.0005 375,269.0005 L385,269.0005 C386.105,269.0005 387,268.1045 387,266.9995 L387,257.0005 C387,255.8955 386.105,254.9995 385,254.9995 L375,254.9995 Z M375,273.0005 C373.896,273.0005 373,273.8945 373,274.9995 L373,285.0005 C373,286.1035 373.896,286.9995 375,286.9995 L385,286.9995 C386.105,286.9995 387,286.1035 387,285.0005 L387,274.9995 C387,273.8945 386.105,273.0005 385,273.0005 L375,273.0005 Z"
                                        fill="#000000" id="grid" />
                                    <g id="slices" transform="translate(47.000000, 9.000000)" />
                                </g>
                            </g>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('daftar.index') }}"
                        class="flex items-center p-2 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group @if (Request::is('admin/daftar')) bg-gray-200 text-gray-900 @endif">
                        <?xml version="1.0" ?>
                        <!DOCTYPE svg
                            PUBLIC '-//W3C//DTD SVG 1.0//EN' 'http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd'>
                        <svg width="24" height="24" enable-background="new 0 0 24 24" id="Layer_1"
                            version="1.0" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g>
                                <path
                                    d="M9,9c0-1.7,1.3-3,3-3s3,1.3,3,3c0,1.7-1.3,3-3,3S9,10.7,9,9z M12,14c-4.6,0-6,3.3-6,3.3V19h12v-1.7C18,17.3,16.6,14,12,14z" />
                            </g>
                            <g>
                                <g>
                                    <circle cx="18.5" cy="8.5" r="2.5" />
                                </g>
                                <g>
                                    <path
                                        d="M18.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H23v-1.3C23,15.7,21.9,13,18.5,13z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <circle cx="18.5" cy="8.5" r="2.5" />
                                </g>
                                <g>
                                    <path
                                        d="M18.5,13c-1.2,0-2.1,0.3-2.8,0.8c2.3,1.1,3.2,3,3.2,3.2l0,0.1H23v-1.3C23,15.7,21.9,13,18.5,13z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <circle cx="5.5" cy="8.5" r="2.5" />
                                </g>
                                <g>
                                    <path
                                        d="M5.5,13c1.2,0,2.1,0.3,2.8,0.8c-2.3,1.1-3.2,3-3.2,3.2l0,0.1H1v-1.3C1,15.7,2.1,13,5.5,13z" />
                                </g>
                            </g>
                        </svg>

                        <span class="flex-1 ms-3 whitespace-nowrap">Pendaftaran</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.berita.index') }}"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group @if (Request::is('admin/berita')) bg-gray-100 dark:bg-gray-700 @endif">
                        <?xml version="1.0" ?><svg fill="none" height="24" viewBox="0 0 24 24"
                            width="24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.2117 2.23726C17.3427 1.84432 17.1304 1.41955 16.7375 1.28851C16.3445 1.15747 15.9198 1.36978 15.7887 1.76272L15.0387 4.01171C14.9077 4.40465 15.12 4.82941 15.5129 4.96045C15.9059 5.09149 16.3306 4.87918 16.4617 4.48624L17.2117 2.23726ZM21.7803 2.21967C22.0732 2.51256 22.0732 2.98744 21.7803 3.28033L19.2803 5.78033C18.9874 6.07322 18.5126 6.07322 18.2197 5.78033C17.9268 5.48744 17.9268 5.01256 18.2197 4.71967L20.7197 2.21967C21.0126 1.92678 21.4874 1.92678 21.7803 2.21967ZM12.8706 3.74087C11.7547 2.54545 9.78611 2.84497 9.07629 4.31816L3.17848 16.5588C2.83795 17.2655 2.99437 18.1114 3.56513 18.6497L5.00386 20.0065C5.53118 20.5037 6.30531 20.6362 6.96799 20.3426L8.38545 19.7146C9.0275 21.0658 10.4048 22 12.0003 22C14.2095 22 16.0003 20.2091 16.0003 18C16.0003 17.4597 15.8932 16.9445 15.6991 16.4743L19.119 14.9591C20.5809 14.3115 20.9679 12.4157 19.8769 11.2469L12.8706 3.74087ZM14.3266 17.0824C14.4387 17.3665 14.5003 17.6761 14.5003 18C14.5003 19.3807 13.3811 20.5 12.0003 20.5C11.0169 20.5 10.1662 19.9322 9.75795 19.1066L14.3266 17.0824ZM19 8.24927C19 7.83505 19.3358 7.49927 19.75 7.49927H21.75C22.1642 7.49927 22.5 7.83505 22.5 8.24927C22.5 8.66348 22.1642 8.99927 21.75 8.99927H19.75C19.3358 8.99927 19 8.66348 19 8.24927Z"
                                fill="#212121" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Berita Sekolah</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.acara.index') }}"
                        class="@if (Request::is('admin/acara')) bg-gray-200 dark:bg-gray-700 @endif flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <?xml version="1.0" ?><svg height="24" id="svg3171" version="1.1"
                            viewBox="0 0 6.3499999 6.3500002" width="24" xmlns="http://www.w3.org/2000/svg"
                            xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/"
                            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                            xmlns:svg="http://www.w3.org/2000/svg">
                            <defs id="defs3165" />
                            <g id="layer1">
                                <path
                                    d="M 1.5856426,0.79422437 V 1.0546222 l 0.529269,0.00156 V 0.79423416 C 2.1134001,0.43862502 1.5843911,0.4429949 1.5856426,0.79422437 Z m 2.646862,0 V 1.0577221 h -2.117593 v 0.7951432 c -0.01742,0.3607516 -0.54314,0.3420379 -0.529269,0 V 1.0577221 H 0.79277256 c -0.14614799,5.821e-4 -0.264159,0.1194734 -0.263601,0.2655644 V 2.3819274 H 5.8208285 V 1.3232865 C 5.8213847,1.1763879 5.7021166,1.0571622 5.5551607,1.0577221 h -0.79287 V 0.79422437 c -0.0058,-0.35667381 -0.5346891,-0.35013181 -0.5297861,0 z m 0,0.26504773 h 0.5297861 v 0.7935932 c -0.0057,0.3544925 -0.5345311,0.3481798 -0.5297861,0 z M 0.52917156,2.908923 v 2.6458273 c -8.44e-4,0.1462924 0.11725,0.2654975 0.263601,0.2660812 1.58746274,0 3.17492544,0 4.76238814,0 0.1471588,5.556e-4 0.2665169,-0.1189811 0.2656678,-0.2660812 V 2.908923 Z M 1.5856426,3.1744874 h 0.529269 c 0.352541,-0.00294 0.35591,0.5260129 0,0.5295787 h -0.529269 c -0.348677,0.00414 -0.354268,-0.5246156 0,-0.5295787 z m 1.324723,0 h 0.529269 c 0.352751,9.525e-4 0.351563,0.5299941 0,0.5295787 h -0.529269 c -0.355189,-0.00351 -0.351885,-0.5324647 0,-0.5295787 z m 1.322139,0 h 0.5297861 c 0.3489269,-0.00667 0.3567818,0.5217682 0,0.5295787 H 4.2325046 c -0.3537979,-0.0035 -0.350519,-0.5324557 0,-0.5295787 z m -2.646862,1.0586408 h 0.529269 c 0.351162,-0.00583 0.357296,0.5228493 0,0.5290622 h -0.529269 c -0.351367,-5.027e-4 -0.35157,-0.5295765 0,-0.5290622 z m 1.324723,0 h 0.529269 c 0.355374,0.00514 0.34895,0.5337996 0,0.5290622 h -0.529269 c -0.34733,0.00961 -0.35979,-0.5179221 0,-0.5290622 z m 1.322139,0 h 0.5297861 c 0.3561349,0.00526 0.349568,0.5339075 0,0.5290622 H 4.2325046 c -0.355214,-0.00622 -0.34911,-0.5348989 0,-0.5290622 z"
                                    id="path1319"
                                    style="color:#000000;font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:medium;line-height:normal;font-family:sans-serif;font-variant-ligatures:normal;font-variant-position:normal;font-variant-caps:normal;font-variant-numeric:normal;font-variant-alternates:normal;font-variant-east-asian:normal;font-feature-settings:normal;font-variation-settings:normal;text-indent:0;text-align:start;text-decoration:none;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000000;letter-spacing:normal;word-spacing:normal;text-transform:none;writing-mode:lr-tb;direction:ltr;text-orientation:mixed;dominant-baseline:auto;baseline-shift:baseline;text-anchor:start;white-space:normal;shape-padding:0;shape-margin:0;inline-size:0;clip-rule:nonzero;display:inline;overflow:visible;visibility:visible;opacity:1;isolation:auto;mix-blend-mode:normal;color-interpolation:sRGB;color-interpolation-filters:linearRGB;solid-color:#000000;solid-opacity:1;vector-effect:none;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.529167;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;color-rendering:auto;image-rendering:auto;shape-rendering:auto;text-rendering:auto;enable-background:accumulate;stop-color:#000000;stop-opacity:1" />
                            </g>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Acara Sekolah</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <div class="mt-14">
            @yield('content')
        </div>
    </div>


</body>

</html>