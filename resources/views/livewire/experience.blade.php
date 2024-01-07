<div>
    <div class="container flex flex-col-reverse md:flex-row items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
    @foreach($myExperience as $experience)
        <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
            <div class="rounded-l-full bg-red-300 md:bg-transparent">
                <div class="flex items-center space-x-2">
                    <div class="px-4 py-2 rext-white rounded-full md:py-1 bg-red-500">
                        {{$experience}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
