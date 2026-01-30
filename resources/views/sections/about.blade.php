<!-- About Section -->
<section id="about" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Profile Picture & Header -->
        <div class="mb-12 text-center scroll-reveal">
            <div class="relative inline-block mb-6">
                <div class="w-40 h-40 md:w-48 md:h-48 rounded-full overflow-hidden border-4 border-accent shadow-xl mx-auto">
                    <img src="{{ asset('images/Vidal.png') }}" alt="Joshua F. Vidal" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 -right-2 w-12 h-12 bg-accent rounded-full flex items-center justify-center shadow-lg">
                    <img src="{{ asset('images/logo.png') }}" alt="Joshua F. Vidal" class="w-full h-full object-cover">
                </div>
            </div>
            <h2 class="text-4xl font-bold text-accent mb-2">About Me</h2>
            <p class="text-gray-500">PUP-T IT Student | Web Developer | Frontend Developer | UI/UX Designer</p>
        </div>

        <!-- Personal Info -->
        <div class="mb-20">
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-start md:items-center">
                <div class="scroll-reveal-left">
                    <p class="text-base md:text-lg text-gray-600 mb-6">
                        I'm a dedicated IT student with a passion for web development and data analytics. Currently pursuing my degree and actively seeking OJT opportunities to gain hands-on experience in the industry.
                    </p>
                    <p class="text-base md:text-lg text-gray-600 mb-6">
                        My journey in technology started with a curiosity about how things work, which has evolved into a commitment to building efficient, user-friendly applications.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 bg-accent/10 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <span class="font-semibold text-sm md:text-base block">Location</span>
                                <span class="text-gray-600 text-sm md:text-base">#26 Rd. 5 Acacia St. Taguig City, Philippines</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 bg-accent/10 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <span class="font-semibold text-sm md:text-base block">Email</span>
                                <span class="text-gray-600 text-sm md:text-base break-all">joshuavidalpupstudent@gmail.com</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 bg-accent/10 rounded-lg flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <span class="font-semibold text-sm md:text-base block">Phone</span>
                                <span class="text-gray-600 text-sm md:text-base">+63 961 702 9780</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg border border-gray-100 scroll-reveal-right">
                    <h3 class="text-2xl font-bold text-primary mb-6">Tech Stack</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-4">
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-3">Languages & Frameworks</h4>
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                    <span class="w-6 h-6 bg-accent/10 rounded-md flex items-center justify-center flex-shrink-0">
                                        <svg class="w-3.5 h-3.5 text-accent" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                                    </span>
                                    PHP & Laravel
                                </li>
                                <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                    <span class="w-6 h-6 bg-accent/10 rounded-md flex items-center justify-center flex-shrink-0">
                                        <svg class="w-3.5 h-3.5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                                    </span>
                                    JavaScript & React.js
                                </li>
                                <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                    <span class="w-6 h-6 bg-accent/10 rounded-md flex items-center justify-center flex-shrink-0">
                                        <svg class="w-3.5 h-3.5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
                                    </span>
                                    Tailwind CSS / Bootstrap
                                </li>
                                <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                    <span class="w-6 h-6 bg-accent/10 rounded-md flex items-center justify-center flex-shrink-0">
                                        <svg class="w-3.5 h-3.5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    </span>
                                    C++ & Java
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700 mb-3">Tools & Technologies</h4>
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                    <span class="w-6 h-6 bg-primary/10 rounded-md flex items-center justify-center flex-shrink-0">
                                        <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/></svg>
                                    </span>
                                    MySQL Database
                                </li>
                                <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                    <span class="w-6 h-6 bg-primary/10 rounded-md flex items-center justify-center flex-shrink-0">
                                        <svg class="w-3.5 h-3.5 text-primary" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                                    </span>
                                    Git & GitHub
                                </li>
                                <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                    <span class="w-6 h-6 bg-primary/10 rounded-md flex items-center justify-center flex-shrink-0">
                                        <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    </span>
                                    VS Code
                                </li>
                                <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                    <span class="w-6 h-6 bg-primary/10 rounded-md flex items-center justify-center flex-shrink-0">
                                        <svg class="w-3.5 h-3.5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
                                    </span>
                                    Figma
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Education Timeline -->
        <div class="mb-20">
            <h2 class="text-4xl font-bold text-accent mb-12 text-center md:text-left scroll-reveal">Education</h2>
            <div class="relative">
                <!-- Timeline line - left on mobile, center on desktop -->
                <div class="absolute left-4 md:left-1/2 transform md:-translate-x-1/2 h-full w-0.5 bg-gray-300"></div>
                
                <!-- Timeline Item - PUP -->
                <div class="mb-12 flex flex-col md:flex-row md:items-center w-full scroll-reveal delay-100">
                    <!-- Desktop: Left content -->
                    <div class="hidden md:block md:w-1/2 md:pr-8 md:text-right">
                        <div class="flex items-center justify-end gap-3 mb-2">
                            <div>
                                <h3 class="text-xl font-bold text-primary">Bachelor of Science in Information Technology</h3>
                                <p class="text-gray-600">Polytechnic University of the Philippines - Taguig Campus</p>
                                <p class="text-sm text-gray-500">2022 - Present</p>
                            </div>
                            <div class="w-14 h-14 bg-white rounded-lg shadow-md flex items-center justify-center flex-shrink-0 border border-gray-100">
                                <img src="{{ asset('images/logo.png') }}" alt="PUP Logo" class="w-10 h-10 object-contain">
                            </div>
                        </div>
                    </div>
                    <!-- Timeline dot -->
                    <div class="absolute left-4 md:static md:left-auto transform -translate-x-1/2 md:translate-x-0 w-8 h-8 bg-accent rounded-full z-10 flex-shrink-0"></div>
                    <!-- Mobile & Desktop: Right content -->
                    <div class="ml-12 md:ml-0 md:w-1/2 md:pl-8">
                        <!-- Mobile only: Title -->
                        <div class="md:hidden mb-3">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-12 h-12 bg-white rounded-lg shadow-md flex items-center justify-center flex-shrink-0 border border-gray-100">
                                    <img src="{{ asset('images/logo.png') }}" alt="PUP Logo" class="w-8 h-8 object-contain">
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-primary">Bachelor of Science in Information Technology</h3>
                                    <p class="text-sm text-gray-600">PUP - Taguig Campus</p>
                                    <p class="text-xs text-gray-500">2022 - Present</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm md:text-base">Currently pursuing my degree with a focus on web development and software engineering. Maintaining a strong academic record while actively searching in programming related OJT.</p>
                    </div>
                </div>

                <!-- Timeline Item - Athens -->
                <div class="mb-12 flex flex-col md:flex-row md:items-center w-full scroll-reveal delay-200">
                    <!-- Desktop: Left content -->
                    <div class="hidden md:block md:w-1/2 md:pr-8 md:text-right">
                        <p class="text-gray-600">Completed senior high school with a strand in Information and Communications Technology. Developed foundational programming skills and web development knowledge.</p>
                    </div>
                    <!-- Timeline dot -->
                    <div class="absolute left-4 md:static md:left-auto transform -translate-x-1/2 md:translate-x-0 w-8 h-8 bg-accent rounded-full z-10 flex-shrink-0"></div>
                    <!-- Mobile & Desktop: Right content -->
                    <div class="ml-12 md:ml-0 md:w-1/2 md:pl-8">
                        <!-- Mobile only: Full card -->
                        <div class="md:hidden mb-3">
                            <h3 class="text-lg font-bold text-primary">TVL - Programming</h3>
                            <p class="text-sm text-gray-600">Athens Academy</p>
                            <p class="text-xs text-gray-500">2020 - 2022</p>
                        </div>
                        <p class="text-gray-600 text-sm md:text-base md:hidden">Completed senior high school with a strand in Information and Communications Technology. Developed foundational programming skills and web development knowledge.</p>
                        <!-- Desktop only: Title -->
                        <div class="hidden md:block">
                            <div class="flex items-center gap-3 mb-2">
                                <div>
                                    <h3 class="text-xl font-bold text-primary">Technical Vocational Livelihood (TVL) - Programming</h3>
                                    <p class="text-gray-600">Athens Academy</p>
                                    <p class="text-sm text-gray-500">2020 - 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item - Luis Aguado HS -->
                <div class="mb-12 flex flex-col md:flex-row md:items-center w-full scroll-reveal delay-300">
                    <!-- Desktop: Left content -->
                    <div class="hidden md:block md:w-1/2 md:pr-8 md:text-right">
                        <div class="flex items-center justify-end gap-3 mb-2">
                            <div>
                                <h3 class="text-xl font-bold text-primary">Technical Vocational Livelihood (TVL) - Electricity</h3>
                                <p class="text-gray-600">Luis Aguado National Highschool</p>
                                <p class="text-sm text-gray-500">2016 - 2020</p>
                            </div>
                        </div>
                    </div>
                    <!-- Timeline dot -->
                    <div class="absolute left-4 md:static md:left-auto transform -translate-x-1/2 md:translate-x-0 w-8 h-8 bg-accent rounded-full z-10 flex-shrink-0"></div>
                    <!-- Mobile & Desktop: Right content -->
                    <div class="ml-12 md:ml-0 md:w-1/2 md:pl-8">
                        <!-- Mobile only: Title -->
                        <div class="md:hidden mb-3">
                            <h3 class="text-lg font-bold text-primary">TVL - Electricity</h3>
                            <p class="text-sm text-gray-600">Luis Aguado National Highschool</p>
                            <p class="text-xs text-gray-500">2016 - 2020</p>
                        </div>
                        <p class="text-gray-600 text-sm md:text-base">Completed junior high school with a strand in Technical Vocational Livelihood focused on Electricity. Gained foundational knowledge in electrical systems and hands-on technical skills.</p>
                    </div>
                </div>

                <!-- Timeline Item - Luis Aguado Elementary -->
                <div class="mb-12 flex flex-col md:flex-row md:items-center w-full scroll-reveal delay-400">
                    <!-- Desktop: Left content -->
                    <div class="hidden md:block md:w-1/2 md:pr-8 md:text-right">
                        <p class="text-gray-600">Completed elementary education with recognition as an achiever. Built strong foundational skills in academics and developed early interest in technology.</p>
                    </div>
                    <!-- Timeline dot -->
                    <div class="absolute left-4 md:static md:left-auto transform -translate-x-1/2 md:translate-x-0 w-8 h-8 bg-accent rounded-full z-10 flex-shrink-0"></div>
                    <!-- Mobile & Desktop: Right content -->
                    <div class="ml-12 md:ml-0 md:w-1/2 md:pl-8">
                        <!-- Mobile only: Full card -->
                        <div class="md:hidden mb-3">
                            <h3 class="text-lg font-bold text-primary">Achiever</h3>
                            <p class="text-sm text-gray-600">Luis Aguado Elementary School</p>
                            <p class="text-xs text-gray-500">2010 - 2016</p>
                        </div>
                        <p class="text-gray-600 text-sm md:text-base md:hidden">Completed elementary education with recognition as an achiever. Built strong foundational skills in academics and developed early interest in technology.</p>
                        <!-- Desktop only: Title -->
                        <div class="hidden md:block">
                            <div class="flex items-center gap-3 mb-2">
                                <div>
                                    <h3 class="text-xl font-bold text-primary">Achiever</h3>
                                    <p class="text-gray-600">Luis Aguado Elementary School</p>
                                    <p class="text-sm text-gray-500">2010 - 2016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Certifications -->
        <div>
            <h2 class="text-3xl md:text-4xl font-bold text-accent mb-8 text-center md:text-left scroll-reveal">Certifications & Achievements</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 scroll-reveal-scale delay-100">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg text-primary">President's Lister</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-2">Academic Year 2022-2025</p>
                    <p class="text-gray-500 text-sm">PUP-T - Recognized for academic excellence</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 scroll-reveal-scale delay-200">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg text-primary">LANI Scholar</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-2">Academic Year 2022-Present</p>
                    <p class="text-gray-500 text-sm">One of the chosen scholars of the Taguig Lani Cayetano Scholarship Program (LANI)</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 scroll-reveal-scale delay-300" x-data="{ showCert: false }">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg text-primary">GIT IT TOGETHER Certificate</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-2">March 8, 2025</p>
                    <p class="text-gray-500 text-sm mb-3">Certificate of Participation</p>
                    <!-- Desktop: View Certificate -->
                    <button @click="showCert = true" class="hidden md:inline-flex items-center gap-1.5 text-sm text-accent hover:text-primary transition-colors font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        View Certificate
                    </button>
                    <!-- Mobile: Download Certificate -->
                    <a href="{{ asset('documents/certificates/cert3.PNG') }}" download="GIT_IT_TOGETHER_Certificate.png" class="inline-flex md:hidden items-center gap-1.5 text-sm text-accent hover:text-primary transition-colors font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Download Certificate
                    </a>
                    <!-- Modal - Using Teleport approach with fixed positioning -->
                    <template x-teleport="body">
                        <div x-show="showCert" x-cloak class="fixed inset-0 z-[9999] flex items-center justify-center p-4" @keydown.escape.window="showCert = false">
                            <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" @click="showCert = false"></div>
                            <div class="relative bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden z-[10000]" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                                <div class="flex items-center justify-between p-4 border-b bg-white sticky top-0">
                                    <h3 class="text-lg font-bold text-primary">GIT IT TOGETHER Certificate</h3>
                                    <button @click="showCert = false" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-4 overflow-auto max-h-[calc(90vh-60px)] bg-gray-50">
                                    <img src="{{ asset('documents/certificates/cert3.PNG') }}" alt="GIT IT TOGETHER Certificate" class="w-full h-auto rounded-lg shadow-lg">
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 scroll-reveal-scale delay-400" x-data="{ showCert: false }">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg text-primary">LAUNCHPAD Certificate</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-2">March 3, 2025</p>
                    <p class="text-gray-500 text-sm mb-3">Certificate of Participation</p>
                    <!-- Desktop: View Certificate -->
                    <button @click="showCert = true" class="hidden md:inline-flex items-center gap-1.5 text-sm text-accent hover:text-primary transition-colors font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        View Certificate
                    </button>
                    <!-- Mobile: Download Certificate -->
                    <a href="{{ asset('documents/certificates/cert2.PNG') }}" download="LAUNCHPAD_Certificate.png" class="inline-flex md:hidden items-center gap-1.5 text-sm text-accent hover:text-primary transition-colors font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Download Certificate
                    </a>
                    <!-- Modal - Using Teleport approach with fixed positioning -->
                    <template x-teleport="body">
                        <div x-show="showCert" x-cloak class="fixed inset-0 z-[9999] flex items-center justify-center p-4" @keydown.escape.window="showCert = false">
                            <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" @click="showCert = false"></div>
                            <div class="relative bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden z-[10000]" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                                <div class="flex items-center justify-between p-4 border-b bg-white sticky top-0">
                                    <h3 class="text-lg font-bold text-primary">LAUNCHPAD Certificate</h3>
                                    <button @click="showCert = false" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-4 overflow-auto max-h-[calc(90vh-60px)] bg-gray-50">
                                    <img src="{{ asset('documents/certificates/cert2.PNG') }}" alt="LAUNCHPAD Certificate" class="w-full h-auto rounded-lg shadow-lg">
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300 scroll-reveal-scale delay-500" x-data="{ showCert: false }">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-cyan-100 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg text-primary">Glass-Is-Kool Certificate</h3>
                    </div>
                    <p class="text-gray-600 text-sm mb-2">November 20, 2022</p>
                    <p class="text-gray-500 text-sm mb-3">Certificate of Participation</p>
                    <!-- Desktop: View Certificate -->
                    <button @click="showCert = true" class="hidden md:inline-flex items-center gap-1.5 text-sm text-accent hover:text-primary transition-colors font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        View Certificate
                    </button>
                    <!-- Mobile: Download Certificate -->
                    <a href="{{ asset('documents/certificates/cert1.PNG') }}" download="Glass_Is_Kool_Certificate.png" class="inline-flex md:hidden items-center gap-1.5 text-sm text-accent hover:text-primary transition-colors font-medium">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                        </svg>
                        Download Certificate
                    </a>
                    <!-- Modal - Using Teleport approach with fixed positioning -->
                    <template x-teleport="body">
                        <div x-show="showCert" x-cloak class="fixed inset-0 z-[9999] flex items-center justify-center p-4" @keydown.escape.window="showCert = false">
                            <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" @click="showCert = false"></div>
                            <div class="relative bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden z-[10000]" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
                                <div class="flex items-center justify-between p-4 border-b bg-white sticky top-0">
                                    <h3 class="text-lg font-bold text-primary">Glass-Is-Kool Certificate</h3>
                                    <button @click="showCert = false" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-4 overflow-auto max-h-[calc(90vh-60px)] bg-gray-50">
                                    <img src="{{ asset('documents/certificates/cert1.PNG') }}" alt="Glass-Is-Kool Certificate" class="w-full h-auto rounded-lg shadow-lg">
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    [x-cloak] { display: none !important; }
</style>
