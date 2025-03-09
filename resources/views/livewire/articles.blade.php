<div>
    <header class="bg-blue-600 text-white p-6 shadow-md">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold">Tech Insights Articles</h1>
            <p class="mt-2 text-lg">Explore the latest in technology and innovation</p>
        </div>
    </header>

    <!-- Articles Section -->
    <main class="container mx-auto p-6 mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($articles as $article)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="https://cdn.hashnode.com/res/hashnode/image/stock/unsplash/iSh9yqYSd08/upload/50345e11f2d2b029cfb1dc01ece6a1aa.jpeg?w=1600&h=840&fit=crop&crop=entropy&auto=compress,format&format=webp alt="Article 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-gray-800">{{$article->title}}</h2>
                        <p class="text-gray-600 mt-2">{{$article->brief}}</p>
                        <p class="text-blue-500 mt-4 font-medium hover:underline cursor-pointer"><a href="{{$article->link}}">Read More</a></p>
                    </div>
                </div>
        @endforeach
        </div>
    </main>
</div>
