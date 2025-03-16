<div>
    <div class="container flex flex-row items-center justify-between px-6  ms-auto  md:flex-row md:space-y-0" >
        <div class="flex flex-row space-x-12">
            <ul>
                <h2 class="text-3xl font-bold text-center mb-12 align-middle">Tech stack</h2>
                <h4 class="text-2xl font-mono text-center mb-12 align-middle" >Over the last 6 years, I've had the great priviledge of working with some amazing great technologies.</h4>
            </ul>
        </div>
    </div>
    <div class="container flex flex-row items-center justify-between px-6 py-24 ms-auto space-y-12 md:py-12 md:flex-row md:space-y-0" >
        <div class="flex flex-row space-x-12">

                <div class="overflow-hidden w-full">
                    <div class="marquee flex whitespace-nowrap w-[200%]">
                        <!-- First set of images -->
                        <div class="flex space-x-4">
                            @foreach ($mySkills as $mySkill )
                                <img  class="grayscale bg-white" height="200px" width="200px" src="storage/{{$mySkill->skill_image}}" alt="{{$mySkill->skill_name}}">
                            @endforeach
                        </div>
                        <!-- Duplicate set for seamless scrolling -->
                        <div class="flex space-x-4">
                            @foreach ($mySkills as $mySkill )
                                <img  class="grayscale bg-white" height="200px" width="200px" src="storage/{{$mySkill->skill_image}}" alt="{{$mySkill->skill_name}}">
                            @endforeach
                        </div>
                    </div>
                </div>
       </div>
    </div>
</div>
