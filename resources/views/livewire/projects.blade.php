<div class="min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-white py-20" x-data="{ selectedTech: 'all' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl sm:text-5xl font-bold text-center mb-16 text-blue-500">My Projects</h1>

        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button @click="selectedTech = 'all'" :class="{'bg-blue-600': selectedTech === 'all', 'bg-gray-700': selectedTech !== 'all'}" class="px-6 py-2 rounded-full text-sm font-semibold transition duration-300 hover:bg-blue-500">All</button>
            <button @click="selectedTech = 'Unity'" :class="{'bg-blue-600': selectedTech === 'Unity', 'bg-gray-700': selectedTech !== 'Unity'}" class="px-6 py-2 rounded-full text-sm font-semibold transition duration-300 hover:bg-blue-500">Unity</button>
            <button @click="selectedTech = 'Java'" :class="{'bg-blue-600': selectedTech === 'Java', 'bg-gray-700': selectedTech !== 'Java'}" class="px-6 py-2 rounded-full text-sm font-semibold transition duration-300 hover:bg-blue-500">Java</button>
            <button @click="selectedTech = 'Flutter'" :class="{'bg-blue-600': selectedTech === 'Flutter', 'bg-gray-700': selectedTech !== 'Flutter'}" class="px-6 py-2 rounded-full text-sm font-semibold transition duration-300 hover:bg-blue-500">Flutter</button>
            <button @click="selectedTech = 'Laravel'" :class="{'bg-blue-600': selectedTech === 'Laravel', 'bg-gray-700': selectedTech !== 'Laravel'}" class="px-6 py-2 rounded-full text-sm font-semibold transition duration-300 hover:bg-blue-500">Laravel</button>
            <button @click="selectedTech = 'Python'" :class="{'bg-blue-600': selectedTech === 'Python', 'bg-gray-700': selectedTech !== 'Python'}" class="px-6 py-2 rounded-full text-sm font-semibold transition duration-300 hover:bg-blue-500">Python</button>
            <button @click="selectedTech = 'co-work'" :class="{'bg-blue-600': selectedTech === 'co-work', 'bg-gray-700': selectedTech !== 'co-work'}" class="px-6 py-2 rounded-full text-sm font-semibold transition duration-300 hover:bg-blue-500">Co-Work</button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($projects as $project)
                <div x-show="selectedTech === 'all' || selectedTech === '{{ $project['tech'] }}' || (selectedTech === 'co-work' && {{ $project['cowork'] ? 'true' : 'false' }})"
                     class="bg-gray-800 rounded-lg overflow-hidden shadow-lg transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                    <div class="relative">
                        <img src="{{asset('img/projects/' . $project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-48 object-cover">
                        <div class="absolute top-0 right-0 bg-blue-600 text-white px-3 py-1 rounded-bl-lg text-xs font-semibold">
                            {{ $project['tech'] }}
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-blue-400 mb-2">{{ $project['title'] }}</h3>
                        <p class="text-sm text-gray-400 mb-4">
                            @if($project['cowork'])
                                <span class="inline-block bg-green-600 text-white px-2 py-1 rounded-full text-xs mr-2">Co-Work</span>
                            @endif
                            {{ $project['tech'] }}
                        </p>
                        <p class="text-gray-300 mb-4">{{ $project['description'] }}</p>
                        <a href="{{ route('project-content', ['id' => $project['id']]) }}" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-full text-sm font-semibold hover:bg-blue-500 transition duration-300 transform hover:scale-105">
                            View Details
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
