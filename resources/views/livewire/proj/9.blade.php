@section("Introduction")

    Brand is an educational app focused on sustainable fashion. I worked on it alongside another developer who had already created the initial framework of the application. Due to issues with the app's release, I extended it by adding functionality to load .pdf files both from HTTP sources and locally, animations in the "Materials" section, and other graphical solutions.
@endsection




@section("Key features")
    <div>
        <ul style="list-style-type: circle;">
            <li><strong>PDF Viewing:</strong> All PDF files are displayed in the app using <code>flutter_pdfview</code>, providing a smooth in-app reading experience.</li>
            <li><strong>Material Animations:</strong> Animations in Material components are implemented using <code>flutter_animate</code>, with the offset changing based on the time interval to create dynamic transitions.</li>
            <li><strong>File Downloading:</strong> Larger PDF files are downloaded from the project website, preceded by a special pop-up warning about the download. Smaller PDFs, such as those from newsletters, are stored locally for quicker access.</li>
            <li><strong>Data Structure:</strong> Each module contains data stored in Dart objects using <code>Map</code> or <code>List&lt;Map&gt;</code>, depending on the content.</li>
            <li><strong>Internationalization:</strong> Translations within the app are handled using the <code>kkkomelin/laravel-translatable-string-exporter</code> package for Laravel and <code>flutter_i18n</code>, what allows smooth language localization.</li>
        </ul>
    </div>

@endsection




@section("Additional info")
    <h2>The application is available on both <a href="https://apps.apple.com/pl/app/brand-mobile-fashionable-app/id6503604447?l=pl" target="_blank" class="hover:cursor-pointer text-blue-400">iOS</a> and <a href="https://play.google.com/store/apps/details?id=eu.dcnet.brand.brand" target="_blank" class="hover:cursor-pointer text-blue-400">Android</a> platforms.</h2>
@endsection

@section("Images")
    <div class="carousel relative"
         x-data="{
             current: 0,
             images: [
                 '{{ Vite::asset('resources/img/projects/brand/1.png') }}',
                 '{{ Vite::asset('resources/img/projects/brand/2.png') }}',
                 '{{ Vite::asset('resources/img/projects/brand/3.png') }}',
                 '{{ Vite::asset('resources/img/projects/brand/4.png') }}',
                 '{{ Vite::asset('resources/img/projects/brand/5.png') }}',
                 '{{ Vite::asset('resources/img/projects/brand/6.png') }}'
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
                     class="carousel-item object-contain"
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
