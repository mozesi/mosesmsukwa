<div>
    <header class=" text-black">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold">Something you can read!</h1>
        </div>
    </header>

    <!-- Articles Section -->
    <main class="container mx-auto p-6 mt-8">
        <div class="row">
            @foreach($myRecentArticles as $article)
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
