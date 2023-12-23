<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Moses Msukwa</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="antialiased">
        <nav class="relative container mx-auto p-6">
            <div class="flex items-center justify-between">
                <div class="pt-2">
                    <a href="/" wire:navigate>Mosesmsukwa</a>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="/experience"  wire:navigate>Experience</a>
                    <a href="/education" wire:navigate>Education</a>
                    <a href="/project" wire:navigate>Projects</a>
                    <a href="/articles" wire:navigate>Articles</a>
                </div>
                <a href="/contact" wire:navigate class=" hidden md:block p-3 px-6 pt-2 text-white bg-black rounded-full baseline hover:bg-gray-500">
                    <button class="p-3 px-6 pt-2 text-white bg-black rounded-full baseline hover:bg-gray-500">
                        Contact me
                    </button>
                </a>
                <button id="menu-btn"class="block hamburger md:hidden focus:outline-none">
                    <span class="hamburger-top"></span>
                    <span class="hamburger-middle"></span>
                    <span class="hamburger-bottom"></span>
                </button>
            </div>
            <div class="md:hidden">
                <div id="menu" class="absolute hidden flex-col items-center self-end   py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                    <a href="/education" wire:navigate>Education</a>
                    <a href="/experience"  wire:navigate>Experience</a>
                    <a href="/projects" wire:navigate>Projects</a>
                    <a href="/articles" wire:navigate>Articles</a>
                    <a href="/contact" wire:navigate>
                        <button class="p-3 px-6 pt-2 text-white bg-black rounded-full baseline hover:bg-gray-500">
                            Contact me
                        </button>
                    </a>

                </div>
            </div>
        </nav>

        <div >
        {{$slot}}
        <livewire:footer/>
        </div>
    </body>
</html>
