<div class="container flex flex-col px-4 mx-auto mt-5 space-y-12 md:space-y-0 md:flex-row">
    <div class="flex flex-col space-y-8 md:w-1/2">
        @foreach($myProjects as $myProject)
        <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
            <div class="rounded-l-full bg-red-300 md:bg-transparent">
                <div class="flex items-center space-x-2">
                    <div class="px-4 py-2 rext-white rounded-full md:py-1 bg-red-500">
                        0{{$myProject->id}}
                    </div>
                    <h3 class="text-base font-bold md:mb-4 md:hidden">
                        <a href="{{$myProject->project_link}}" alt="{{$myProject->project_link}}"> {{$myProject->title}}</a>
                    </h3>
                </div>
            </div>
            <div>
                <h3 class="hidden mb-4 text-lg font-bold md:block">
                   <a href="{{$myProject->project_link}}"> {{$myProject->title}}</a>
                </h3>
                <p class="max-w-sm text-center text-black md:text-left">
                    {{$myProject->description}}
                </p>
            </div>
        </div>
        @endforeach

    </div>
</div>
