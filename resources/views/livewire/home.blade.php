<div class="container mx-auto my-10 px-4">
    <div class="text-center py-16 bg-blue-500 text-white rounded-3xl">
        <h1 class="text-3xl font-bold mb-4 animate__animated animate__fadeIn">{{ __('Hi, I\'m Kacper Gądek') }}</h1>
        <p class="text-xl mb-6 animate__animated animate__fadeIn">{{ __('Full-stack Developer & IT Specialist') }}</p>

        <div class="mb-6">
            <a href="{{ route('projects') }}"
               class="animate__animated animate__fadeInUp animate__delay-1s bg-white text-blue-500 py-3 px-6 rounded-lg font-semibold hover:bg-gray-200 transition duration-300">
                {{ __('See My Projects') }}
            </a>
            <a href="#contact"
               class="animate__animated animate__fadeInUp animate__delay-1s ml-4 bg-gray-800 text-white py-3 px-6 rounded-lg font-semibold hover:bg-gray-700 transition duration-300 ease-in">
                {{ __('Contact Me') }}
            </a>
        </div>

        <div class="mt-4">
            <a href="https://github.com/Kapeko1" target="_blank" class="inline-block mx-2 py-3 px-4 animate__animated animate__bounce">
                <i class="fab fa-github animate__animated animate__fadeIn animate__delay-1s text-2xl"></i>
            </a>
            <a href="https://www.linkedin.com/in/kacper-gądek-16471330b/" target="_blank" class="inline-block mx-2 py-3 animate__animated animate__bounce">
                <i class="fa-brands fa-linkedin animate__animated animate__fadeIn animate__delay-1s text-2xl"></i>
            </a>
        </div>
    </div>


    <div class="flex flex-col md:flex-row items-center py-16">
        <div class="md:w-1/3 mb-6 md:mb-0">
            <img src="{{ Vite::asset('resources/img/profile.jpg') }}" class="rounded-full mx-auto w-48 h-48 md:w-64 md:h-64 object-cover" alt="{{ __('Profile Picture') }}">
        </div>
        <div class="md:w-2/3 text-center md:text-left">
            <h2 class="text-3xl font-bold mb-4">{{ __('About Me') }}</h2>
            <p class="text-lg mb-4">
                {{ __('I am a passionate beginner full-stack developer with experience in Laravel, Flutter, C#, and more. Currently studying at the University of Information Technology and Management in Rzeszów, I have a solid background in both IT and language studies.') }}
            </p>
            <ul class="text-lg">
                <li>{{ __('Email') }}: kacper.gadek2@wp.pl</li>
                <li>{{ __('Phone') }}: 734 481 379</li>
            </ul>
        </div>
    </div>

    <div class="py-16 bg-gray-100 rounded-3xl">
        <h2 class="text-3xl font-bold text-center mb-8">{{ __('Skills') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div>
                <h3 class="text-xl font-semibold mb-4">{{ __('Programming Languages') }}</h3>
                <ul>
                    <li class="mb-2">Java</li>
                    <li class="mb-2">C#</li>
                    <li class="mb-2">Python</li>
                    <li class="mb-2">Dart</li>
                    <li class="mb-2">PHP</li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4">{{ __('Frameworks') }}</h3>
                <ul>
                    <li class="mb-2">Laravel</li>
                    <li class="mb-2">Flutter</li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4">{{ __('Tools & Technologies') }}</h3>
                <ul>
                    <li class="mb-2">Git</li>
                    <li class="mb-2">{{ __('SQL Databases (or noSQL ones)') }}</li>
                    <li class="mb-2">Nginx</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="h-16"></div>

    <div id="contact" class="text-center py-16 bg-blue-500 text-white rounded-3xl">
        <h2 class="text-3xl font-bold mb-4">{{ __('Contact Me') }}</h2>
        <p class=" text-xl mb-6">{{ __('If you want to get in touch, feel free to contact me via email or phone!') }}</p>
        <a href="mailto:kacper.gadek2@wp.pl" class="animate__animated animate__fadeInUp bg-white text-blue-500 py-3 px-6 rounded-lg font-semibold hover:bg-gray-200 transition duration-300">
            {{ __('Send an Email') }}
        </a>
        <a href="tel:+48734481379" class="animate__animated animate__fadeInUp ml-4 bg-gray-800 text-white py-3 px-6 rounded-lg font-semibold hover:bg-gray-700 transition duration-300">
            {{ __('Call Me') }}
        </a>
    </div>
</div>
