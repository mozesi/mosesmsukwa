<div id="portfolio" class="py-20 bg-gray-50">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4 animate-fade-in-down">
           Tech insights
        </h2>
        <p class="text-xl font-mono text-gray-600 max-w-2xl mx-auto">
            Explore my write ups on technology and innovation
        </p>
    </div>

    <!-- Articles Section -->
    <main class="container mx-auto p-6 mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($articles as $article)
                <ul>
                    <div class=" overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold text-gray-800">{{$article->title}}</h2>
                            <hr>
                            <p class="text-gray-600 mt-2">{{$article->brief}}</p>
                            <p class="text-blue-500 mt-4 font-medium hover:underline cursor-pointer"><a href="{{$article->link}}">Read More</a></p>
                        </div>
                    </div>
                </ul>
        @endforeach
        </div>
    </main>
</div>
