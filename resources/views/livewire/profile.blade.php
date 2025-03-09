<div>
    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-20 bg-gradient-to-r from-blue-500 to-purple-600">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Hello, I'm {{$myProfile->first_name}}.</h1>
                <p class="text-xl mb-6">{{$myProfile->bio}}</p>
                <a href="/contact"  wire:navigate class="bg-white text-blue-500 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition duration-300">Get in touch.</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">About Me</h2>
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-6 md:mb-0">
                    <img src="https://via.placeholder.com/300" alt="Profile" class="rounded-full mx-auto">
                </div>
                <div class="md:w-2/3 md:pl-10">
                    <p class="text-gray-600 mb-4">I'm a passionate web developer with 5+ years of experience in creating beautiful and functional websites. I specialize in front-end development and UI/UX design.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div><strong>Skills:</strong> HTML, CSS, JavaScript</div>
                        <div><strong>Frameworks:</strong> React, Tailwind CSS</div>
                        <div><strong>Tools:</strong> Git, VS Code</div>
                        <div><strong>Experience:</strong> 5+ Years</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Portfolio</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Project 1" class="w-full">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Project 1</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Project 2" class="w-full">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Project 2</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Project 3" class="w-full">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Project 3</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>



