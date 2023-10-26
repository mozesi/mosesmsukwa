<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
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
            </div>
        </nav>

        <div >
            {{$slot}}
        </div>

    </body>
</html>
