<div>
    <div class="container flex flex-col-reverse md:flex-row items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
        <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
            <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
                Hi! my name is {{$myProfile->first_name}} {{$myProfile->last_name}}
             </h1>
             <h1 class="max-w-sm text-center text md:text-left">
                {{$myProfile->bio}}

             </h1>
             <div class="flex justify-center md:justify-start">
                 <button wire:click="downloadResume" class=" hidden md:block p-3 px-6 pt-2 text-white bg-red-500 rounded-full baseline hover:bg-red-300">
                     Download resume
                 </button>
             </div>
        </div>
        <div class="md:w-1/2">
            <img src="storage/{{$myProfile->profile_picture}}" alt="{{$myProfile->first_name}}{{$myProfile->last_name}}">
        </div>
    </div>
    <div class="container flex flex-col px-4 mx-auto mt-5 space-y-12 md:space-y-0 md:flex-row">
        <div class="flex flex-col space-y-12 md:w-1/2">
            <h2 class="max-w-md text-4xl font-bold text-center md:text-left">
                My recent Projects
            </h2>
            <p class="max-w-sm text-center text-black md:text-left">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>
        <div class="flex flex-col space-y-8 md:w-1/2">
            @foreach($recentProjects as $recentProject)
            <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                <div class="rounded-l-full bg-red-300 md:bg-transparent">
                    <div class="flex items-center space-x-2">
                        <div class="px-4 py-2 rext-white rounded-full md:py-1 bg-red-500">
                            0{{$recentProject->id}}
                        </div>
                        <h3 class="text-base font-bold md:mb-4 md:hidden">
                            <a href="{{$recentProject->project_link}}" alt="{{$recentProject->project_link}}"> {{$recentProject->title}}</a>
                        </h3>
                    </div>
                </div>
                <div>
                    <h3 class="hidden mb-4 text-lg font-bold md:block">
                       <a href="{{$recentProject->project_link}}"> {{$recentProject->title}}</a>
                    </h3>
                    <p class="max-w-sm text-center text-black md:text-left">
                        {{$recentProject->description}}
                    </p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <livewire:contact/>
</div>



