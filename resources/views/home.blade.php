@extends('layouts.app')

@section('title', 'Home - Portfolio')

@section('content')
<!-- Privacy Notice Modal -->
<div id="privacyModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/70 backdrop-blur-sm"></div>
    
    <!-- Modal Content -->
    <div class="relative bg-white rounded-2xl shadow-2xl max-w-lg w-full p-8 transform animate-fadeIn">
        <!-- Icon -->
        <div class="w-20 h-20 bg-accent/10 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg class="w-10 h-10 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
        </div>
        
        <!-- Title -->
        <h2 class="text-2xl font-bold text-primary text-center mb-4">Privacy Notice</h2>
        
        <!-- Message -->
        <div class="text-gray-600 text-center space-y-4 mb-6">
            <p>
                Welcome! You are about to view my <strong class="text-primary">personal portfolio</strong> which contains my personal and professional information.
            </p>
            <p>
                By proceeding, you agree to <strong class="text-primary">respect my privacy</strong> and handle any information you may access in accordance with the <strong class="text-accent">Republic Act No. 10173</strong> or the <strong class="text-accent">Data Privacy Act of 2012</strong> of the Philippines.
            </p>
            <p class="text-sm text-gray-500">
                This includes not sharing, distributing, or using my personal information for any unauthorized purposes.
            </p>
        </div>
        
        <!-- Divider -->
        <div class="border-t border-gray-200 my-6"></div>
        
        <!-- Thank You Note -->
        <p class="text-center text-accent font-medium mb-6">
            Thank you for your understanding and cooperation! 🙏
        </p>
        
        <!-- Proceed Button -->
        <button 
            id="acceptPrivacy"
            class="w-full bg-accent text-white py-3 px-6 rounded-xl font-semibold hover:bg-primary transition-all duration-300 transform hover:scale-[1.02] flex items-center justify-center gap-2"
        >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            I Understand, Proceed to Portfolio
        </button>
        
        <!-- Footer Note -->
        <p class="text-xs text-gray-400 text-center mt-4">
            This notice appears once per session for your acknowledgment.
        </p>
    </div>
</div>

<!-- Hero Section -->
<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <div class="mb-8">
            <img src="{{ asset('images/Vidal.png') }}" alt="Profile" class="w-48 h-48 rounded-full mx-auto shadow-xl object-cover">
        </div>
        <h1 class="text-5xl md:text-6xl font-bold text-primary mb-4">
            Hi, I'm <span class="text-accent">Joshua F. Vidal</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-600 mb-8">
            IT Student | Web Developer | Frontend Developer
        </p>
        <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
            Passionate about creating elegant solutions to complex problems. Currently seeking OJT opportunities to apply my skills in real-world projects.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/projects" class="btn-primary">View My Work</a>
            <a href="/contact" class="btn-secondary">Get In Touch</a>
        </div>
        
        <!-- Social Links -->
        <div class="flex justify-center space-x-6 mt-12">
            <a href="https://github.com/ItsJsh1" target="_blank" class="social-link">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
            </a>
            <a href="https://www.linkedin.com/in/joshua-f-vidal" target="_blank" class="social-link">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
            </a>
            <a href="https://ph.jobstreet.com/profiles/joshua-vidal-QnQrbRj0yF" target="_blank" class="social-link">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
            </a>
            <a href="https://profile.indeed.com/?hl=en_PH&co=PH&from=gnav-homepage" target="_blank" class="social-link" title="Indeed">
                <img src="https://img.icons8.com/?size=100&id=B3a6gyRNr6Wh&format=png&color=000000" alt="Indeed" class="w-8 h-8">
            </a>
        </div>
        
        <!-- Email Me Button -->
        <div class="mt-8">
            <a href="mailto:joshuavidalpupstudent@gmail.com?subject=OJT%20Opportunity" class="bg-accent text-white px-8 py-3 rounded-lg font-medium hover:bg-blue-600 transition duration-300 shadow-md inline-flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Email Me
            </a>
        </div>
    </div>
</section>

<style>
    .btn-primary {
        @apply bg-accent text-white px-8 py-3 rounded-lg font-medium hover:bg-blue-600 transition duration-300 shadow-md inline-block;
    }
    .btn-secondary {
        @apply bg-white text-accent px-8 py-3 rounded-lg font-medium hover:bg-gray-100 transition duration-300 shadow-md border-2 border-accent inline-block;
    }
    .social-link {
        @apply text-gray-600 hover:text-accent transition duration-300;
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.95) translateY(10px);
        }
        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }
    .animate-fadeIn {
        animation: fadeIn 0.3s ease-out forwards;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const privacyModal = document.getElementById('privacyModal');
    const acceptBtn = document.getElementById('acceptPrivacy');
    
    // Check if user has already accepted in this session
    if (sessionStorage.getItem('privacyAccepted')) {
        privacyModal.style.display = 'none';
    } else {
        // Prevent scrolling when modal is open
        document.body.style.overflow = 'hidden';
    }
    
    acceptBtn.addEventListener('click', function() {
        // Store acceptance in session storage
        sessionStorage.setItem('privacyAccepted', 'true');
        
        // Animate out and hide modal
        privacyModal.style.opacity = '0';
        privacyModal.style.transition = 'opacity 0.3s ease-out';
        
        setTimeout(() => {
            privacyModal.style.display = 'none';
            document.body.style.overflow = '';
        }, 300);
    });
});
</script>
@endsection