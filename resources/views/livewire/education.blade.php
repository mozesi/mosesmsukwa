<div>
    <div class="container flex flex-col-reverse md:flex-row items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
    @foreach($myEducations as $myEducation)
        <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
            <div class="rounded-l-full bg-red-300 md:bg-transparent">
                <div class="flex items-center space-x-2">
                    <div class="px-4 py-2 rext-white rounded-full md:py-1 bg-red-500">
                        >>
                    </div>
                    <h3 class="text-base font-bold md:mb-4 md:hidden">
                        {{$myEducation->name}}
                    </h3>
                </div>
            </div>
            <div>
                <h3 class="hidden mb-4 text-lg font-bold md:block">
                    {{$myEducation->name}}
                </h3>
                <p class="max-w-sm text-center text-black md:text-left">
                    Insititution  : <a href="{{$myEducation->provide_link}}">{{$myEducation->provider}}</a>
                </p>
                <p class="max-w-sm text-center text-black md:text-left">
                    Start Date    : {{$myEducation->start_date}}
                </p>
                <p class="max-w-sm text-center text-black md:text-left">
                    End Date    : {{$myEducation->end_date}}
                </p>
                <p class="max-w-sm text-center text-black md:text-left">
                    Details Of study    : {{$myEducation->description}}
                </p>
            </div>
        </div>
    @endforeach
    </div>
</div>
