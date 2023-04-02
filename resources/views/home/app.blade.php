<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com/3.2.4"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>
    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
    <style>
        .menuBar {
            color: blueviolet;
        }
    </style>
</head>

<body>
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                    <button type="button" data-te-collapse-init data-te-ripple-init data-te-ripple-color="light"
                        data-te-target="#collapse-Example" aria-expanded="false" aria-controls="collapse-Example">
                        <span class="sr-only">Open main menu</span>

                        <svg class="block h-6 w-6 menuBar" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>

                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="block h-8 w-auto lg:hidden"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                        <img class="hidden h-8 w-auto lg:block"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>

                    <div class=" hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">

                            <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                                aria-current="page">Dashboard</a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Team</a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Projects</a>

                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="hidden sm:hidden" id="collapse-Example" data-te-collapse-item>
            <div class="space-y-1 px-2 pt-2 pb-3">

                <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                    aria-current="page">Dashboard</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>

                <a href="#"
                    class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
            </div>
        </div>
    </nav>
    <div class="container sm:container">
        <div class="columns-1 py-4">

            <div id="animation-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="{{ asset('images/slider/veerasak.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="{{ asset('images/slider/veerasak.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                        <img src="{{ asset('images/slider/veerasak.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="{{ asset('images/slider/veerasak.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <img src="{{ asset('images/slider/veerasak.jpg') }}"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

        </div>
        {{-- <div class="columns-1 py-4">
            <img class="w-full h-3/6 " src="https://media.istockphoto.com/id/1048831036/photo/beautiful-chittagong.jpg?s=612x612&w=0&k=20&c=LXqhn-IOIjl7eBF2aVkN4L0RNr4LBdPdbEgURGlR3P0=" />
           
            <div class="columns-2">
                <div class="w-full aspect-square">
                    <h1>01</h1>
                    <h1>Title Here</h1>
                </div>
                <div class="w-full aspect-square">
                    <h3>A fairy Tale</h3>
                    <span>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem praesentium repudiandae iusto, numquam vel delectus quo non quas vero aliquam nesciunt pariatur adipisci inventore magni, quisquam eius cum corrupti distinctio.
                    </span>
                </div>
            </div>
            </div> --}}
        <div class="h-screen">
            <div class="grid lg:grid-cols-1 lg:grid-cols-">
                <img class=" lg:h-96 xs:h-60 w-full" src="https://shop.static.ingka.ikea.com/revamp/armchairs-and-chaise-longues_fu006.jpg" />
            </div>
            
           <div class="grid grid-cols-2 ">
               <div class="pt-10 pl-10">
                   <div class="font-sans text-5xl font-extrabold text-orange-400">01</div>
                   <div class="font-sans text-4xl font-extrabold text-stone-950 pt-4 pb-4">Title Here</div>
               </div>
               <div class="pt-10 pl-10">
                   <div class="font-sans text-2xl font-extrabold text-orange-400">A few words about slide</div>
                   <div class="font-sans text-stone-950 pt-3 pb-3">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem praesentium repudiandae iusto, numquam vel delectus quo non quas vero aliquam nesciunt pariatur adipisci inventore magni, quisquam eius cum corrupti distinctio.
                   </div>
               </div>
           </div>
            
            </div>

            
        {{-- <div class="columns-3 py-4">

            <img class="w-full aspect-square"
                src="https://media.istockphoto.com/id/1048831036/photo/beautiful-chittagong.jpg?s=612x612&w=0&k=20&c=LXqhn-IOIjl7eBF2aVkN4L0RNr4LBdPdbEgURGlR3P0=" />


            <img class="w-full aspect-square"
                src="https://media.istockphoto.com/id/1048831036/photo/beautiful-chittagong.jpg?s=612x612&w=0&k=20&c=LXqhn-IOIjl7eBF2aVkN4L0RNr4LBdPdbEgURGlR3P0=" />


            <img class="w-full aspect-square"
                src="https://media.istockphoto.com/id/1048831036/photo/beautiful-chittagong.jpg?s=612x612&w=0&k=20&c=LXqhn-IOIjl7eBF2aVkN4L0RNr4LBdPdbEgURGlR3P0=" />

        </div> --}}
        {{-- <div class="flex flex-row">
            <div class="basis-1/4 bg-red-700">01</div>
            <div class="basis-1/4 bg-orange-300">02</div>
            <div class="basis-1/4 bg-amber-700">03</div>
            <div class="basis-1/4 bg-amber-900">03</div>
        </div>
        <div class="flex items-stretch">
            <div class="py-4 bg-red-700">01</div>
            <div class="py-12 bg-orange-300">02</div>
            <div class="py-8 bg-amber-900">03</div>
        </div>
        <div class="flex items-start py-2">
            <div class="py-4 bg-red-700">01</div>
            <div class="py-12 bg-orange-300">02</div>
            <div class="py-8 bg-amber-900">03</div>
        </div>
        <p class="mb-4 space-y-1 md:space-x-1 md:space-y-0">
            <a class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                data-te-collapse-init data-te-ripple-init data-te-ripple-color="light" href="#collapseExample"
                role="button" aria-expanded="false" aria-controls="collapseExample">
                Link with href
            </a>
            <button
                class="inline-block rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
                type="button" data-te-collapse-init data-te-ripple-init data-te-ripple-color="light"
                data-te-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Button with data-te-target
            </button>
        </p>
        <div class="!visible hidden" id="collapseExample" data-te-collapse-item>
            <div class="block rounded-lg bg-white p-6 shadow-lg dark:bg-neutral-700 dark:text-neutral-50">
                Some placeholder content for the collapse component. This panel is
                hidden by default but revealed when the user activates the relevant
                trigger.
            </div>
        </div> --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>
