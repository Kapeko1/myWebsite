<div class="min-h-screen bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="text-center mb-16">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-4 animate__animated animate__fadeIn">
                Hi, I'm <span class="text-blue-500">Kacper Gądek</span>
            </h1>
            <p class="text-xl sm:text-2xl md:text-3xl text-gray-300 mb-8 animate__animated animate__fadeIn">
                Backend Developer
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4 mb-8">
                <a href="{{ route('projects') }}" class="animate__animated animate__fadeInUp animate__delay-1s bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                    See My Projects
                </a>
                <a href="#contact" class="animate__animated animate__fadeInUp animate__delay-1s bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                    Contact Me
                </a>
            </div>
            <div class="flex justify-center space-x-4">
                <a href="https://github.com/Kapeko1" target="_blank" class="text-gray-300 hover:text-white transition-colors duration-300">
                    <i class="fab fa-github text-3xl"></i>
                </a>
                <a href="https://www.linkedin.com/in/kacper-gądek-16471330b/" target="_blank" class="text-gray-300 hover:text-white transition-colors duration-300">
                    <i class="fab fa-linkedin text-3xl"></i>
                </a>
            </div>
        </div>

        <div class="flex flex-col md:flex-row items-center mb-16">
            <div class="md:w-1/3 mb-8 md:mb-0">
                <img src="{{asset('img/profile.jpg') }}" class="rounded-full mx-auto w-48 h-48 md:w-64 md:h-64 object-cover" alt="Profile Picture">
            </div>
            <div class="md:w-2/3 text-center md:text-left">
                <h2 class="text-3xl font-bold mb-4">About Me</h2>
                <p class="text-lg mb-4 text-gray-300">
                    I am a passionate beginner backend developer with experience in Laravel, Flutter, C#, and more. Currently studying at the University of Information Technology and Management in Rzeszów, I have a solid background in both IT and language studies.
                </p>
                <ul class="text-lg text-gray-300">
                    <li>Email: kacper.gadek2@wp.pl</li>
                    <li>Phone: 734 481 379</li>
                </ul>
            </div>
        </div>

        <div class="bg-gray-800 rounded-3xl p-8 mb-16">
            <h2 class="text-3xl font-bold text-center mb-8">Skills</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-blue-400">Programming Languages</h3>
                    <ul class="text-gray-300">
                        <li class="mb-2">Java</li>
                        <li class="mb-2">C#</li>
                        <li class="mb-2">Python</li>
                        <li class="mb-2">Dart</li>
                        <li class="mb-2">PHP</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-blue-400">Frameworks</h3>
                    <ul class="text-gray-300">
                        <li class="mb-2">Laravel</li>
                        <li class="mb-2">Flutter</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4 text-blue-400">Tools & Technologies</h3>
                    <ul class="text-gray-300">
                        <li class="mb-2">Git</li>
                        <li class="mb-2">SQL Databases (or noSQL ones)</li>
                        <li class="mb-2">Nginx</li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="contact" class="text-center bg-blue-500 rounded-3xl p-8">
            <h2 class="text-3xl font-bold mb-4">Contact Me</h2>
            <p class="text-xl mb-6">If you want to get in touch, feel free to contact me via email or phone!</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="mailto:kacper.gadek2@wp.pl" class="animate__animated animate__fadeInUp bg-white text-blue-600 hover:bg-gray-200 py-3 px-6 rounded-lg font-semibold transition duration-300">
                    Send an Email
                </a>
                <a href="tel:+48734481379" class="animate__animated animate__fadeInUp bg-gray-800 text-white hover:bg-gray-700 py-3 px-6 rounded-lg font-semibold transition duration-300">
                    Call Me
                </a>
            </div>
        </div>
    </div>
</div>
