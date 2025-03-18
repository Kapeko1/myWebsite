@section("Introduction")
    The "Snake Game" project is built using JavaFX and showcases both core game mechanics and the integration of more advanced elements, such as an enemy snake that moves independently. The game logic focuses on real-time movement (grid-based, not array-based), collision detection, and state management.
@endsection

@section("Key features")
    <div>
        <ul style="list-style-type: circle;">
            <li><strong>JavaFX GUI Integration:</strong> The game utilizes <code>FXMLLoader</code> to load the UI from FXML files, ensuring clean separation between design and logic while binding Java objects to UI components.</li>
            <li><strong>Real-time Input Handling:</strong> Snake movement is controlled using key events with <code>setOnKeyPressed()</code>, allowing the snake’s position to be updated in real-time based on user inputs.</li>
            <li><strong>Collision Detection:</strong> JavaFX’s <code>Rectangle</code> objects are used to detect collisions between the player snake, food, and walls. The <code>getBoundsInParent().intersects()</code> method handles collision checks for game over scenarios.</li>
            <li><strong>Enemy Snake AI:</strong> The game includes an enemy snake controlled by a computer, which moves independently and changes direction periodically using <code>Timeline</code> and <code>KeyFrame</code>. The enemy's movement direction is updated randomly at regular intervals to challenge the player.</li>
            <li><strong>Game Loop:</strong> The <code>AnimationTimer</code> class is used for the main game loop, ensuring that the player snake and enemy snake update their positions in real-time. The loop also handles food generation and collision detection with game elements.</li>
            <li><strong>Data Persistence:</strong> High scores are stored in <code>HighScores.txt</code> and are processed using <code>BufferedReader</code>. The scores are then sorted using <code>Collections.sort()</code> and displayed in the High Scores section of the game.</li>
        </ul>
    </div>
@endsection

@section("Additional info")
    <p>
        Since I completed my laboratory coursework with this project at university, I already have the documentation prepared (currently only in Polish) - <span>        <a href="{{ url('/download/Snake.pdf') }}" class="hover:cursor-pointer text-blue-400">
            Download
        </a></span></p>
    <p>It was my first project, which I started writing right after my first Java classes, and it was on this project that I learned the language through trial and error.</p>
<p>All the graphics were created for me by DALL-E. Whats funny - the entire snake's tail is its modified in Paint head icon (for some reason, DALL-E didn't generate anything suitable for me).</p>
    Since this is solely my personal project, the code is available on GitHub here - <a href="https://github.com/Kapeko1/JavaFX_Gra" target="_blank" class="hover:cursor-pointer text-blue-400">JavaFX_Gra</a></p>
@endsection
@section("Images")
    <div class="carousel relative"
         x-data="{
             current: 0,
             images: [
                 '{{ asset('img/projects/snake/5.png') }}',
                 '{{ asset('img/projects/snake/2.png') }}',
                 '{{ asset('img/projects/snake/3.png') }}',
                 '{{ asset('img/projects/snake/4.png') }}',
                 '{{ asset('img/projects/snake/1.png') }}',
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

