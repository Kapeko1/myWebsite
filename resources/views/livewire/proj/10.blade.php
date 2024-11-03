@section("Introduction")
<p>Edu4Food is a platform designed for learning about sustainable food as part of an EU project of the same name. At the time I was developing it, there was no content ready to be published, so the site currently consists mainly of the framework. This was the first time I implemented roles during the registration process, which determine the content users can access on the platform.</p>
@endsection

@section("Key features")
    <div>
        <ul style="list-style-type: circle;">
            <li><strong>Role-based Navigation:</strong> Depending on the role selected during registration, either <code>Youth</code> or <code>Worker</code>, users are presented with different navigation menus and page content.</li>
            <li><strong>Dynamic Routing:</strong> Page content is loaded dynamically using unique page IDs and routed accordingly to ensure each user sees the appropriate content.</li>
            <li><strong>Recipe Management:</strong> Recipes are stored in the database, and in the "See Also" section, other recipes are displayed, excluding the one currently open.</li>
            <li><strong>Account Management:</strong> Account management functionalities are implemented using <code>Laravel Jetstream</code>, providing features like authentication, registration, and user profiles.</li>
            <li><strong>Access Control:</strong> Unauthorized access is prevented by applying <code>Middleware</code>, ensuring that only authenticated users can access restricted areas of the platform.</li>
            <li><strong>Database Operations:</strong> All database interactions are handled using <code>Eloquent ORM</code>, allowing for smooth and efficient data manipulation within the application.</li>
        </ul>
    </div>

@endsection

@section("Images")
    <div class="carousel relative"
         x-data="{
             current: 0,
             images: [
                 '{{ asset('resources/img/projects/food/1.png', ) }}',
                 '{{ asset('resources/img/projects/food/2.png', ) }}',
                 '{{ asset('resources/img/projects/food/3.png', ) }}',
                 '{{ asset('resources/img/projects/food/4.png', ) }}',
                 '{{ asset('resources/img/projects/food/5.png', ) }}',
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




@section("Additional info")
    <p>The platform is available at the following link - <a class="hover:cursor-pointer text-blue-400" href="https://edu4food.erasmus.site/interactive-space/" target="_blank">Platform</a></p>
@endsection
