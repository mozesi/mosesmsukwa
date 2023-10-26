<div>
    <div class="container flex flex-col-reverse md:flex-row items-center px-6 mx:auto mt-10 space-y-0 md:space-y-0">
        <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
            <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
                Hi! my name is {{$myProfile->first_name}} {{$myProfile->last_name}}
             </h1>
             <h1 class="max-w-sm text-center text md:text-left">
                 {{$myProfile->bio}}
             </h1>
             <div class="flex justify-center md:justify-start">
                 <a href="#" class=" hidden md:block p-3 px-6 pt-2 text-white bg-red-500 rounded-full baseline hover:bg-red-300">
                     Download resume
                 </a>
             </div>
        </div>
        <div class="md:w-1/2">
            <img src="storage/{{$myProfile->profile_picture}}" alt="{{$myProfile->first_name}}{{$myProfile->last_name}}">
        </div>
    </div>
    <div class="container flex flex-col-reverse md:flex-row items-center px-6 mx:auto mt-10 space-y-0 md:space-y-0">
        <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
            <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
                My recent Projects
            </h1>
            <p class="max-w-sm text-center text-black md:text-left">
                Below is the list of my projects.
            </p>
        </div>
    </div>
</div>


