<!-- Projects Section -->
<section id="projects" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-primary mb-4 scroll-reveal">My<span class="text-accent"> Projects</span></h2>
        <p class="text-gray-600 mb-12 scroll-reveal delay-100">A showcase of my recent work and personal projects</p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 group scroll-reveal-scale delay-200">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 relative overflow-hidden" x-data="{ activeSlide: 0, slides: 3 }">
                    <!-- Slides Container -->
                    <div class="flex transition-transform duration-300 h-full" :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                        <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('images/mims.jpeg') }}" alt="MIMS" class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('images/mims2.jpeg') }}" alt="MIMS" class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('images/mims3.jpeg') }}" alt="MIMS" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <!-- Left Arrow -->
                    <button @click="activeSlide = activeSlide === 0 ? slides - 1 : activeSlide - 1" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-1 shadow-md transition">
                        <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <!-- Right Arrow -->
                    <button @click="activeSlide = activeSlide === slides - 1 ? 0 : activeSlide + 1" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-1 shadow-md transition">
                        <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    <!-- Dots Indicator -->
                    <div class="absolute bottom-2 left-1/2 -translate-x-1/2 flex gap-1">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button @click="activeSlide = index" :class="activeSlide === index ? 'bg-white' : 'bg-white/50'" class="w-2 h-2 rounded-full transition"></button>
                        </template>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-2 group-hover:text-accent transition">Membership Information Management System for Radio Engineering Circle Inc.</h3>
                    <p class="text-gray-600 mb-4">A full-featured online membership management platform built with Laravel, featuring user authentication, organization website, member management, and payment system.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">Laravel</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">PHP</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">MySQL</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">GitHub</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">AI Chatbot</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">Bootstrap</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="https://beta.rec.org.ph" class="text-accent hover:underline flex items-center">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            Demo 1
                        </a>
                        <a href="https://centralized-website.rec.org.ph" class="text-accent hover:underline flex items-center">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            Demo 2
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 group scroll-reveal-scale delay-300">
                <div class="h-48 bg-gradient-to-br from-green-400 to-green-600 relative overflow-hidden" x-data="{ activeSlide: 0, slides: 3 }">
                    <!-- Slides Container -->
                    <div class="flex transition-transform duration-300 h-full" :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                        <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('images/lms1.jpg') }}" alt="LMS" class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('images/lm2.jpg') }}" alt="LMS" class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('images/lms3.jpg') }}" alt="LMS" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <!-- Left Arrow -->
                    <button @click="activeSlide = activeSlide === 0 ? slides - 1 : activeSlide - 1" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-1 shadow-md transition">
                        <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <!-- Right Arrow -->
                    <button @click="activeSlide = activeSlide === slides - 1 ? 0 : activeSlide + 1" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-1 shadow-md transition">
                        <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    <!-- Dots Indicator -->
                    <div class="absolute bottom-2 left-1/2 -translate-x-1/2 flex gap-1">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button @click="activeSlide = index" :class="activeSlide === index ? 'bg-white' : 'bg-white/50'" class="w-2 h-2 rounded-full transition"></button>
                        </template>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-2 group-hover:text-accent transition">Library Management System (LMS)</h3>
                    <p class="text-gray-600 mb-4">The Library Management System is a desktop-based application developed using Java and built within the NetBeans(IDE). The system is designed to automate the core operations of a library, providing an efficient and user-friendly platform for managing library resources, member records, and daily transactions.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">Java</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">NetBeans</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">MySQL</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="https://github.com/ItsJsh1/Library-Management-System_LMS.git" class="text-accent hover:underline flex items-center">
                            <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                            Code
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300 group scroll-reveal-scale delay-400">
                <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 relative overflow-hidden" x-data="{ activeSlide: 0, slides: 3 }">
                    <!-- Slides Container -->
                    <div class="flex transition-transform duration-300 h-full" :style="'transform: translateX(-' + (activeSlide * 100) + '%)'">
                        <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('images/XenoClash-Invasion.jpeg') }}" alt="XenoClash: Invasion" class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('images/XenoClash-Invasion2.jpg') }}" alt="XenoClash: Invasion" class="w-full h-full object-cover">
                        </div>
                        <div class="w-full h-full flex-shrink-0 flex items-center justify-center">
                            <img src="{{ asset('images/XenoClash-Invasion3.jpg') }}" alt="XenoClash: Invasion" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <!-- Left Arrow -->
                    <button @click="activeSlide = activeSlide === 0 ? slides - 1 : activeSlide - 1" class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-1 shadow-md transition">
                        <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <!-- Right Arrow -->
                    <button @click="activeSlide = activeSlide === slides - 1 ? 0 : activeSlide + 1" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-1 shadow-md transition">
                        <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    <!-- Dots Indicator -->
                    <div class="absolute bottom-2 left-1/2 -translate-x-1/2 flex gap-1">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button @click="activeSlide = index" :class="activeSlide === index ? 'bg-white' : 'bg-white/50'" class="w-2 h-2 rounded-full transition"></button>
                        </template>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-primary mb-2 group-hover:text-accent transition">XenoClash: Invasion</h3>
                    <p class="text-gray-600 mb-4">XenoClash Invasion is a first-person shooter (FPS) game developed using Godot Engine. The game focuses on fast-paced gameplay, immersive environments, and action-driven mechanics.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">C#</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">C++</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full">GODOT</span>
                    </div>
                    <div class="flex gap-4">
                        <a href="https://github.com/ItsJsh1/XenoClash-Invasion-Game-Development.git" class="text-accent hover:underline flex items-center">
                            <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                            Code
                        </a>
                    </div>
                </div>
            </div>

            <!-- Add more project cards as needed -->
        </div>
    </div>
</section>
