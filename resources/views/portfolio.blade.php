<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('images/web-logo.png') }}?v=2">
    <title>Joshua F. Vidal - Portfolio</title>

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

    {{-- Alpine.js for interactive components --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            scroll-behavior: smooth;
        }
        [x-cloak] { display: none !important; }
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

        /* Scroll Reveal Animations */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
        .scroll-reveal-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .scroll-reveal-left.revealed {
            opacity: 1;
            transform: translateX(0);
        }
        
        /* Mobile: scroll-reveal-left comes from right instead */
        @media (max-width: 767px) {
            .scroll-reveal-left {
                transform: translateX(50px);
            }
        }
        
        .scroll-reveal-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .scroll-reveal-right.revealed {
            opacity: 1;
            transform: translateX(0);
        }
        .scroll-reveal-scale {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        .scroll-reveal-scale.revealed {
            opacity: 1;
            transform: scale(1);
        }

        /* Staggered delay classes */
        .delay-100 { transition-delay: 0.1s; }
        .delay-200 { transition-delay: 0.2s; }
        .delay-300 { transition-delay: 0.3s; }
        .delay-400 { transition-delay: 0.4s; }
        .delay-500 { transition-delay: 0.5s; }

        /* Email/CTA Button Animations */
        .email-btn-animated {
            animation: smoothPulse 3s ease-in-out infinite;
        }
        
        .email-btn-animated::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.3),
                transparent
            );
            animation: shine 3s ease-in-out infinite;
        }
        
        @keyframes smoothPulse {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            }
            50% {
                transform: scale(1.05);
                box-shadow: 0 10px 25px -5px rgba(52, 152, 219, 0.4), 0 8px 10px -6px rgba(52, 152, 219, 0.3);
            }
        }
        
        @keyframes shine {
            0% {
                left: -100%;
            }
            50%, 100% {
                left: 100%;
            }
        }
        
        .email-btn-animated:hover {
            animation-play-state: paused;
        }
        
        .email-btn-animated:hover::before {
            animation-play-state: paused;
        }
    </style>
