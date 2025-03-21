    <section id="portfolio" class="py-20 bg-gray-50">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4 animate-fade-in-down">
                Projects
            </h2>
            <p class="text-xl font-mono text-gray-600 max-w-2xl mx-auto">
                A journey through my professional milestones and achievements
            </p>
        </div>
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach( $myProjects as $myProject)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="{{$myProject->title}}" class="w-full">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg">{{$myProject->title}}</h3>
                        <p class="text-gray-600">{{$myProject->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Tech stack -->
        <section id="contact" class="py-20">
            <div class="max-w-6xl mx-auto px-4">
                @livewire('skill')
            </div>
        </section>
    </section>

