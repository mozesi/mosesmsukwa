<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon"/>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>mosesmsukwa</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="bg-gray-100 font-sans">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-10">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="/" wire:navigate>
                            <img  style="height:70px" class="shadow-lg rounded-full max-w-full h-auto align-middle border-none" src="{{ asset('images/moses_msukwa.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/"  wire:navigate class="py-4 px-2 text-gray-500 hover:text-blue-500 transition duration-300">Home</a>
                    <a href="#about" class="py-4 px-2 text-gray-500 hover:text-blue-500 transition duration-300">About</a>
                    <a href="/articles"  wire:navigate class="py-4 px-2 text-gray-500 hover:text-blue-500 transition duration-300">Articles</a>
                    <a href="/projects"  wire:navigate class="py-4 px-2 text-gray-500 hover:text-blue-500 transition duration-300">Projects</a>
                    <a href="contact" class="py-4 px-2 text-gray-500 hover:text-blue-500 transition duration-300">Contact</a>
                </div>
                <button id="menu-btn"class="block hamburger md:hidden focus:outline-none">
                    <span class="hamburger-top"></span>
                    <span class="hamburger-middle"></span>
                    <span class="hamburger-bottom"></span>
                </button>
                <div class="md:hidden">
                    <div id="menu" class="absolute hidden flex-col items-center self-end   py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                        <a href="/"  wire:navigate class="py-4 px-2 text-gray-500 hover:text-blue-500 transition duration-300">Home</a>
                        <a href="/profile" class="py-4 px-2 text-gray-500 hover:text-blue-500 transition duration-300">About</a>
                        <a href="/articles"  wire:navigate class="py-4 px-2 text-gray-500 hover:text-blue-500 transition duration-300">Articles</a>
                        <a href="/projects"  wire:navigate class="py-4 px-2 text-gray-500 hover:text-blue-500 transition duration-300">Projects</a>
                        <a href="/contact"  wire:navigate class="py-4 px-2 text-gray-500 hover:text-blue-500 transition duration-300">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section>
        {{$slot}}
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Section</h2>

        </div>
    </section>

    <!-- Footer -->
    @livewire('footer')
    </body>
    <body class="bg-gray-100 font-sans">
    <style>
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-down {
            animation: fadeInDown 1s ease-out;
        }
    </style>
    </body>

</html>
