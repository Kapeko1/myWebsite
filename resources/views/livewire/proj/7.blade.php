@section("Introduction")
<p>
    Before my second internship, I wasn’t much of a fan of Python. However, without it and its useful libraries, converting .docx files into Dart maps would have been extremely time-consuming. After gaining more experience, I decided to develop a bot for myself and my friends from the online game Albion. The bot allows those who aren’t currently playing to track the activity of those who are in the game.</p>
@endsection




@section("Key features")
    <div>
        <ul style="list-style-type: circle;">
            <li><strong>Tracking Command:</strong> The bot waits for an ID to be provided via the <code>/track</code> command. Once the ID is received, the bot starts monitoring the API endpoints every minute using <code>aiohttp</code> for data retrieval.</li>
            <li><strong>Data Sorting:</strong> The bot sorts the data by the time of occurrence, ensuring that the most recent events are processed first.</li>
            <li><strong>Kill Notification:</strong> When a new kill is detected in the API, the bot sends a notification to a specific channel ID. Each message is properly formatted by extracting relevant information from the API.</li>
            <li><strong>Inventory Visualization:</strong> The message includes an image created with the <code>Pillow</code> library, displaying the victim's inventory. Icons for each item are fetched from the game's official API, and quantities are added using <code>ImageDraw</code> from Pillow.</li>
        </ul>
    </div>

@endsection




@section("Additional info")
    <p>
        Since this is solely my personal project, the code is available on GitHub here - <a href="https://github.com/Kapeko1/dc_bot" target="_blank" class="hover:cursor-pointer text-blue-400">dc_bot</a></p>
    <p>For security reasons, I do not store any authentication codes, tokens, or .env files in any repository, whether private or public.</p>
@endsection


@section("Images")
    <div class="carousel relative"
         x-data="{
             current: 0,
             images: [
                 '{{ asset('resources/img/projects/bot/1.png') }}',
                 '{{ asset('resources/img/projects/bot/2.png') }}',
                 '{{ asset('resources/img/projects/bot/3.png') }}',
                 '{{ asset('resources/img/projects/bot/4.png') }}',
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
