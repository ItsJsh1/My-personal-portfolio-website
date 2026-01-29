@extends('layouts.app')

@section('title', 'My Experience')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-20">
    <!-- Header Section -->
    <section class="mb-16 text-center">
        <h2 class="text-4xl font-bold text-primary mb-4">My<span class="text-accent"> Experiences</span></h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            While I'm at the beginning of my professional journey, I've been actively building my skills through freelance work and personal projects.
        </p>
    </section>

    <!-- Experience Timeline -->
    <section class="mb-20">
        <div class="max-w-4xl mx-auto">
            <!-- Timeline Line -->
            <div class="relative">
                <div class="absolute left-4 md:left-1/2 transform md:-translate-x-1/2 h-full w-0.5 bg-gradient-to-b from-yellow-400 via-accent to-primary"></div>

                <!-- Looking for OJT - TOP -->
                <div class="relative mb-12 group">
                    <div class="flex flex-col md:flex-row items-start">
                        <!-- Timeline Dot with Animation -->
                        <div class="absolute left-4 md:left-1/2 transform -translate-x-1/2 z-10">
                            <div class="w-4 h-4 bg-yellow-400 rounded-full ring-4 ring-white shadow-lg animate-pulse"></div>
                        </div>
                        
                        <!-- Content Card -->
                        <div class="ml-10 md:ml-0 md:w-1/2 md:pr-12 md:text-right">
                            <div class="bg-gradient-to-br from-yellow-50 to-orange-50 p-6 rounded-xl shadow-md border-2 border-dashed border-yellow-300 hover:border-accent transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-2 mb-3 md:justify-end">
                                    <span class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full animate-pulse">Seeking Opportunities</span>
                                </div>
                                <h3 class="text-xl font-bold text-primary mb-1">OJT / Internship</h3>
                                <p class="text-accent font-medium mb-2">Your Company?</p>
                                <p class="text-sm text-gray-500 mb-4">2026 - Upcoming</p>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    Actively seeking On-the-Job Training opportunities to gain hands-on corporate experience. Eager to learn, contribute, and grow with a team of professionals.
                                </p>
                                <a href="/contact" class="inline-flex items-center gap-2 mt-4 text-accent hover:text-primary font-medium text-sm transition-colors md:justify-end">
                                    Let's Connect
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Freelance Experience -->
                <div class="relative mb-12 group">
                    <div class="flex flex-col md:flex-row items-start">
                        <!-- Timeline Dot -->
                        <div class="absolute left-4 md:left-1/2 transform -translate-x-1/2 z-10">
                            <div class="w-4 h-4 bg-accent rounded-full ring-4 ring-white shadow-lg group-hover:scale-125 transition-transform duration-300"></div>
                        </div>
                        
                        <!-- Content Card -->
                        <div class="ml-10 md:ml-0 md:w-1/2 md:pl-12 md:ml-auto">
                            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border-l-4 border-accent">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="bg-accent/10 text-accent text-xs font-semibold px-3 py-1 rounded-full">Current</span>
                                </div>
                                <h3 class="text-xl font-bold text-primary mb-1">Membership Information Management System for Radio Engineering Circle Inc.</h3>
                                <p class="text-accent font-medium mb-2">Capstone Project</p>
                                <p class="text-sm text-gray-500 mb-2">2024 - 2026</p>
                                <div class="flex flex-col sm:flex-row gap-2 mb-4">
                                    <a href="https://beta.rec.org.ph" target="_blank" class="inline-flex items-center gap-1.5 text-sm text-accent hover:text-primary transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                        </svg>
                                        beta.rec.org.ph
                                    </a>
                                    <a href="https://centralized-website.rec.org.ph" target="_blank" class="inline-flex items-center gap-1.5 text-sm text-accent hover:text-primary transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                        </svg>
                                        website.rec.org.ph
                                    </a>
                                </div>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    In this capstone project, I served as a Front-End Developer, focusing on the <strong>UI/UX design</strong> of the system. 
                                    I developed the members’ landing page and designed both the <strong>Super Admin</strong> and <strong>Member-side interfaces.</strong> 
                                    I also handled intermediate <strong>back-end code</strong> related to the system’s core processes.
                                    The client for this project was a large organization, <strong>Radio Engineering Circle Inc.</strong>, 
                                    which operates under <strong>PARA (Philippine Amateur Radio Association).</strong>
                                </p>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">PHP</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Laravel</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">JavaScript</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Tailwind CSS</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">MySQL</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">GitHub</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">Hostinger</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">AI Chatbot</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Academic Projects -->
                <div class="relative mb-12 group">
                    <div class="flex flex-col md:flex-row items-start">
                        <!-- Timeline Dot -->
                        <div class="absolute left-4 md:left-1/2 transform -translate-x-1/2 z-10">
                            <div class="w-4 h-4 bg-primary rounded-full ring-4 ring-white shadow-lg group-hover:scale-125 transition-transform duration-300"></div>
                        </div>
                        
                        <!-- Content Card -->
                        <div class="ml-10 md:ml-0 md:w-1/2 md:pr-12 md:text-right">
                            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border-l-4 border-primary">
                                <div class="flex items-center gap-2 mb-3 md:justify-end">
                                    <span class="bg-accent/10 text-accent text-xs font-semibold px-3 py-1 rounded-full">Ended</span>
                                </div>
                                <h3 class="text-xl font-bold text-primary mb-1">BPO Freelancer</h3>
                                <p class="text-accent font-medium mb-2">Data Entry/Data Encoder</p>
                                <p class="text-sm text-gray-500 mb-2">2023 - 2026</p>
                                <a href="https://www.ustitlesearch.net" target="_blank" class="inline-flex items-center gap-1.5 text-sm text-accent hover:text-primary transition-colors mb-4 md:justify-end">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                    </svg>
                                    www.ustitlesearch.net
                                </a>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    I worked as an outsourced staff member responsible for downloading files
                                    from <strong>www.ustitlesearch.net</strong>, encoding the data into Excel spreadsheets, 
                                    and verifying the accuracy and consistency of the files against the encoded records. 
                                    After ensuring that all information was correct and properly matched, I finalized the 
                                    encoding and submitted the completed files to my supervisor.
                                </p>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">MS Excel</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">WPS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Freelance Experience -->
                <div class="relative mb-12 group">
                    <div class="flex flex-col md:flex-row items-start">
                        <!-- Timeline Dot -->
                        <div class="absolute left-4 md:left-1/2 transform -translate-x-1/2 z-10">
                            <div class="w-4 h-4 bg-primary rounded-full ring-4 ring-white shadow-lg group-hover:scale-125 transition-transform duration-300"></div>
                        </div>
                        
                        <!-- Content Card -->
                        <div class="ml-10 md:ml-0 md:w-1/2 md:pl-12 md:ml-auto">
                            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border-l-4 border-primary">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="bg-accent/10 text-accent text-xs font-semibold px-3 py-1 rounded-full">Ended</span>
                                </div>
                                <h3 class="text-xl font-bold text-primary mb-1">BPO Freelancer</h3>
                                <p class="text-accent font-medium mb-2">Data Entry/Data Encoder</p>
                                <p class="text-sm text-gray-500 mb-2">2023 - 2026</p>
                                <a href="https://www.georgetowndeeds.com" target="_blank" class="inline-flex items-center gap-1.5 text-sm text-accent hover:text-primary transition-colors mb-4">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                    </svg>
                                    www.georgetowndeeds.com
                                </a>
                                <p class="text-gray-600 text-sm leading-relaxed">
                                    I worked as an outsourced staff member responsible for downloading files
                                    from <strong>www.georgetowndeeds.com</strong>, encoding the data into Excel spreadsheets, 
                                    and verifying the accuracy and consistency of the files against the encoded records. 
                                    After ensuring that all information was correct and properly matched, I finalized the 
                                    encoding and submitted the completed files to my supervisor.
                                </p>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">MS Excel</span>
                                    <span class="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded">WPS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>

    <!-- What I Bring Section -->
    <section class="mb-20">
        <h3 class="text-2xl font-bold text-primary text-center mb-10">What I Bring to the Table</h3>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
                    <svg class="w-7 h-7 text-accent group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h4 class="font-bold text-primary mb-2">Quick Learner</h4>
                <p class="text-gray-600 text-sm">Adaptable and eager to learn new technologies and methodologies quickly.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
                    <svg class="w-7 h-7 text-accent group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h4 class="font-bold text-primary mb-2">Team Player</h4>
                <p class="text-gray-600 text-sm">Collaborative mindset with experience in group projects and pair programming.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
                    <svg class="w-7 h-7 text-accent group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h4 class="font-bold text-primary mb-2">Dedicated</h4>
                <p class="text-gray-600 text-sm">Committed to delivering quality work and meeting project deadlines.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
                    <svg class="w-7 h-7 text-accent group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h4 class="font-bold text-primary mb-2">Passionate</h4>
                <p class="text-gray-600 text-sm">Genuine enthusiasm for coding and building meaningful applications.</p>
            </div>
        </div>
    </section>


    <!-- CTA Section -->
    <section class="text-center">
        <div class="bg-gradient-to-r from-accent to-secondary rounded-2xl p-10 text-white">
            <h3 class="text-2xl font-bold mb-4">Interested in Working Together?</h3>
            <p class="text-white/80 mb-6 max-w-xl mx-auto">
                Whether you need a freelance developer or are offering OJT opportunities, I'd love to hear from you!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center justify-center gap-2 bg-white text-primary px-6 py-3 rounded-lg font-semibold hover:bg-accent hover:text-white transition-all duration-300 transform hover:scale-105">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Get in Touch
                </a>
                <a href="/cv" class="inline-flex items-center justify-center gap-2 bg-transparent border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-primary transition-all duration-300 transform hover:scale-105">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    View My CV
                </a>
            </div>
        </div>
    </section>
</div>

@endsection
