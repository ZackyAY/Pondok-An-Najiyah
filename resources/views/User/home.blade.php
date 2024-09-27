@extends('layouts.userLayout')
@section('title')
    An-Najiyah
@endsection
@section('content')
    <div class="bg-white dark:text-gray-100 dark:bg-gray-800 mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-10">
            <div class="flex items-center text-center lg:text-left">
                <div class="space-y-8">

                    <div>
                        <h3 class="text-5xl leading-relaxed font-bold text-gray-700 dark:text-gray-300"
                            data-aos="fade-down-right" data-aos-duration="2000">
                            Kami Bantu <span class=" text-indigo-600">Wujudkan</span>
                            Impianmu
                        </h3>
                        <p class="text-xl mt-10 leading-relaxed font-normal text-gray-500 dark:text-gray-300"
                            data-aos="fade-down-right" data-aos-duration="2000">
                            Tumbuhlah seperti pohon yang teguh, akarimu terbenam dalam ilmu, cabangmu menjulang tinggi
                            menuju cita-cita. Di setiap langkahmu, bersemangatlah untuk meraih keberhasilan, karena di balik
                            setiap usaha ada keberhasilan yang menanti. Bersama-sama kita ciptakan masa depan yang
                            gemilang!
                        </p>
                        <div class="mt-10" data-aos="fade-down-right" data-aos-duration="2000">
                            <a type="button" href="/pendaftaran"
                                class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-lg px-5 py-2.5 text-center me-2 mb-2">Daftar
                                Sekarang →</a>
                        </div>

                        <div class="mt-5" data-aos="fade-up-right" data-aos-duration="2000">
                            <button type="button" data-twe-ripple-init data-twe-ripple-color="light"
                                class="mb-2 inline-block rounded bg-[#1877f2] px-3 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                <span class="[&>svg]:h-4 [&>svg]:w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 320 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                        <path
                                            d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                                    </svg>
                                </span>
                            </button>
                            <button type="button" data-twe-ripple-init data-twe-ripple-color="light"
                                class="mb-2 inline-block rounded bg-[#c13584] px-3 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                <span class="[&>svg]:h-4 [&>svg]:w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                    </svg>
                                </span>
                            </button>
                            <button type="button" data-twe-ripple-init data-twe-ripple-color="light"
                                class="mb-2 inline-block rounded bg-black px-3 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                                <span class="[&>svg]:h-4 [&>svg]:w-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                                        <path
                                            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex items-center lg:justify-start ml-20 text-blue-500" data-aos="fade-up-left"
                data-aos-duration="2000">
                {/* <svg viewBox="0 0 753 480.951" xmlns="http://www.w3.org/2000/svg" class="w-full">
                    <path
                        d="M149.18 480.567l-2-.039a463.833 463.833 0 017.1-66.287c8.648-46.88 23.029-77.67 42.743-91.512l1.148 1.637C152.12 356.7 149.203 479.332 149.18 480.567zM174.18 480.089l-2-.04c.043-2.214 1.293-54.413 21.843-68.841l1.148 1.637c-19.72 13.845-20.981 66.711-20.991 67.244z"
                        fill="#374151" />
                    <circle cx="209.549" cy="314.548" r={10} fill="currentColor" />
                    <circle cx="204.597" cy="400.548" r={10} fill="currentColor" />
                    <path
                        d="M169.519 330.542c1.879 12.004-3.02 22.74-3.02 22.74s-7.945-8.725-9.824-20.729 3.019-22.74 3.019-22.74 7.945 8.725 9.825 20.73zM202.206 359.696c-11.493 3.942-22.919.99-22.919.99s7.208-9.344 18.7-13.287 22.92-.99 22.92-.99-7.208 9.345-18.701 13.287zM202.575 435.857a31.135 31.135 0 01-16.064.694 28.374 28.374 0 0129.172-10.006 31.134 31.134 0 01-13.108 9.312z"
                        fill="#374151" />
                    <path fill="#9e616a" d="M606.671 467.453h-13.14l-6.251-50.685 19.394.001-.003 50.684z" />
                    <path d="M610.023 480.19h-42.37v-.537a16.493 16.493 0 0116.491-16.491h.001l25.878.001z"
                        fill="#374151" />
                    <path fill="#9e616a" d="M525.57 467.453h-13.141l-6.251-50.685 19.394.001-.002 50.684z" />
                    <path d="M528.921 480.19h-42.37v-.537a16.493 16.493 0 0116.491-16.491h.002l25.878.001z"
                        fill="#374151" />
                    <path
                        d="M492.789 183.616l-18.2-2.812-5.88 9.464-63.272 16.129.172.872a11.904 11.904 0 102.587 12.31l76.625-15.982zM674.554 172.347a11.855 11.855 0 00-4.375.841l.363-.633-80.444-41.58-10.967 17.73 83.635 37.125a11.9 11.9 0 1011.788-13.483z"
                        fill="#9e616a" />
                    <circle cx="736.071" cy="267.733" r="35.538" transform="rotate(-80.783 501.187 294.317)"
                        fill="#374151" />
                    <circle cx="512.264" cy="70.77" r="22.671" fill="#a0616a" />
                    <ellipse cx="512.571" cy="48.405" rx="24.509" ry="14.705" fill="#374151" />
                    <circle cx="515.021" cy="22.671" r="14.705" fill="#374151" />
                    <path
                        d="M495.414 14.705A14.707 14.707 0 01508.588.08a14.87 14.87 0 00-1.532-.08 14.705 14.705 0 000 29.41 14.87 14.87 0 001.532-.079 14.707 14.707 0 01-13.174-14.626zM500.478 127.051l1.828-17.576s24.806-16.347 33.236-6.686l50.388 86.213s31.323 11.136 30.216 53.658l-1.498 205.54-35.517 3.894-21.568-160.25-19.487 166.026-41.35-1.295 3.72-109.376 19.717-106.027-.188-35.182-8.684-14.199s-15.908-6.39-16.352-24.45l-.349-25.386z"
                        fill="#374151" />
                    <path
                        d="M526.488 107.615l.49-8.24s75.031 19.773 69.079 33.91-17.113 18.6-17.113 18.6l-43.155-17.112zM506.88 128.117l-5.645-6.02s-45.032 63.188-31.414 70.248 25.052 3.354 25.052 3.354l22.228-40.757z"
                        fill="#374151" />
                    <path d="M416.745 333.873l282.56-56.404-23.613-118.297-282.561 56.404z" fill="#fff" />
                    <path
                        d="M701.618 279.011l-286.416 57.174-24.384-122.152 286.417-57.173zm-283.33 52.55l278.705-55.635-22.844-114.441-278.706 55.634z"
                        fill="#9CA3AF" />
                    <path fill="#9CA3AF"
                        d="M427.715 242.718l228.672-45.647 1.19 5.962-228.672 45.647zM432.349 265.933l228.672-45.647 1.19 5.962-228.672 45.647zM437.01 289.282l228.672-45.647 1.19 5.962L438.2 295.244z" />
                    <path
                        d="M547.129 234.12l-7.998 1.597a2.25 2.25 0 01-2.643-1.764l-3.781-18.942a2.25 2.25 0 011.763-2.643l7.998-1.597a2.25 2.25 0 012.643 1.764l3.781 18.942a2.25 2.25 0 01-1.763 2.643zM638.227 240.075l-7.998 1.597a2.25 2.25 0 01-2.643-1.764l-3.78-18.942a2.25 2.25 0 011.763-2.643l7.997-1.597a2.25 2.25 0 012.643 1.764l3.781 18.942a2.25 2.25 0 01-1.763 2.643zM588.893 274.202l-7.997 1.597a2.25 2.25 0 01-2.643-1.763l-3.782-18.943a2.25 2.25 0 011.764-2.643l7.998-1.597a2.25 2.25 0 012.643 1.764l3.78 18.942a2.25 2.25 0 01-1.763 2.643z"
                        fill="currentColor" />
                    <path d="M752 480.951H1a1 1 0 010-2h751a1 1 0 010 2z" fill="#374151" />
                </svg> */}
                <img width={450} height={450} src={tiket2} alt="" />
            </div>
        </div>
    </div>


    <div class="bg-white dark:text-gray-100 dark:bg-gray-900">
        <div class="space-y-16 container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
            <div class="text-center" data-aos="zoom-in-up" data-aos-duration="2000">
                <h2 class="text-2xl font-black text-black dark:text-white">
                    Berita
                </h2>
                <div class="text-sm uppercase font-bold tracking-wider mb-1 text-blue-600 dark:text-blue-500 mt-3">
                    Informasi - informasi terkini di lingkungan Pondok Pesantren AN-NAJIYAH.
                </div>
            </div>

            <div class="relative w-full flex gap-6 py-6 px-10 rounded-xl overflow-x-auto scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar scrollbar-thumb-blue-300"
                data-aos="fade-right" data-aos-duration="2000">
                @foreach ($berita as $item)
                    <div class="inline-flex item-center">
                        <div
                            class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-72">
                            <div
                                class="relative h-56 mx-4 mt-3 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                                <img class="object-cover w-full h-full rounded-xl" src="{{ $item->image }}"
                                    alt="card-image" />
                            </div>
                            <div class="p-6">
                                <h5
                                    class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                    {{ $item->judul }}
                                </h5>
                                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                    {{ $item->deskripsi }}
                                </p>
                            </div>
                            <div class="p-6 pt-0">
                                <a class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-blue-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                    type="button" href="{{ route('home.readmoreBerita', $item->id) }}">
                                    Lihat Semua
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>



            <div class="bg-white dark:text-gray-100 dark:bg-gray-900">
                <div class="space-y-16 container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
                    <div class="text-center" data-aos="zoom-in-up" data-aos-duration="2000">
                        <h2 class="text-2xl font-black text-black dark:text-white">
                            Acara Pondok Pesantren Mendatang
                        </h2>
                        <div class="text-sm uppercase font-bold tracking-wider mb-1 text-blue-600 dark:text-blue-500 mt-3">
                            Informasi mengenai daftar kegiatan yang akan berlangsung di Pondok Pesantren AN-NAJIYAH berikutnya
                        </div>
                    </div>

                    <div class="relative w-full flex gap-6 py-6 px-10 rounded-xl overflow-x-auto scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar scrollbar-thumb-blue-300"
                        data-aos="fade-right" data-aos-duration="2000">
                        @foreach ($acara as $item)
                            <div class="inline-flex item-center">
                                <div
                                    class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-72">
                                    <div
                                        class="relative h-56 mx-4 mt-3 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                                        <img class="object-cover w-full h-full rounded-xl" src="{{ $item->image }}"
                                            alt="card-image" />
                                    </div>
                                    <div class="p-6">
                                        <h5
                                            class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                            {{ $item->judul }}
                                        </h5>
                                        <p
                                            class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                            {{ $item->deskripsi }}
                                        </p>
                                    </div>
                                    <div class="p-6 pt-0">
                                        <a class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-blue-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                            type="button" href="/readmore-acara">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection