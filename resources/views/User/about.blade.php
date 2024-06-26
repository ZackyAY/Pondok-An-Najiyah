@extends('layouts.userLayout')
@section('title')
    An-Najiyah
@endsection
@section('content')
    <div class="mt-32 text-center">
        <h1 class="text-4xl sm:text-3xl font-bold text-gray-800 dark:text-gray-200" data-aos="zoom-out-down"
            data-aos-duration="2000">
            VISI
        </h1>
        <p class="mt-10 text-xl sm:text-xl font-semibold text-gray-500 dark:text-gray-300" data-aos="zoom-out-down"
            data-aos-duration="2000">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit."
        </p>
        <h1 class="text-4xl sm:text-3xl font-bold text-gray-800 dark:text-gray-200 mt-14" data-aos="zoom-out-up"
            data-aos-duration="2000">
            MISI
        </h1>
        <p class="mt-10 text-xl sm:text-xl font-semibold text-gray-500 dark:text-gray-300" data-aos="zoom-out-up"
            data-aos-duration="2000">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.        </p>
        <p class="mt-5 text-xl sm:text-xl font-semibold text-gray-500 dark:text-gray-300" data-aos="zoom-out-up"
            data-aos-duration="2000">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.        </p>
        <p class="mt-5 text-xl sm:text-xl font-semibold text-gray-500 dark:text-gray-300" data-aos="zoom-out-up"
            data-aos-duration="2000">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.        </p>
    </div>

    <div class="bg-white dark:text-gray-100 dark:bg-gray-800">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-32 container xl:max-w-7xl mx-auto lg:py-32">
            <div class="flex items-center lg:justify-start text-blue-500" data-aos="fade-right" data-aos-duration="2000">
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
                <img width={450} height={450} src={tiket} alt="" />
            </div>
            <div class="flex items-center text-center lg:text-left" data-aos="fade-left" data-aos-duration="2000">
                <div class="space-y-8">

                    <div>
                        <h2 class="text-2xl font-black text-black mb-10 dark:text-white">
                            Tentang Pondok Pesantren An-Najiyah
                        </h2>
                        <p class="text-lg leading-relaxed font-normal text-gray-700 dark:text-gray-300">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lorem orci, 
                        rutrum ut quam et, molestie placerat dui. Proin venenatis, sapien eu aliquet sagittis, 
                        enim justo dapibus odio, vel volutpat nulla orci quis sem. Nunc non laoreet dolor. 
                        Mauris hendrerit turpis lacus, nec ultricies est scelerisque sit amet.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
