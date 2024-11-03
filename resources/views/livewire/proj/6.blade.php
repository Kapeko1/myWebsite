@section("Introduction")
<p>My first website fully developed independently using Laravel. It is part of a European project aimed at fostering skills in entrepreneurship and innovation. At the time of development, content was available for two modules - 3 and 5 - which were fully implemented</p>
@endsection




@section("Key features")
    <div>
        <ul style="list-style-type: circle;">
            <li><strong>Interactive Menu:</strong> The module selection menu dynamically updates the content on the right side using JavaScript. Each module is planned to feature a YouTube video, but since the videos have not yet been recorded, placeholders are currently used on the site.</li>
            <li><strong>Blade Templates:</strong> The content for each module is stored in individual <code>.blade.php</code> files, allowing for modular and maintainable code structure.</li>
            <li><strong>Navigation:</strong> The navigation menu for each module utilizes <code>AlpineJS</code> for dynamic interactions and smooth user experience.</li>
            <li><strong>Practical Exercises:</strong> Each module includes H5P-based interactive exercises (quiz set, hotspots, true/false, drag and drop, flash cards), which are embedded on the page via <code>iframe</code>. Lazy-loading was implemented to optimize performance and ensure smooth content loading.</li>
            <li><strong>Dynamic Routing:</strong> Routing is dynamic, and pages are loaded based on the unique ID of each module, displayed using a universal template.</li>
        </ul>
    </div>

@endsection




@section("Additional info")
    <p>The platform is available at the following link - <a class="hover:cursor-pointer text-blue-400" href="https://gary50.erasmus.site/platform/" target="_blank">Platform</a></p>
@endsection

@section("Images")
    <div class="carousel relative"
         x-data="{
             current: 0,
             images: [
                 '{{ asset('resources/img/projects/gary/1.png', ) }}',
                 '{{ asset('resources/img/projects/gary/2.png', ) }}',
                 '{{ asset('resources/img/projects/gary/3.png', ) }}',
                 '{{ asset('resources/img/projects/gary/4.png', ) }}',
                 '{{ asset('resources/img/projects/gary/5.png', ) }}',
                 '{{ asset('resources/img/projects/gary/6.png', ) }}',
             ],
             showModal: false,
             modalImage: '',
             touchStartX: 0,
             touchEndX: 0,
             handleSwipe() {
                 if (this.touchEndX < this.touchStartX) {
                     this.current = (this.current < this.images.length - 1) ? this.current + 1 : 0; // Swipe left
                 }
                 if (this.touchEndX > this.touchStartX) {
                     this.current = (this.current > 0) ? this.current - 1 : this.images.length - 1; // Swipe right
                 }
             }
         }">
        <div class="flex items-center justify-center relative">
            <template x-for="(image, index) in images" :key="index">
                <div x-show="current === index"
                     class="carousel-item"
                     @click="modalImage = image; showModal = true"
                     @touchstart="touchStartX = $event.changedTouches[0].screenX"
                     @touchend="touchEndX = $event.changedTouches[0].screenX; handleSwipe()">
                    <img :src="image" class="carousel-image cursor-pointer">
                </div>
            </template>
            <button @click="current = (current > 0) ? current - 1 : images.length - 1" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-200">
                <
            </button>
            <button @click="current = (current < images.length - 1) ? current + 1 : 0" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-200">
                >
            </button>
        </div>
        <div class="flex justify-center mt-4">
            <template x-for="(image, index) in images" :key="index">
                <span @click="current = index" class="cursor-pointer" x-bind:class="{'text-blue-500': current === index, 'text-gray-500': current !== index}">●</span>
            </template>
        </div>

        <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" style="display: none;">
            <img :src="modalImage" class="max-w-full max-h-full object-contain" @click.stop>

            <button @click="current = (current > 0) ? current - 1 : images.length - 1; modalImage = images[current]"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-200">
                <
            </button>

            <button @click="current = (current < images.length - 1) ? current + 1 : 0; modalImage = images[current]"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-200">
                >
            </button>

            <button @click="showModal = false" class="absolute top-4 right-4 text-white text-2xl">X</button>
        </div>
    </div>
@endsection
