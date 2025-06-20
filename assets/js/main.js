/**
 * AryaOdyssey Theme JavaScript
 */

(function() {
    'use strict';

    // DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        initializeTheme();
    });

    function initializeTheme() {
        // Initialize mobile menu
        initMobileMenu();
        
        // Initialize scroll effects
        initScrollEffects();
        
        // Initialize form handling
        initFormHandling();
        
        // Initialize animations
        initAnimations();
        
        // Initialize lazy loading
        initLazyLoading();
    }

    // Mobile Menu
    function initMobileMenu() {
        const menuToggle = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('.nav-menu');
        
        if (menuToggle && navMenu) {
            menuToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
                menuToggle.classList.toggle('active');
                
                // Update aria-expanded
                const isExpanded = navMenu.classList.contains('active');
                menuToggle.setAttribute('aria-expanded', isExpanded);
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!menuToggle.contains(e.target) && !navMenu.contains(e.target)) {
                    navMenu.classList.remove('active');
                    menuToggle.classList.remove('active');
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            });

            // Close menu on window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    navMenu.classList.remove('active');
                    menuToggle.classList.remove('active');
                    menuToggle.setAttribute('aria-expanded', 'false');
                }
            });
        }
    }

    // Scroll Effects
    function initScrollEffects() {
        const header = document.querySelector('.site-header');
        let lastScrollTop = 0;

        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            // Header background on scroll
            if (scrollTop > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            // Hide/show header on scroll
            if (scrollTop > lastScrollTop && scrollTop > 200) {
                header.classList.add('header-hidden');
            } else {
                header.classList.remove('header-hidden');
            }
            
            lastScrollTop = scrollTop;
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(function(link) {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    e.preventDefault();
                    const headerHeight = header.offsetHeight;
                    const targetPosition = targetElement.offsetTop - headerHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // Form Handling
    function initFormHandling() {
        // Contact Form
        const contactForm = document.getElementById('contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                handleFormSubmission(e, this, 'contact');
            });
        }

        // Reservation Form
        const reservationForm = document.getElementById('reservation-form');
        if (reservationForm) {
            reservationForm.addEventListener('submit', function(e) {
                handleFormSubmission(e, this, 'reservation');
            });
        }

        // Form validation
        document.querySelectorAll('.form-control').forEach(function(input) {
            input.addEventListener('blur', function() {
                validateField(this);
            });
        });
    }

    function handleFormSubmission(e, form, type) {
        e.preventDefault();
        
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        
        // Show loading state
        submitBtn.classList.add('loading');
        submitBtn.innerHTML = 'Sending...';
        submitBtn.disabled = true;

        // Validate form
        if (!validateForm(form)) {
            resetSubmitButton(submitBtn, originalText);
            return;
        }

        // Submit form data
        const formData = new FormData(form);
        
        fetch(form.action || window.location.href, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (response.ok) {
                showMessage('success', `Thank you! Your ${type} has been submitted successfully.`);
                form.reset();
            } else {
                throw new Error('Network response was not ok');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showMessage('error', `Sorry, there was an error submitting your ${type}. Please try again.`);
        })
        .finally(() => {
            resetSubmitButton(submitBtn, originalText);
        });
    }

    function validateForm(form) {
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');
        
        requiredFields.forEach(function(field) {
            if (!validateField(field)) {
                isValid = false;
            }
        });
        
        return isValid;
    }

    function validateField(field) {
        const value = field.value.trim();
        const type = field.type;
        let isValid = true;
        let errorMessage = '';

        // Remove existing error
        removeFieldError(field);

        // Check required
        if (field.hasAttribute('required') && !value) {
            isValid = false;
            errorMessage = 'This field is required.';
        }
        // Email validation
        else if (type === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                isValid = false;
                errorMessage = 'Please enter a valid email address.';
            }
        }
        // Phone validation
        else if (field.name === 'phone' && value) {
            const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
            if (!phoneRegex.test(value.replace(/[\s\-\(\)]/g, ''))) {
                isValid = false;
                errorMessage = 'Please enter a valid phone number.';
            }
        }

        if (!isValid) {
            showFieldError(field, errorMessage);
        }

        return isValid;
    }

    function showFieldError(field, message) {
        field.classList.add('error');
        const errorDiv = document.createElement('div');
        errorDiv.className = 'field-error';
        errorDiv.textContent = message;
        field.parentNode.appendChild(errorDiv);
    }

    function removeFieldError(field) {
        field.classList.remove('error');
        const existingError = field.parentNode.querySelector('.field-error');
        if (existingError) {
            existingError.remove();
        }
    }

    function resetSubmitButton(button, originalText) {
        button.classList.remove('loading');
        button.innerHTML = originalText;
        button.disabled = false;
    }

    function showMessage(type, text) {
        // Remove existing messages
        document.querySelectorAll('.message').forEach(msg => msg.remove());
        
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${type}`;
        messageDiv.innerHTML = `
            <i data-feather="${type === 'success' ? 'check-circle' : 'alert-circle'}"></i>
            <span>${text}</span>
        `;
        
        // Insert at the top of the main content
        const main = document.querySelector('main');
        if (main) {
            main.insertBefore(messageDiv, main.firstChild);
            
            // Initialize feather icons for the message
            if (typeof feather !== 'undefined') {
                feather.replace();
            }
            
            // Auto remove after 5 seconds
            setTimeout(() => {
                messageDiv.remove();
            }, 5000);
            
            // Scroll to message
            messageDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }

    // Animations
    function initAnimations() {
        // Intersection Observer for fade-in animations
        if ('IntersectionObserver' in window) {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe elements
            document.querySelectorAll('.place-card, .service-item, .feature-item, .package-card').forEach(function(el) {
                el.classList.add('animate-target');
                observer.observe(el);
            });
        }

        // Counter animations
        const counters = document.querySelectorAll('.counter');
        if (counters.length > 0) {
            const counterObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        counterObserver.unobserve(entry.target);
                    }
                });
            });

            counters.forEach(function(counter) {
                counterObserver.observe(counter);
            });
        }
    }

    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-count') || element.textContent);
        const duration = 2000;
        const start = performance.now();

        function updateCounter(currentTime) {
            const elapsed = currentTime - start;
            const progress = Math.min(elapsed / duration, 1);
            const current = Math.floor(progress * target);
            
            element.textContent = current;
            
            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            }
        }

        requestAnimationFrame(updateCounter);
    }

    // Lazy Loading
    function initLazyLoading() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.classList.add('loaded');
                            imageObserver.unobserve(img);
                        }
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(function(img) {
                imageObserver.observe(img);
            });
        }
    }

    // Utility functions
    window.AryaOdyssey = {
        showMessage: showMessage,
        validateField: validateField,
        validateForm: validateForm
    };

})();

// Additional CSS for animations
const additionalCSS = `
    .header-hidden {
        transform: translateY(-100%);
    }

    .site-header {
        transition: all 0.3s ease;
    }

    .site-header.scrolled {
        background: rgba(255, 255, 255, 0.98);
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.15);
    }

    .animate-target {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }

    .animate-target.animate-in {
        opacity: 1;
        transform: translateY(0);
    }

    .form-control.error {
        border-color: #dc3545;
        box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1);
    }

    .field-error {
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 5px;
    }

    img[data-src] {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    img[data-src].loaded {
        opacity: 1;
    }

    @media (prefers-reduced-motion: reduce) {
        .animate-target {
            transition: none;
        }
        
        .site-header {
            transition: none;
        }
    }
`;

// Inject additional CSS
const style = document.createElement('style');
style.textContent = additionalCSS;
document.head.appendChild(style);
