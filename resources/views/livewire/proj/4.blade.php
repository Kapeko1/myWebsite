@section("Introduction")
    <p>This is my first 100% independently written application in Flutter, which I managed to create during my second internship. It was through this project that I learned how to store data in an app, implement internationalization, write responsive screens, set up layouts, and so on.</p>
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
    <p>One of the earlier versions of the app is publicly available on <a class="hover:cursor-pointer text-blue-400" href="https://play.google.com/store/apps/details?id=eu.dcnet.open4u&hl=en" target="_blank"> GooglePlay</a>. On iOS, the app is only available through TestFlight.</p>
    <p>As of the time of writing, this version does not yet include internationalization, and certain layout elements are still misaligned.</p>
@endsection

@section("Images")
    <div class="carousel relative "
         x-data="{
         current: 0,
         images: [
             '{{asset('img/projects/open4u/0.png') }}',
             '{{asset('img/projects/open4u/1.png') }}',
             '{{asset('img/projects/open4u/2.png') }}',
             '{{asset('img/projects/open4u/3.png') }}',
             '{{asset('img/projects/open4u/4.png') }}',
             '{{asset('img/projects/open4u/5.png') }}',
             '{{asset('img/projects/open4u/6.png') }}',
         ],
         showModal: false,
         modalImage: '',
         touchStartX: 0,
         touchEndX: 0,
         handleSwipe() {
             if (this.touchEndX < this.touchStartX) {
                 this.current = (this.current < this.images.length - 1) ? this.current + 1 : 0;
             }
             if (this.touchEndX > this.touchStartX) {
                 this.current = (this.current > 0) ? this.current - 1 : this.images.length - 1;
             }
         }
     }">
        <!-- Main carousel container -->
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

            <!-- Carousel navigation buttons -->
            <button @click="current = (current > 0) ? current - 1 : images.length - 1" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-200">
                &lt;
            </button>
            <button @click="current = (current < images.length - 1) ? current + 1 : 0" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-200">
                &gt;
            </button>
        </div>

        <!-- Carousel indicator dots -->
        <div class="flex justify-center mt-4">
            <template x-for="(image, index) in images" :key="index">
                <span @click="current = index" class="cursor-pointer" :class="{'text-blue-500': current === index, 'text-gray-500': current !== index}">●</span>
            </template>
        </div>

        <!-- Modal for enlarged image view -->
        <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <img :src="modalImage" class="max-w-full max-h-full object-contain" @click.stop>

            <!-- Modal navigation buttons -->
            <button @click="current = (current > 0) ? current - 1 : images.length - 1; modalImage = images[current]"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-200">
                &lt;
            </button>
            <button @click="current = (current < images.length - 1) ? current + 1 : 0; modalImage = images[current]"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-200">
                &gt;
            </button>

            <!-- Close button -->
            <button @click="showModal = false" class="absolute top-4 right-4 text-white text-2xl">X</button>
        </div>
    </div>

@endsection
