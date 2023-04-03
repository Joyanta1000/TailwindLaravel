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

    <div class="container-fluid sm:container-fluid">
        <div class="relative w-screen h-[30rem] lg:h-screen">

            <img src="{{ asset('images/slider/chair_3.jpg') }}"
                class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            <div class="absolute top-2/4 left-1/2 -translate-x-1/2 -translate-y-1/2">
                <div class="text-8xl  justify-stretch font-sans justify-stretch text-white text-center">
                    Portfolio
                </div>
                <div
                    class="border-solid border-2 border-white-600 text-2xl  font-sans justify-stretch text-white text-center">
                    A few words about your site
                </div>
            </div>


        </div>

        <div class="h-screen">
            <div class="grid lg:grid-cols-1 xs:grid-cols-1">
                <img class=" lg:h-[30rem] xs:h-60 w-full"
                    src="https://shop.static.ingka.ikea.com/revamp/armchairs-and-chaise-longues_fu006.jpg" />
            </div>

            <div class="grid lg:grid-cols-2 xs:grid-cols-1">
                <div class="pt-10 pl-10 pr-10 lg:pl-20">
                    <div class="font-sans text-5xl font-extrabold text-orange-400">01</div>
                    <div class="font-sans text-4xl font-extrabold text-stone-950 pt-4 pb-4">Title Here</div>
                </div>
                <div class="lg:pt-10 pl-10 pr-10 lg:pl-20">
                    <div class="font-sans text-2xl font-extrabold text-orange-400">A few words about slide</div>
                    <div class="font-sans text-stone-950 pt-3 pb-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem praesentium repudiandae
                        iusto, numquam vel delectus quo non quas vero aliquam nesciunt pariatur adipisci inventore
                        magni, quisquam eius cum corrupti distinctio.
                    </div>
                </div>
            </div>
        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>

</html>
