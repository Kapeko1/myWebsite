<div class="container mx-auto px-4 py-8" x-data="{ selectedTech: 'all' }">
    <h1 class="text-center text-3xl font-bold mb-10">My Projects</h1>

    <div class="flex flex-wrap justify-center space-x-4 mb-10">
        <button @click="selectedTech = 'all'"
                :class="selectedTech === 'all' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-800'"
                class="px-4 py-2 rounded mb-2">
            All
        </button>
        <button @click="selectedTech = 'Unity'"
                :class="selectedTech === 'Unity' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-800'"
                class="px-4 py-2 rounded mb-2">
            Unity
        </button>
        <button @click="selectedTech = 'Java'"
                :class="selectedTech === 'Java' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-800'"
                class="px-4 py-2 rounded mb-2">
            Java
        </button>
        <button @click="selectedTech = 'Flutter'"
                :class="selectedTech === 'Flutter' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-800'"
                class="px-4 py-2 rounded mb-2">
            Flutter
        </button>
        <button @click="selectedTech = 'Laravel'"
                :class="selectedTech === 'Laravel' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-800'"
                class="px-4 py-2 rounded mb-2">
            Laravel
        </button>
        <button @click="selectedTech = 'Python'"
                :class="selectedTech === 'Python' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-800'"
                class="px-4 py-2 rounded mb-2">
            Python
        </button>
        <button @click="selectedTech = 'co-work'"
                :class="selectedTech === 'co-work' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-gray-800'"
                class="px-4 py-2 rounded mb-2">
            Co-Work
        </button>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden project"
             x-show="selectedTech === 'all' || selectedTech === 'Unity'"
             data-tech="Unity" data-cowork="false">
            <img src="{{Vite::asset('resources/img/projects/1.png')}}" alt="Project 1" class="w-full h-48">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Obecność</h3>
                <p class="text-gray-700 mb-4 tech">Unity C#</p>
                <p class="text-gray-700 mb-4 tech">Event Planner and Attendance Log.</p>
                <a href="{{ route('project-content', ['id' => 1]) }}" wire:navigate class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden project"
             x-show="selectedTech === 'all' || selectedTech === 'Java'"
             data-tech="Java" data-cowork="false">
            <img src="{{Vite::asset('resources/img/projects/2.png')}}" alt="Project 2" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Snake</h3>
                <p class="text-gray-700 mb-4 tech">Java</p>
                <p class="text-gray-700 mb-4 ">A snake game where an enemy appears after reaching a certain number of points.</p>
                <a href="{{ route('project-content', ['id' => 2]) }}" wire:navigate class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden project"
             x-show="selectedTech === 'all' || selectedTech === 'Unity' || selectedTech === 'co-work'"
             data-tech="Unity" data-cowork="true">
            <img src="{{Vite::asset('resources/img/projects/3.png')}}" alt="Project 3" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Zgadnij Suchara</h3>
                <p class="text-gray-700 mb-4 tech">Unity C# (co-work)</p>
                <p class="text-gray-700 mb-4">A mobile game where you solve funny word puzzles.</p>
                <a href="{{ route('project-content', ['id' => 3]) }}" wire:navigate class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden project"
             x-show="selectedTech === 'all' || selectedTech === 'Flutter'"
             data-tech="Flutter" data-cowork="false">
            <img src="{{Vite::asset('resources/img/projects/4.png')}}" alt="Project 4" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Open4u</h3>
                <p class="text-gray-700 mb-4 tech">Flutter</p>
                <p class="text-gray-700 mb-4">A mobile application designed to teach new approaches to working with employees.</p>
                <a href="{{ route('project-content', ['id' => 4]) }}" wire:navigate class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden project"
             x-show="selectedTech === 'all' || selectedTech === 'Laravel' || selectedTech === 'co-work'"
             data-tech="Laravel" data-cowork="true">
            <img src="{{Vite::asset('resources/img/projects/9.png')}}" alt="Project 4" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">DigiFreelancer</h3>
                <p class="text-gray-700 mb-4 ">Laravel (co-work)</p>
                <p class="text-gray-700 mb-4">An educational platform about business</p>
                <a href="{{ route('project-content', ['id' => 5]) }}" wire:navigate class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden project"
             x-show="selectedTech === 'all' || selectedTech === 'Laravel'"
             data-tech="Laravel" data-cowork="false">
            <img src="{{Vite::asset('resources/img/projects/10.png')}}" alt="Project 4" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Gary5.0</h3>
                <p class="text-gray-700 mb-4 ">Laravel</p>
                <p class="text-gray-700 mb-4">An educational platform about entrepreneurship.</p>
                <a href="{{ route('project-content', ['id' => 6]) }}" wire:navigate class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden project"
             x-show="selectedTech === 'all' || selectedTech === 'Python'"
             data-tech="Python" data-cowork="false">
            <img src="{{Vite::asset('resources/img/projects/11.png')}}" alt="Project 4" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Discord killbot</h3>
                <p class="text-gray-700 mb-4 ">Python</p>
                <p class="text-gray-700 mb-4">An automated application that monitors an API for changes.</p>
                <a href="{{ route('project-content', ['id' => 7]) }}" wire:navigate class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden project"
             x-show="selectedTech === 'all' || selectedTech === 'Flutter' || selectedTech === 'co-work'"
             data-tech="Flutter" data-cowork="true">
            <img src="{{Vite::asset('resources/img/projects/5.png')}}" alt="Project 4" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">ProsperBSR</h3>
                <p class="text-gray-700 mb-4 ">Flutter (co-work)</p>
                <p class="text-gray-700 mb-4">Prosper is an app designed to support refugees in searching for job.</p>
                <a href="{{ route('project-content', ['id' => 8]) }}" wire:navigate class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden project"
             x-show="selectedTech === 'all' || selectedTech === 'Flutter' || selectedTech === 'co-work'"
             data-tech="Flutter" data-cowork="true">
            <img src="{{Vite::asset('resources/img/projects/6.png')}}" alt="Project 4" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">BrandApp</h3>
                <p class="text-gray-700 mb-4 ">Flutter (co-work)</p>
                <p class="text-gray-700 mb-4">An educational application about sustainable fashion.</p>
                <a href="{{ route('project-content', ['id' => 9]) }}" wire:navigate class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden project"
             x-show="selectedTech === 'all' || selectedTech === 'Laravel'"
             data-tech="Laravel" data-cowork="false">
            <img src="{{Vite::asset('resources/img/projects/7.png')}}" alt="Project 4" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">Edu4Food</h3>
                <p class="text-gray-700 mb-4 ">Laravel</p>
                <p class="text-gray-700 mb-4">An educational platform about sustainable food.</p>
                <a href="{{ route('project-content', ['id' => 10]) }}" wire:navigate class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg overflow-hidden project"
             x-show="selectedTech === 'all' || selectedTech === 'Laravel'"
             data-tech="Laravel" data-cowork="false">
            <img src="{{Vite::asset('resources/img/projects/8.png')}}" alt="Project 4" class="w-full h-48 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold mb-2">M4I</h3>
                <p class="text-gray-700 mb-4 ">Laravel</p>
                <p class="text-gray-700 mb-4">An educational platform about mental health for refugees.</p>
                <a href="{{ route('project-content', ['id' => 11]) }}" wire:navigate class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View Details</a>
            </div>
        </div>
    </div>
</div>
