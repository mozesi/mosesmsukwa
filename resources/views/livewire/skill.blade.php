<div>
    <div class="container flex flex-row items-center justify-between px-6 py-24 ms-auto space-y-12 md:py-12 md:flex-row md:space-y-0" >
        <div class="flex flex-row space-x-12">
            @foreach ($mySkills as $mySkill )
            <img height="150px" width="150px" src="storage/{{$mySkill->skill_image}}" alt="{{$mySkill->skill_name}}">
            @endforeach
       </div>
    </div>
</div>
