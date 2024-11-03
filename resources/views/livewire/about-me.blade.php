<div class="min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-white py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl sm:text-5xl font-bold text-center mb-16 text-blue-500">My Journey</h1>

        <div class="relative">
            <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-blue-500"></div>

            @foreach($events as $index => $event)
                <div class="relative mb-16" x-data="{ show: false }" x-intersect="show = true">
                    <div class="flex items-center mb-4"
                         x-show="show"
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 transform scale-95"
                         x-transition:enter-end="opacity-100 transform scale-100">
                        <div class="bg-blue-500 rounded-full w-12 h-12 flex items-center justify-center z-10">
                            <img src="{{ Vite::asset('resources/img/' . $event['icon']) }}" alt="{{ $event['title'] }}" class="w-6 h-6">
                        </div>
                        <div class="ml-4 flex-grow">
                            <h3 class="text-xl font-semibold text-blue-400">{{ $event['title'] }}</h3>
                            <p class="text-gray-400">{{ $event['date'] }}</p>
                        </div>
                    </div>
                    <div class="ml-16 bg-gray-800 p-6 rounded-lg shadow-lg"
                         x-show="show"
                         x-transition:enter="transition ease-out duration-500 delay-300"
                         x-transition:enter-start="opacity-0 transform translate-y-4"
                         x-transition:enter-end="opacity-100 transform translate-y-0">
                        <p class="text-gray-300">{{ $event['content'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
