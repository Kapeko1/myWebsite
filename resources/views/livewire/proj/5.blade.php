@section("Introduction")
<p>It is an educational platform for entrepreneurs and freelancers. I was responsible for internationalization, adding content for topics, UI design (based on feedback from partners), and functionality improvements, such as refining how the survey feature works.</p>
@endsection




@section("Key features")
    <div>
        <ul style="list-style-type: circle;">
            <li><strong>Survey-based Feedback:</strong> Based on the survey results, users receive personalized feedback and recommended topics tailored to their needs.</li>
            <li><strong>Admin Dashboard:</strong> Users registered as administrators have access to a dedicated navigation view where they can add events for freelancers. These events are displayed on the main view and are stored in the database.</li>
            <li><strong>User Interaction:</strong> Registered users can view other users and their projects, and they can initiate contact via the <code>MailTo()</code> function directly from the platform.</li>
            <li><strong>Account Management:</strong> Account management functionalities are implemented using <code>Laravel Jetstream</code>, providing features like authentication, registration, and user profiles.</li>
            <li><strong>Access Control:</strong> Unauthorized access is prevented by applying <code>Middleware</code>, ensuring that only authenticated users can access restricted areas of the platform.</li>
            <li><strong>Database Operations:</strong> All database interactions are handled using <code>Eloquent ORM</code>, allowing for smooth and efficient data manipulation within the application.</li>
        </ul>
    </div>

@endsection




@section("Additional info")
    <p>Currently, the site does not require email confirmation after registration, so you can register with any email.</p>
    <p>The platform is available at the following link - <a class="hover:cursor-pointer text-blue-400" href="https://digifreelancer.erasmus.site/incubator/login" target="_blank">Incubator</a></p>
@endsection

@section("Images")
    <div class="carousel relative"
         x-data="{
             current: 0,
             images: [
                 '{{ asset('resources/img/projects/digi/1.png', ) }}',
                 '{{ asset('resources/img/projects/digi/2.png', ) }}',
                 '{{ asset('resources/img/projects/digi/3.png', ) }}',
                 '{{ asset('resources/img/projects/digi/4.png', ) }}',
                 '{{ asset('resources/img/projects/digi/5.png', ) }}',
                 '{{ asset('resources/img/projects/digi/6.png', ) }}',
                 '{{ asset('resources/img/projects/digi/7.png', ) }}',
                 '{{ asset('resources/img/projects/digi/8.png', ) }}',
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
