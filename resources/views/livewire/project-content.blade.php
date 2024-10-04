@include("livewire.proj." . $ID)
<div class="max-w-7xl mx-auto px-4">
    <div class="w-full">
        <h1 class="text-3xl text-center font-bold my-4">{{ $projects[$ID] }}</h1>
    </div>
    <div class="flex flex-col md:flex-row gap-4">
        <div class="bg-white p-6 rounded-2xl flex-1 border-gray-400 border-solid border-2">
            <h2 class="text-center font-bold">About</h2>
            @yield('Introduction')
        </div>
        <div class="bg-white p-6 rounded-2xl flex-1 border-gray-400 border-solid border-2 px-6">
            <h2 class="text-center font-bold">Images</h2>
            @yield('Images')
        </div>
    </div>
    <div class="h-6"></div>

    <div class="bg-white p-6 rounded-2xl w-full border-gray-400 border-solid border-2 px-6 list-inside">
        <h2 class="text-center font-bold">Key information</h2>
        @yield('Key features')
    </div>

    <div class="h-6"></div>

    <div class="bg-white p-6 rounded-2xl w-full border-gray-400 border-solid border-2 px-6">
        <h2 class="text-center font-bold">Additional information</h2>
        @yield('Additional info')
    </div>
</div>
