<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="antialiased">
        <nav class="relative container mx-auto p-6">
            <div class="flex items-center justify-between">
                <div class="pt-2">
                    <img src="storage/logo-black.png" alt="moses msukwa">
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="#">Education</a>
                    <a href="#">Experience</a>
                    <a href="#">Certifications</a>
                    <a href="#">Projects</a>
                    <a href="#">Articles</a>
                </div>
                <a href="#" class=" hidden md:block p-3 px-6 pt-2 text-white bg-red-500 rounded-full baseline hover:bg-red-300">
                    Contact me
                </a>
                <button id="menu-btn"class="block hamburger md:hidden focus:outline-none">
                    <span class="hamburger-top"></span>
                    <span class="hamburger-middle"></span>
                    <span class="hamburger-bottom"></span>
                </button>
            </div>
            <div class="md:hidden">
                <div id="menu" class="absolute hidden flex-col items-center self-end   py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                    <a href="#">Education</a>
                    <a href="#">Experience</a>
                    <a href="#">Certifications</a>
                    <a href="#">Projects</a>
                    <a href="#">Articles</a>
                    <button wire:click="downloadResume" class="p-3 px-6 pt-2 text-white bg-red-500 rounded-full baseline hover:bg-red-300">
                        Download resume
                    </button>
                </div>
            </div>
        </nav>

        <div >
            @livewire('profile')
            <livewire:contact/>
            <livewire:footer/>
        </div>
    </body>
</html>
