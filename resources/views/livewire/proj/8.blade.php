@section("Introduction")
<h2>ProsperBSR was the application where I began my journey with Flutter. Its structure was already in place, and my first task was to add content to the menu. Later, I was responsible for expanding the app with completely new features, such as micro-lessons and recommended practices</h2>
@endsection

@section("Key features")
    <div>
        <ul style="list-style-type: circle;">
            <li><strong>Data Structure:</strong> Each module contains data stored in Dart objects using <code>Map</code> or <code>List&lt;Map&gt;</code>, depending on the content.</li>
            <li><strong>Internationalization:</strong> Translations within the app are handled using the <code>kkkomelin/laravel-translatable-string-exporter</code> package for Laravel and <code>flutter_i18n</code>, what allows smooth language localization.</li>
            <li>For this application, I also created several parsers in Python, which allowed for seamless conversion of .docx files into Dart Maps, depending on the structure.</li>
        </ul>
    </div>

@endsection




@section("Additional info")
    <h2>Due to the application's availability only on Android, the images are sourced from the official app page on <a href="https://play.google.com/store/apps/details?id=eu.dcnet.prosperbsr" target="_blank" class="hover:cursor-pointer text-blue-400">Google Play</a></h2>
    <h2> The application was very simple, with no interactive elements, no local storage of dynamic data on the device, and no internet usage - just static educational content.</h2>
@endsection

@section("Images")
    <div class="carousel relative"
         x-data="{
             current: 0,
             images: [
                 '{{ Vite::asset('resources/img/projects/prosper/1.png') }}',
                 '{{ Vite::asset('resources/img/projects/prosper/2.png') }}',
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

