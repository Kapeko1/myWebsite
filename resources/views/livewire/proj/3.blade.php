@section("Introduction")
    My first large project and first-ever experience with C# and Unity. A real leap into the deep end for a first-year student. I was given a project of another game from this studio, and based on that, I was tasked with creating 'Zgadnij Suchara.' Hours of courses, YouTube videos, StackOverflow, and Unity forums later, I finally succeeded. I submitted the project without the functionality for ads and payment handling, but I was quite satisfied with the final result.
@endsection




@section("Key features")
    <div>
        <ul style="list-style-type: circle;">
            <li><strong>Type of data:</strong> All riddles are stored as GameObjects, each containing two strings - the question and the answer.</li>
            <li><strong>Letters shuffling:</strong> Initially, the game generated 3 rows of letters (a mix of correct and irrelevant ones), but due to the high difficulty level, I limited the letters to only the correct ones - which were still shuffled.</li>
            <li><strong>Saved Scores:</strong> The game stores all user information (gold and points) locally using SharedPreferences.</li>
        </ul>
    </div>@endsection




@section("Additional info")
   <p> The game is available on Android: <a class="hover:cursor-pointer text-blue-400" target="_blank" href="https://play.google.com/store/apps/details?id=com.simplicity.zgadnijsuchara&hl=pl">GooglePlay</a></p>
<p>I consider the game a co-work because I developed it while having access to another, similar game. Additionally, the mockup and all the graphics were created by someone else.</p>
@endsection

@section("Images")
    <div class="carousel relative"
         x-data="{
             current: 0,
             images: [
                 '{{ asset('resources/img/projects/3.png') }}',
                 '{{ asset('resources/img/projects/suchar/1.jpg') }}',
                 '{{ asset('resources/img/projects/suchar/2.jpg') }}',
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

