<div>
    <section class="min-h-screen py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-blue-50 to-indigo-100">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 animate-fade-in-down">
                    Professional Experience
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    A journey through my professional milestones and achievements
                </p>
            </div>

            <!-- Experience Timeline -->
            <div class="relative">
                <!-- Vertical Line -->
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-indigo-300"></div>

                <!-- Experience Items -->
                <div class="space-y-12">
                    @foreach($myExperience as $experience)
                        @if($experience->id%2 > 0)
                            <!-- Experience -->
                            <div class="relative flex flex-col md:flex-row-reverse items-center group">
                                <div class="md:w-1/2 md:pl-8 mb-6 md:mb-0">
                                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                        <h3 class="text-2xl font-semibold text-indigo-600">{{$experience->job_description}}</h3>
                                        <p class="text-gray-600 font-medium">{{$experience->employer}}.</p>
                                        <p class="text-gray-500 text-sm mb-4">{{$experience->start_date}} - {{$experience->end_date}}</p>
                                        <ul class="list-disc list-inside text-gray-600">
                                            <li>{{$experience->key_achievements}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-indigo-600 border-4 border-white"></div>
                                <div class="md:w-1/2 md:pl-8"></div>
                            </div>
                        @else
                            <!-- Experience -->
                            <div class="relative flex flex-col md:flex-row items-center group">
                                <div class="md:w-1/2 md:pr-8">
                                    <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                        <h3 class="text-2xl font-semibold text-indigo-600">{{$experience->job_description}}</h3>
                                        <p class="text-gray-600 font-medium">{{$experience->employer}}.</p>
                                        <p class="text-gray-500 text-sm mb-4">{{$experience->start_date}} - {{$experience->end_date}}</p>
                                        <ul class="list-disc list-inside text-gray-600">
                                            <li>{{$experience->key_achievements}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-indigo-600 border-4 border-white"></div>
                                <div class="md:w-1/2 md:pl-8"></div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-12">
                <a href="#contact" class="inline-block bg-indigo-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-indigo-700 transition-colors duration-300 shadow-lg hover:shadow-xl">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

    <!-- Tech stack -->
    <section id="contact" class="py-20">
        <div class="max-w-6xl mx-auto px-4">
            @livewire('skill')
        </div>
    </section>

</div>
