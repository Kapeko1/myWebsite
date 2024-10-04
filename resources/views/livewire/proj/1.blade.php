@section("Introduction")
    The "Obecność" project was created with the goal of providing me and my friends with an interactive lecture planner. The app allows users to save dates and times for classes, meetings, and other activities, and track their attendance or absence. It also offers quick access to specific activities using search functionality, and users can view the current activity at a glance.
@endsection

@section("Key features")
    <ul style="list-style-type: circle;">
        <li><strong>Activity Management:</strong> Activities are stored as <code>Lecture</code> JSON objects containing fields for name, start date, end date, and status.</li>
        <li><strong>Data Persistence:</strong> Activities are serialized to a JSON file using Unity's <code>JsonUtility</code> class for data storage and retrieval.</li>
        <li><strong>UI Binding:</strong> Dynamic UI elements (e.g., buttons, labels) are linked to <code>Lecture</code> object fields through <code>TMP_InputField</code> and <code>TextMeshProUGUI</code> components.</li>
        <li><strong>Validation:</strong> Date and time inputs are validated using regular expressions and real-time formatting via <code>onValueChanged</code> event listeners.</li>
        <li><strong>Dynamic Updates:</strong> The app uses <code>InvokeRepeating</code> to update and display current activities on the main screen in real time.</li>
    </ul>
@endsection

@section("Additional info")
    <h2>Since I developed this project as part of a university lab assignment, I already have complete documentation available (currently only in Polish) - <span><a class="hover:cursor-pointer text-blue-400" wire:click="download('Obecnosc.pdf')">
        Download</a></span>.</h2>

@endsection

@section("Images")
    <div class="carousel relative"
         x-data="{
             current: 0,
             images: [
                 '{{ Vite::asset('resources/img/projects/1.png') }}',
                 '{{ Vite::asset('resources/img/projects/2.png') }}',
                 '{{ Vite::asset('resources/img/projects/3.png') }}',
                 '{{ Vite::asset('resources/img/projects/4.png') }}',
                 '{{ Vite::asset('resources/img/projects/5.png') }}'
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
                    <img :src="image" class="carousel-image cursor-pointer"> <!-- Use the new class -->
                </div>
            </template>
            <!-- Previous Button -->
            <button @click="current = (current > 0) ? current - 1 : images.length - 1" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-200">
                <i class="fas fa-chevron-left"></i> <!-- Font Awesome left arrow -->
            </button>
            <!-- Next Button -->
            <button @click="current = (current < images.length - 1) ? current + 1 : 0" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-200">
                <i class="fas fa-chevron-right"></i> <!-- Font Awesome right arrow -->
            </button>
        </div>
        <div class="flex justify-center mt-4">
            <template x-for="(image, index) in images" :key="index">
                <span @click="current = index" class="cursor-pointer" x-bind:class="{'text-blue-500': current === index, 'text-gray-500': current !== index}">●</span>
            </template>
        </div>

        <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" @click.away="showModal = false" style="display: none;">
            <img :src="modalImage" class="max-w-full max-h-full object-contain" @click.stop>
            <button @click="showModal = false" class="absolute top-4 right-4 text-white text-2xl">×</button>
        </div>
    </div>
@endsection

