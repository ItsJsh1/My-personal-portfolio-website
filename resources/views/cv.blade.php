@extends('layouts.app')

@section('title', 'My CV')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-20">
    <!-- Header Section -->
    <section class="mb-12 text-center">
        <h2 class="text-4xl font-bold text-primary mb-4">My<span class="text-accent"> Curriculum Vitae</span></h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            View and download my professional CV to learn more about my qualifications, experience, and skills.
        </p>
    </section>

    <!-- CV Preview Card -->
    <section class="mb-12">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden max-w-4xl mx-auto">
            <!-- CV Thumbnail/Preview Area -->
            <div class="relative group">
                <div class="aspect-[8.5/11] bg-gray-100 flex items-center justify-center overflow-hidden">
                    @if(file_exists(public_path('documents/cv.pdf')))
                        <!-- PDF Preview using iframe for thumbnail - Blurred for privacy -->
                        <div class="relative w-full h-full">
                            <iframe 
                                src="{{ asset('documents/cv.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" 
                                class="w-full h-full pointer-events-none blur-sm"
                                title="CV Preview"
                            ></iframe>
                            <!-- Gradient overlay -->
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-white/30 to-white/50 pointer-events-none"></div>
                            <!-- Privacy Note - Always visible -->
                            <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                                <div class="bg-white/95 backdrop-blur-md px-8 py-6 rounded-2xl shadow-2xl text-center max-w-md mx-4 border border-gray-100">
                                    <div class="w-16 h-16 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                        </svg>
                                    </div>
                                    <h4 class="text-xl font-bold text-primary mb-2">Privacy Protected</h4>
                                    <p class="text-gray-600 text-sm mb-4">
                                        My CV is intentionally blurred to protect my personal information. 
                                        Please click <strong>"View CV in New Tab"</strong> or <strong>"Download CV"</strong> below to access the complete document.
                                    </p>
                                    <p class="text-accent text-sm font-medium">Thank you for understanding! 🙏</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Placeholder when no CV is uploaded -->
                        <div class="text-center p-8">
                            <svg class="w-24 h-24 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            <p class="text-gray-500 text-lg">CV will be available soon</p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="p-6 bg-gray-50 border-t">
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    @if(file_exists(public_path('documents/cv.pdf')))
                        <a 
                            href="{{ asset('documents/cv.pdf') }}" 
                            target="_blank"
                            class="inline-flex items-center justify-center gap-2 bg-accent text-white px-6 py-3 rounded-lg font-semibold hover:bg-primary transition-all duration-300 transform hover:scale-105"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            View my CV
                        </a>
                        <a 
                            href="{{ asset('documents/cv.pdf') }}" 
                            download="Joshua_Vidal_CV.pdf"
                            class="inline-flex items-center justify-center gap-2 bg-green-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-600 transition-all duration-300 transform hover:scale-105"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                            Download my CV
                        </a>
                        <a 
                            href="{{ asset('images/Vidal.png') }}" 
                            download="Joshua_Vidal_Photo.png"
                            class="inline-flex items-center justify-center gap-2 bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-secondary transition-all duration-300 transform hover:scale-105"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Download My Professional Photo
                        </a>
                    @else
                        <span class="text-gray-500 italic">CV not yet available for download</span>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Info Cards -->
    <section class="grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-center">
            <div class="w-14 h-14 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <h3 class="font-bold text-lg text-primary mb-2">Seeking OJT</h3>
            <p class="text-gray-600 text-sm">Looking for hands-on industry experience</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-center">
            <div class="w-14 h-14 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>
            <h3 class="font-bold text-lg text-primary mb-2">BSIT Student</h3>
            <p class="text-gray-600 text-sm">Polytechnic University of the Philippines - Taguig Campus</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-center">
            <div class="w-14 h-14 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-7 h-7 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                </svg>
            </div>
            <h3 class="font-bold text-lg text-primary mb-2">Web Developer</h3>
            <p class="text-gray-600 text-sm">PHP, Laravel, MySQL & More</p>
        </div>
    </section>
</div>
@endsection