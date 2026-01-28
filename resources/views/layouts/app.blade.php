<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/web-logo.png') }}?v=2">
    <title>@yield('title', 'My Portfolio')</title>

    {{-- Tailwind CDN for testing --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#2c3e50',
                        'secondary': '#34495e',
                        'accent': '#3498db',
                    }
                }
            }
        }
    </script>

    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen">
    <!-- Navigation -->
    <div class="fixed w-full top-5 z-50 px-4 sm:px-6 lg:px-8">
        <nav class="bg-white shadow-md rounded-2xl max-w-7xl mx-auto relative overflow-hidden">
            <!-- Progress Bar -->
            <div id="progress-bar" class="absolute bottom-0 left-0 h-1 bg-accent transition-all duration-150 rounded-bl-2xl" style="width: 0%"></div>
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                <a href="/" class="text-2xl font-bold text-primary">
                    @if(request()->is('/'))
                        My Portfolio
                    @elseif(request()->is('contact'))
                        Hire Me Please!
                    @else
                        Joshua Vidal
                    @endif
                </a>
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="font-medium transition duration-300 {{ request()->is('/') ? 'text-accent font-semibold' : 'text-gray-700 hover:text-accent' }}">Home</a>
                    <a href="/about" class="font-medium transition duration-300 {{ request()->is('about') ? 'text-accent font-semibold' : 'text-gray-700 hover:text-accent' }}">About</a>
                    <a href="/experience" class="font-medium transition duration-300 {{ request()->is('experience') ? 'text-accent font-semibold' : 'text-gray-700 hover:text-accent' }}">Experience</a>
                    <a href="/projects" class="font-medium transition duration-300 {{ request()->is('projects') ? 'text-accent font-semibold' : 'text-gray-700 hover:text-accent' }}">Projects</a>
                    <a href="/cv" class="font-medium transition duration-300 {{ request()->is('cv') ? 'text-accent font-semibold' : 'text-gray-700 hover:text-accent' }}">CV</a>
                    <a href="/contact" class="font-medium transition duration-300 {{ request()->is('contact') ? 'text-accent font-semibold' : 'text-gray-700 hover:text-accent' }}">Contact</a>
                </div>
                <!-- Mobile menu button -->
                <button id="mobile-menu-btn" class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="/" class="block px-3 py-2 font-medium transition duration-300 {{ request()->is('/') ? 'text-accent font-semibold' : 'text-gray-700 hover:text-accent' }}">Home</a>
                <a href="/about" class="block px-3 py-2 font-medium transition duration-300 {{ request()->is('about') ? 'text-accent font-semibold' : 'text-gray-700 hover:text-accent' }}">About</a>
                <a href="/experience" class="block px-3 py-2 font-medium transition duration-300 {{ request()->is('experience') ? 'text-accent font-semibold' : 'text-gray-700 hover:text-accent' }}">Experience</a>
                <a href="/projects" class="block px-3 py-2 font-medium transition duration-300 {{ request()->is('projects') ? 'text-accent font-semibold' : 'text-gray-700 hover:text-accent' }}">Projects</a>
                <a href="/cv" class="block px-3 py-2 font-medium transition duration-300 {{ request()->is('cv') ? 'text-accent font-semibold' : 'text-gray-700 hover:text-accent' }}">CV</a>
                <a href="/contact" class="block px-3 py-2 font-medium transition duration-300 {{ request()->is('contact') ? 'text-accent font-semibold' : 'text-gray-700 hover:text-accent' }}">Contact</a>
            </div>
        </div>
        </nav>
    </div>

    <!-- Main Content -->
    <main class="pt-24">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-primary text-white py-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2026 Joshua F. Vidal. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Progress bar on scroll
        window.addEventListener('scroll', function() {
            const scrollTop = window.scrollY;
            const docHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPercent = (scrollTop / docHeight) * 100;
            document.getElementById('progress-bar').style.width = scrollPercent + '%';
        });
    </script>
</body>
</html>