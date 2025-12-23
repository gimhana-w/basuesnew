// Basues Website - Main JavaScript

// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const navMenu = document.getElementById('navMenu');
    const navbar = document.getElementById('navbar');

    // Mobile menu toggle
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            this.classList.toggle('active');
        });
    }

    // Navbar scroll effect
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href.length > 1) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    if (navMenu.classList.contains('active')) {
                        navMenu.classList.remove('active');
                        mobileMenuToggle.classList.remove('active');
                    }
                }
            }
        });
    });

    // Slide-in/out animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const scrollObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Slide in when entering viewport
                entry.target.classList.add('animate');
                entry.target.classList.remove('animate-out');
            } else {
                // Slide out when leaving viewport
                entry.target.classList.remove('animate');
                entry.target.classList.add('animate-out');
            }
        });
    }, observerOptions);

    // Add slide-in animations to elements
    function initScrollAnimations() {
        // Feature cards - alternate left and right with delay
        document.querySelectorAll('.feature-card').forEach((el, index) => {
            el.classList.add('scroll-animate');
            if (index % 2 === 0) {
                el.classList.add('slide-left');
            } else {
                el.classList.add('slide-right');
            }
            // Add delay based on index
            el.style.transitionDelay = `${index * 0.1}s`;
            scrollObserver.observe(el);
        });

        // Product cards - alternate left and right with delay
        document.querySelectorAll('.product-card').forEach((el, index) => {
            el.classList.add('scroll-animate');
            if (index % 2 === 0) {
                el.classList.add('slide-left');
            } else {
                el.classList.add('slide-right');
            }
            // Add delay based on index
            el.style.transitionDelay = `${index * 0.1}s`;
            scrollObserver.observe(el);
        });

        // Section titles - slide up
        document.querySelectorAll('.section-title').forEach(el => {
            el.classList.add('scroll-animate', 'slide-up');
            scrollObserver.observe(el);
        });

        // Sections - slide up (with slight delay)
        document.querySelectorAll('.section').forEach((el, index) => {
            el.classList.add('scroll-animate', 'slide-up');
            el.style.transitionDelay = `${index * 0.15}s`;
            scrollObserver.observe(el);
        });

        // Category cards - alternate left and right with delay
        document.querySelectorAll('.category-card').forEach((el, index) => {
            el.classList.add('scroll-animate');
            if (index % 2 === 0) {
                el.classList.add('slide-left');
            } else {
                el.classList.add('slide-right');
            }
            // Add delay based on index
            el.style.transitionDelay = `${index * 0.15}s`;
            scrollObserver.observe(el);
        });

        // Categories title - slide up
        document.querySelectorAll('.categories-title').forEach(el => {
            el.classList.add('scroll-animate', 'slide-up');
            scrollObserver.observe(el);
        });

        // New categories title - slide up
        document.querySelectorAll('.categories-title-new').forEach(el => {
            el.classList.add('scroll-animate', 'slide-up');
            scrollObserver.observe(el);
        });

        // New category cards - left column slides from left, right column from right
        document.querySelectorAll('.category-card-new').forEach((el, index) => {
            el.classList.add('scroll-animate');
            // For 2x2 grid: index 0,2 (left column) slide from left; index 1,3 (right column) slide from right
            if (index % 2 === 0) {
                el.classList.add('slide-left');
            } else {
                el.classList.add('slide-right');
            }
            // Add delay based on row (0,1 for top row, 2,3 for bottom row)
            const row = Math.floor(index / 2);
            el.style.transitionDelay = `${row * 0.2 + (index % 2) * 0.1}s`;
            scrollObserver.observe(el);
        });

        // Banner section - slide up
        document.querySelectorAll('.banner-section').forEach(el => {
            el.classList.add('scroll-animate', 'slide-up');
            scrollObserver.observe(el);
        });

        // Cable cards - alternate slide left and right with delay
        document.querySelectorAll('.cable-card').forEach((el, index) => {
            el.classList.add('scroll-animate');
            if (index % 2 === 0) {
                el.classList.add('slide-left');
            } else {
                el.classList.add('slide-right');
            }
            // Add delay based on index
            el.style.transitionDelay = `${index * 0.1}s`;
            scrollObserver.observe(el);
        });

        // Earbuds feature cards - slide up with delay
        document.querySelectorAll('.earbuds-feature-card').forEach((el, index) => {
            el.classList.add('scroll-animate', 'slide-up');
            el.style.transitionDelay = `${index * 0.15}s`;
            scrollObserver.observe(el);
        });

        // Footer sections - slide up
        document.querySelectorAll('.footer-section').forEach((el, index) => {
            el.classList.add('scroll-animate', 'slide-up');
            el.style.transitionDelay = `${index * 0.1}s`;
            scrollObserver.observe(el);
        });
    }

    // Initialize scroll animations
    initScrollAnimations();

    // Hero Slider Functionality
    function initHeroSlider() {
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.slider-dots .dot');
        const prevBtn = document.querySelector('.slider-prev');
        const nextBtn = document.querySelector('.slider-next');
        
        if (slides.length === 0) return;
        
        let currentSlide = 0;
        let autoPlayInterval;
        const autoPlayDelay = 9000; // 8 seconds - increased for more time to view each slide
        const firstLoadSlides = new Set(); // Track which slides have been shown for the first time
        
        function showSlide(index) {
            // Remove active class from all slides and dots
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            // Add active class to current slide and dot
            if (slides[index]) {
                slides[index].classList.add('active');
                
                // Add first-load class only on first time this slide becomes active
                if (!firstLoadSlides.has(index)) {
                    slides[index].classList.add('first-load');
                    firstLoadSlides.add(index);
                }
            }
            if (dots[index]) {
                dots[index].classList.add('active');
            }
            
            currentSlide = index;
        }
        
        function nextSlide() {
            const next = (currentSlide + 1) % slides.length;
            showSlide(next);
        }
        
        function prevSlide() {
            const prev = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prev);
        }
        
        function startAutoPlay() {
            autoPlayInterval = setInterval(nextSlide, autoPlayDelay);
        }
        
        function stopAutoPlay() {
            if (autoPlayInterval) {
                clearInterval(autoPlayInterval);
            }
        }
        
        // Event listeners
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                stopAutoPlay();
                startAutoPlay();
            });
        }
        
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                stopAutoPlay();
                startAutoPlay();
            });
        }
        
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
                stopAutoPlay();
                startAutoPlay();
            });
        });
        
        // Pause on hover
        const heroSlider = document.querySelector('.hero-slider');
        if (heroSlider) {
            heroSlider.addEventListener('mouseenter', stopAutoPlay);
            heroSlider.addEventListener('mouseleave', startAutoPlay);
        }
        
        // Initialize first slide with first-load class
        if (slides[0]) {
            slides[0].classList.add('first-load');
            firstLoadSlides.add(0);
        }
        
        // Start auto-play
        startAutoPlay();
    }
    
    // Initialize hero slider
    initHeroSlider();
});

