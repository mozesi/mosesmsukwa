<div>
    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-20 bg-gradient-to-r from-blue-500 to-purple-600">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Hello, I'm {{$myProfile->first_name}} {{$myProfile->last_name}}.</h1>
                <p class="text-xl font-mono mb-6">{{$myProfile->bio}}</p>

                <a href="/contact"  wire:navigate class="bg-white text-blue-500 mt-6 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300">Get in touch.</a>
            </div>
        </div>
        <div class="mt-6">
            <a href="https://x.com/MzeeChongoloka" class="text-gray-400 hover:text-white mx-2">Twitter</a>
            <a href="https://www.linkedin.com/in/moses-msukwa-a4909710a/" class="text-gray-400 hover:text-white mx-2">LinkedIn</a>
            <a href="https://github.com/mozesi" class="text-gray-400 hover:text-white mx-2">GitHub</a>
            <a href="https://www.youtube.com/channel/UCH17ndC69sBWuxV34NDnIgQ" class="text-gray-400 hover:text-white mx-2">Youtube</a>
        </div>
    </section>
    <!-- Tech stack -->
    <section id="contact" class="py-20">
        <div class="max-w-6xl mx-auto px-4">
            @livewire('skill')
        </div>
    </section>
    <!-- Recent articles -->
    <section id="contact" class="py-20">
        <div class="max-w-6xl mx-auto px-4">
            @livewire('recent-post')
        </div>
    </section>


</div>



