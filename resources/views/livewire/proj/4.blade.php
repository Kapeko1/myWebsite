@section("Introduction")
    <h2>This is my first 100% independently written application in Flutter, which I managed to create during my second internship. It was through this project that I learned how to store data in an app, implement internationalization, write responsive screens, set up layouts, and so on.</h2>
@endsection
@section("Key features")
    <div>
        <ul style="list-style-type: circle;">
            <li><strong>Data Structure:</strong> Each topic contains questions, step-by-step lessons, visual storytelling, or checklists stored in Dart objects using <code>Map</code> or <code>List&lt;Map&gt;</code>, depending on the content.</li>
            <li><strong>Internationalization:</strong> Translations within the app are handled using the <code>kkkomelin/laravel-translatable-string-exporter</code> package for Laravel and <code>flutter_i18n</code>, what allows smooth language localization.</li>
            <li><strong>Data Persistence:</strong> The app stores checklist statuses using <code>SharedPreferences</code>, while user notes are persisted with <code>Hive</code>, a NoSQL database - <a href="https://github.com/isar/hive" class="text-blue-400 hover:cursor-pointer" target="_blank">GitHub Repository</a>.</li>
            <li><strong>Responsive Design:</strong> The app uses the <code>Sizer</code> package to dynamically adapt layouts for both tablets and phones, ensuring a consistent user experience across various screen sizes.</li>
            <li><strong>Custom Theme Implementation:</strong> Due to the use of <code>DaisyUI</code>, I had to create a custom theme to adjust the color palette according to the partners' requirements.</li>
            <li>For this application, I also created several parsers in Python, which allowed for seamless conversion of .docx files into Dart Maps, depending on the structure.</li>
        </ul>
    </div>

@endsection




@section("Additional info")
    <h2>One of the earlier versions of the app is publicly available on <a class="hover:cursor-pointer text-blue-400" href="https://play.google.com/store/apps/details?id=eu.dcnet.open4u&hl=en" target="_blank"> GooglePlay</a>. On iOS, the app is only available through TestFlight.</h2>
    <h2>As of the time of writing, this version does not yet include internationalization, and certain layout elements are still misaligned.</h2>
@endsection

@section("Images")
    <div class="carousel relative"
         x-data="{
             current: 0,
             images: [
                 '{{ Vite::asset('resources/img/projects/open4u/0.png', ) }}',
                 '{{ Vite::asset('resources/img/projects/open4u/1.png', ) }}',
                 '{{ Vite::asset('resources/img/projects/open4u/2.png', ) }}',
                 '{{ Vite::asset('resources/img/projects/open4u/3.png', ) }}',
                 '{{ Vite::asset('resources/img/projects/open4u/4.png', ) }}',
                 '{{ Vite::asset('resources/img/projects/open4u/5.png', ) }}',
                 '{{ Vite::asset('resources/img/projects/open4u/6.png', ) }}',
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
