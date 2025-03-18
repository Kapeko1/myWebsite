@include("livewire.proj." . $ID)
<div class="min-h-screen bg-gradient-to-br from-gray-900 to-gray-800 text-white py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ route('projects') }}" class="inline-flex items-center text-blue-400 hover:text-blue-300 mb-8 transition duration-300">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Back to Projects
        </a>

        <h1 class="text-4xl sm:text-5xl font-bold text-center mb-12 text-blue-500">{{ $projects[$ID] }}</h1>

        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden mb-12">
            <div class="p-8">
                <h2 class="text-2xl font-semibold text-blue-400 mb-4">About</h2>
                <div class="prose prose-lg text-gray-300">
                    @yield("Introduction")
                </div>
            </div>
        </div>

        <div class="w-full mb-12 bg-gray-800 rounded-lg shadow-lg">
            <div class="p-8">
                <h2 class="text-2xl font-semibold text-blue-400 mb-4">Images</h2>
                @yield("Images")
            </div>
        </div>

        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden mb-12">
            <div class="p-8">
                <h2 class="text-2xl font-semibold text-blue-400 mb-4">Key Features</h2>
                <div class="prose prose-lg text-gray-300">
                    @yield("Key features")
                </div>
            </div>
        </div>

        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
            <div class="p-8">
                <h2 class="text-2xl font-semibold text-blue-400 mb-4">Additional Information</h2>
                <div class="prose prose-lg text-gray-300">
                    @yield("Additional info")
                </div>
            </div>
        </div>
    </div>
</div>
