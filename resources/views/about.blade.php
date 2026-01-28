@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-20">
    <!-- Profile Picture & Header -->
    <section class="mb-12 text-center">
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
    </section>

    <!-- Personal Info -->
    <section class="mb-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p class="text-lg text-gray-600 mb-6">
                    I'm a dedicated IT student with a passion for web development and data analytics. Currently pursuing my degree and actively seeking OJT opportunities to gain hands-on experience in the industry.
                </p>
                <p class="text-lg text-gray-600 mb-6">
                    My journey in technology started with a curiosity about how things work, which has evolved into a commitment to building efficient, user-friendly applications.
                </p>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <span class="font-semibold w-32">Location:</span>
                        <span class="text-gray-600">#26 Rd. 5 Acacia St. Taguig City, Philippines</span>
                    </div>
                    <div class="flex items-center">
                        <span class="font-semibold w-32">Email:</span>
                        <span class="text-gray-600">joshuavidalpupstudent@gmail.com</span>
                    </div>
                    <div class="flex items-center">
                        <span class="font-semibold w-32">Phone:</span>
                        <span class="text-gray-600">+63 961 702 9780</span>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg border border-gray-100">
                <h3 class="text-2xl font-bold text-primary mb-6">Skills</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-4">
                    <div>
                        <h4 class="font-semibold text-gray-700 mb-3">Languages & Frameworks</h4>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                <span class="w-2 h-2 bg-accent rounded-full flex-shrink-0"></span>
                                PHP & Laravel
                            </li>
                            <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                <span class="w-2 h-2 bg-accent rounded-full flex-shrink-0"></span>
                                JavaScript & React.js
                            </li>
                            <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                <span class="w-2 h-2 bg-accent rounded-full flex-shrink-0"></span>
                                Tailwind CSS / Bootstrap
                            </li>
                            <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                <span class="w-2 h-2 bg-accent rounded-full flex-shrink-0"></span>
                                C++ & Java
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-700 mb-3">Tools & Technologies</h4>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></span>
                                MySQL Database
                            </li>
                            <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></span>
                                Git & GitHub
                            </li>
                            <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></span>
                                VS Code
                            </li>
                            <li class="flex items-center gap-2 text-gray-600 text-sm md:text-base">
                                <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></span>
                                Figma
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Timeline -->
    <section class="mb-20">
        <h2 class="text-4xl font-bold text-accent mb-12 text-center md:text-left">Education</h2>
        <div class="relative">
            <!-- Timeline line - left on mobile, center on desktop -->
            <div class="absolute left-4 md:left-1/2 transform md:-translate-x-1/2 h-full w-0.5 bg-gray-300"></div>
            
            <!-- Timeline Item - PUP -->
            <div class="mb-12 flex flex-col md:flex-row md:items-center w-full">
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
            <div class="mb-12 flex flex-col md:flex-row md:items-center w-full">
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
            <div class="mb-12 flex flex-col md:flex-row md:items-center w-full">
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
            <div class="mb-12 flex flex-col md:flex-row md:items-center w-full">
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
    </section>

    <!-- Certifications -->
    <section>
        <h2 class="text-4xl font-bold text-accent mb-8">Certifications & Achievements</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
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
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300">
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
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300" x-data="{ showCert: false }">
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
                <button @click="showCert = true" class="inline-flex items-center gap-1.5 text-sm text-accent hover:text-primary transition-colors font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                    View Certificate
                </button>
                <!-- Modal -->
                <div x-show="showCert" x-cloak class="fixed inset-0 z-[100] flex items-center justify-center p-4" @keydown.escape.window="showCert = false">
                    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" @click="showCert = false"></div>
                    <div class="relative bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden" x-transition>
                        <div class="flex items-center justify-between p-4 border-b">
                            <h3 class="text-lg font-bold text-primary">GIT IT TOGETHER Certificate</h3>
                            <button @click="showCert = false" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-4 overflow-auto max-h-[75vh]">
                            <img src="{{ asset('documents/certificates/cert3.png') }}" alt="GIT IT TOGETHER Certificate" class="w-full h-auto rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300" x-data="{ showCert: false }">
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
                <button @click="showCert = true" class="inline-flex items-center gap-1.5 text-sm text-accent hover:text-primary transition-colors font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                    View Certificate
                </button>
                <!-- Modal -->
                <div x-show="showCert" x-cloak class="fixed inset-0 z-[100] flex items-center justify-center p-4" @keydown.escape.window="showCert = false">
                    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" @click="showCert = false"></div>
                    <div class="relative bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden" x-transition>
                        <div class="flex items-center justify-between p-4 border-b">
                            <h3 class="text-lg font-bold text-primary">LAUNCHPAD Certificate</h3>
                            <button @click="showCert = false" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-4 overflow-auto max-h-[75vh]">
                            <img src="{{ asset('documents/certificates/cert2.png') }}" alt="LAUNCHPAD Certificate" class="w-full h-auto rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition duration-300" x-data="{ showCert: false }">
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
                <button @click="showCert = true" class="inline-flex items-center gap-1.5 text-sm text-accent hover:text-primary transition-colors font-medium">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                    View Certificate
                </button>
                <!-- Modal -->
                <div x-show="showCert" x-cloak class="fixed inset-0 z-[100] flex items-center justify-center p-4" @keydown.escape.window="showCert = false">
                    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm" @click="showCert = false"></div>
                    <div class="relative bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden" x-transition>
                        <div class="flex items-center justify-between p-4 border-b">
                            <h3 class="text-lg font-bold text-primary">Glass-Is-Kool Certificate</h3>
                            <button @click="showCert = false" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-4 overflow-auto max-h-[75vh]">
                            <img src="{{ asset('documents/certificates/cert1.png') }}" alt="Glass-Is-Kool Certificate" class="w-full h-auto rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    [x-cloak] { display: none !important; }
</style>
@endsection