</head>
<body class="min-h-screen">
    <!-- Privacy Notice Modal -->
    <div id="privacyModal" class="fixed inset-0 z-[100] flex items-center justify-center p-4 py-8 md:py-4">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/70 backdrop-blur-sm"></div>
        
        <!-- Modal Content -->
        <div class="relative bg-white rounded-2xl shadow-2xl max-w-lg w-full max-h-[calc(100vh-4rem)] overflow-y-auto p-6 md:p-8 transform animate-fadeIn">
            <!-- Icon - Hidden on mobile, shown on desktop -->
            <div class="hidden md:flex w-20 h-20 bg-accent/10 rounded-full items-center justify-center mx-auto mb-6">
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

    <!-- Full-Screen Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="fixed inset-0 z-[200] bg-white hidden md:hidden flex-col">
        <!-- Close button -->
        <div class="flex justify-end p-6">
            <button id="mobile-menu-close" class="p-2 rounded-full hover:bg-gray-100 transition">
                <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <!-- Menu Links -->
        <div class="flex-1 flex flex-col items-center justify-center space-y-4 px-8">
            <h3 class="text-lg font-medium text-gray-400 uppercase tracking-wider mb-2">Quick Links</h3>
            <a href="#home" class="mobile-overlay-link text-2xl font-semibold text-gray-700 hover:text-accent hover:bg-gray-100 transition py-3 px-8 rounded-xl w-full max-w-xs text-center" data-section="home">Home</a>
            <a href="#about" class="mobile-overlay-link text-2xl font-semibold text-gray-700 hover:text-accent hover:bg-gray-100 transition py-3 px-8 rounded-xl w-full max-w-xs text-center" data-section="about">About</a>
            <a href="#experience" class="mobile-overlay-link text-2xl font-semibold text-gray-700 hover:text-accent hover:bg-gray-100 transition py-3 px-8 rounded-xl w-full max-w-xs text-center" data-section="experience">Experience</a>
            <a href="#projects" class="mobile-overlay-link text-2xl font-semibold text-gray-700 hover:text-accent hover:bg-gray-100 transition py-3 px-8 rounded-xl w-full max-w-xs text-center" data-section="projects">Projects</a>
            <a href="#cv" class="mobile-overlay-link text-2xl font-semibold text-gray-700 hover:text-accent hover:bg-gray-100 transition py-3 px-8 rounded-xl w-full max-w-xs text-center" data-section="cv">CV</a>
            <a href="#contact" class="mobile-overlay-link text-2xl font-semibold text-gray-700 hover:text-accent hover:bg-gray-100 transition py-3 px-8 rounded-xl w-full max-w-xs text-center" data-section="contact">Contact</a>
        </div>
        <!-- Footer -->
        <div class="p-6 text-center text-gray-400 text-sm">
            Joshua F. Vidal &copy; 2026
        </div>
    </div>

    <!-- Navigation -->
    <div class="fixed w-full top-5 z-50 px-4 sm:px-6 lg:px-8">
        <nav class="bg-white shadow-md rounded-2xl max-w-7xl mx-auto relative">
            <!-- Progress Bar - Top on mobile, bottom on desktop -->
            <div id="progress-bar" class="absolute top-0 md:top-auto md:bottom-0 left-0 h-1 bg-accent transition-all duration-150 rounded-tl-2xl md:rounded-tl-none md:rounded-bl-2xl" style="width: 0%"></div>
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                <a href="#home" class="text-2xl font-bold text-primary nav-link" id="navbar-brand">My Portfolio</a>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="nav-link font-medium transition-all duration-300 text-gray-700 hover:text-accent hover:scale-110 inline-block" data-section="home">Home</a>
                    <a href="#about" class="nav-link font-medium transition-all duration-300 text-gray-700 hover:text-accent hover:scale-110 inline-block" data-section="about">About</a>
                    <a href="#experience" class="nav-link font-medium transition-all duration-300 text-gray-700 hover:text-accent hover:scale-110 inline-block" data-section="experience">Experience</a>
                    <a href="#projects" class="nav-link font-medium transition-all duration-300 text-gray-700 hover:text-accent hover:scale-110 inline-block" data-section="projects">Projects</a>
                    <a href="#cv" class="nav-link font-medium transition-all duration-300 text-gray-700 hover:text-accent hover:scale-110 inline-block" data-section="cv">CV</a>
                    <a href="#contact" class="nav-link font-medium transition-all duration-300 text-gray-700 hover:text-accent hover:scale-110 inline-block" data-section="contact">Contact</a>
                </div>
                <!-- Mobile menu button -->
                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        </nav>
    </div>

    <!-- Main Content - All sections stacked -->
    <main class="pt-24 relative z-10">
        @include('sections.home')
        @include('sections.about')
        @include('sections.experience')
        @include('sections.projects')
        @include('sections.cv')
        @include('sections.contact')
    </main>

    <!-- Footer -->
    <footer class="bg-primary text-white py-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2026 Joshua F. Vidal. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ==========================================
            // Privacy Modal
            // ==========================================
            const privacyModal = document.getElementById('privacyModal');
            const acceptBtn = document.getElementById('acceptPrivacy');
            
            if (sessionStorage.getItem('privacyAccepted')) {
                privacyModal.style.display = 'none';
                privacyModal.style.pointerEvents = 'none';
            } else {
                document.body.style.overflow = 'hidden';
            }
            
            acceptBtn.addEventListener('click', function() {
                sessionStorage.setItem('privacyAccepted', 'true');
                privacyModal.style.opacity = '0';
                privacyModal.style.transition = 'opacity 0.3s ease-out';
                
                setTimeout(() => {
                    privacyModal.style.display = 'none';
                    privacyModal.style.pointerEvents = 'none';
                    document.body.style.overflow = '';
                    // Trigger scroll reveal after modal closes
                    checkScrollReveal();
                }, 300);
            });

            // ==========================================
            // Mobile Menu Overlay
            // ==========================================
            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
            const mobileMenuClose = document.getElementById('mobile-menu-close');
            const mobileOverlayLinks = document.querySelectorAll('.mobile-overlay-link');

            // Open menu
            mobileMenuBtn.addEventListener('click', function() {
                mobileMenuOverlay.classList.remove('hidden');
                mobileMenuOverlay.classList.add('flex');
                document.body.style.overflow = 'hidden';
            });

            // Close menu with X button
            mobileMenuClose.addEventListener('click', function() {
                mobileMenuOverlay.classList.add('hidden');
                mobileMenuOverlay.classList.remove('flex');
                document.body.style.overflow = '';
            });

            // Close menu and scroll when clicking a link
            mobileOverlayLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    
                    // Close menu
                    mobileMenuOverlay.classList.add('hidden');
                    mobileMenuOverlay.classList.remove('flex');
                    document.body.style.overflow = '';
                    
                    // Scroll to section
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        const offsetTop = targetElement.offsetTop - 100;
                        window.scrollTo({ top: offsetTop, behavior: 'smooth' });
                        history.pushState(null, null, targetId);
                    }
                });
            });

            // ==========================================
            // Smooth Scroll for All Nav Links
            // ==========================================
            function smoothScrollTo(targetId) {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    const offsetTop = targetElement.offsetTop - 100;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            }

            // Bind smooth scroll to desktop nav links
            document.querySelectorAll('a.nav-link[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    
                    // Smooth scroll to target
                    smoothScrollTo(targetId);
                    
                    // Update URL hash without jumping
                    history.pushState(null, null, targetId);
                });
            });

            // ==========================================
            // Progress Bar on Scroll
            // ==========================================
            function updateProgressBar() {
                const scrollTop = window.scrollY;
                const docHeight = document.documentElement.scrollHeight - window.innerHeight;
                const scrollPercent = (scrollTop / docHeight) * 100;
                document.getElementById('progress-bar').style.width = scrollPercent + '%';
            }

            // ==========================================
            // Active Section Highlighting
            // ==========================================
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.nav-link[data-section]');
            const mobileNavLinks = document.querySelectorAll('.mobile-overlay-link[data-section]');
            
            function highlightActiveSection() {
                const scrollY = window.scrollY;
                
                sections.forEach(section => {
                    const sectionHeight = section.offsetHeight;
                    const sectionTop = section.offsetTop - 150;
                    const sectionId = section.getAttribute('id');
                    
                    if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
                        // Desktop nav links
                        navLinks.forEach(link => {
                            link.classList.remove('text-accent', 'font-semibold');
                            link.classList.add('text-gray-700');
                            
                            if (link.getAttribute('data-section') === sectionId) {
                                link.classList.remove('text-gray-700');
                                link.classList.add('text-accent', 'font-semibold');
                            }
                        });
                        
                        // Mobile nav links
                        mobileNavLinks.forEach(link => {
                            link.classList.remove('text-accent', 'bg-accent/10');
                            link.classList.add('text-gray-700');
                            
                            if (link.getAttribute('data-section') === sectionId) {
                                link.classList.remove('text-gray-700');
                                link.classList.add('text-accent', 'bg-accent/10');
                            }
                        });
                    }
                });
            }

            // ==========================================
            // Scroll Reveal Animation
            // ==========================================
            const revealElements = document.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right, .scroll-reveal-scale');
            
            function checkScrollReveal() {
                const windowHeight = window.innerHeight;
                const revealPoint = 100;
                
                revealElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    
                    if (elementTop < windowHeight - revealPoint) {
                        element.classList.add('revealed');
                    }
                });
            }

            // ==========================================
            // Navbar Brand Text Change on Contact Section
            // ==========================================
            const navbarBrand = document.getElementById('navbar-brand');
            const contactSection = document.getElementById('contact');
            
            function updateNavbarBrand() {
                if (contactSection && navbarBrand) {
                    const contactTop = contactSection.offsetTop - 200;
                    const scrollY = window.scrollY;
                    
                    if (scrollY >= contactTop) {
                        navbarBrand.textContent = 'Hire Me Please';
                        navbarBrand.classList.add('text-accent');
                    } else {
                        navbarBrand.textContent = 'My Portfolio';
                        navbarBrand.classList.remove('text-accent');
                    }
                }
            }

            // ==========================================
            // Combined Scroll Event Handler
            // ==========================================
            function onScroll() {
                updateProgressBar();
                highlightActiveSection();
                checkScrollReveal();
                updateNavbarBrand();
            }

            window.addEventListener('scroll', onScroll, { passive: true });
            
            // Initial calls
            highlightActiveSection();
            checkScrollReveal();
            updateNavbarBrand();

            // ==========================================
            // Handle Hash in URL on Page Load
            // ==========================================
            if (window.location.hash) {
                setTimeout(() => {
                    smoothScrollTo(window.location.hash);
                }, 100);
            }
        });
    </script>
</body>
</html>
