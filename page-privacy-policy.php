<?php
/**
 * Template for Privacy Policy Page
 *
 * @package AryaOdyssey
 */

get_header(); ?>

<main id="main" class="site-main privacy-policy-page">
    
    <!-- Hero Section -->
    <section class="page-hero legal-hero">
        <div class="hero-background">
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <div class="container">
                    <div class="hero-text text-center">
                        <h1 class="hero-title text-white">
                            <?php _e('Privacy Policy', 'aryaodyssey'); ?>
                        </h1>
                        <p class="hero-subtitle text-white">
                            <?php _e('How we protect and use your personal information', 'aryaodyssey'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Privacy Policy Content -->
    <section class="legal-content section-padding">
        <div class="container">
            <div class="legal-wrapper">
                <div class="legal-sidebar">
                    <div class="legal-nav">
                        <h3><?php _e('Table of Contents', 'aryaodyssey'); ?></h3>
                        <ul class="legal-menu">
                            <li><a href="#information-collection"><?php _e('Information We Collect', 'aryaodyssey'); ?></a></li>
                            <li><a href="#information-use"><?php _e('How We Use Information', 'aryaodyssey'); ?></a></li>
                            <li><a href="#information-sharing"><?php _e('Information Sharing', 'aryaodyssey'); ?></a></li>
                            <li><a href="#data-security"><?php _e('Data Security', 'aryaodyssey'); ?></a></li>
                            <li><a href="#cookies"><?php _e('Cookies & Tracking', 'aryaodyssey'); ?></a></li>
                            <li><a href="#your-rights"><?php _e('Your Rights', 'aryaodyssey'); ?></a></li>
                            <li><a href="#contact-privacy"><?php _e('Contact Us', 'aryaodyssey'); ?></a></li>
                        </ul>
                    </div>
                </div>

                <div class="legal-main">
                    <div class="policy-header">
                        <p class="last-updated">
                            <strong><?php _e('Last Updated:', 'aryaodyssey'); ?></strong> <?php echo date('F j, Y'); ?>
                        </p>
                        <p class="policy-intro">
                            <?php _e('At AryaOdyssey, we are committed to protecting your privacy and ensuring the security of your personal information. This Privacy Policy explains how we collect, use, disclose, and protect your information when you visit our website or use our services.', 'aryaodyssey'); ?>
                        </p>
                    </div>

                    <div id="information-collection" class="policy-section">
                        <h2><?php _e('1. Information We Collect', 'aryaodyssey'); ?></h2>
                        
                        <h3><?php _e('Personal Information', 'aryaodyssey'); ?></h3>
                        <p><?php _e('We may collect the following personal information when you interact with our services:', 'aryaodyssey'); ?></p>
                        <ul>
                            <li><?php _e('Name and contact information (email address, phone number, mailing address)', 'aryaodyssey'); ?></li>
                            <li><?php _e('Reservation and booking details', 'aryaodyssey'); ?></li>
                            <li><?php _e('Payment information (processed securely through third-party payment processors)', 'aryaodyssey'); ?></li>
                            <li><?php _e('Travel preferences and special requests', 'aryaodyssey'); ?></li>
                            <li><?php _e('Communication history and feedback', 'aryaodyssey'); ?></li>
                        </ul>

                        <h3><?php _e('Automatically Collected Information', 'aryaodyssey'); ?></h3>
                        <p><?php _e('When you visit our website, we automatically collect certain information:', 'aryaodyssey'); ?></p>
                        <ul>
                            <li><?php _e('IP address and location data', 'aryaodyssey'); ?></li>
                            <li><?php _e('Browser type and version', 'aryaodyssey'); ?></li>
                            <li><?php _e('Device information and operating system', 'aryaodyssey'); ?></li>
                            <li><?php _e('Pages visited and time spent on our website', 'aryaodyssey'); ?></li>
                            <li><?php _e('Referring website or source', 'aryaodyssey'); ?></li>
                        </ul>
                    </div>

                    <div id="information-use" class="policy-section">
                        <h2><?php _e('2. How We Use Your Information', 'aryaodyssey'); ?></h2>
                        <p><?php _e('We use your information for the following purposes:', 'aryaodyssey'); ?></p>
                        <ul>
                            <li><?php _e('Processing and managing your reservations and bookings', 'aryaodyssey'); ?></li>
                            <li><?php _e('Providing customer support and responding to inquiries', 'aryaodyssey'); ?></li>
                            <li><?php _e('Communicating about your stay and our services', 'aryaodyssey'); ?></li>
                            <li><?php _e('Improving our website and services', 'aryaodyssey'); ?></li>
                            <li><?php _e('Sending promotional materials and special offers (with your consent)', 'aryaodyssey'); ?></li>
                            <li><?php _e('Complying with legal obligations and protecting our rights', 'aryaodyssey'); ?></li>
                            <li><?php _e('Analyzing website usage and trends', 'aryaodyssey'); ?></li>
                        </ul>
                    </div>

                    <div id="information-sharing" class="policy-section">
                        <h2><?php _e('3. Information Sharing and Disclosure', 'aryaodyssey'); ?></h2>
                        <p><?php _e('We do not sell, trade, or rent your personal information to third parties. We may share your information in the following circumstances:', 'aryaodyssey'); ?></p>
                        
                        <h3><?php _e('Service Providers', 'aryaodyssey'); ?></h3>
                        <p><?php _e('We may share information with trusted third-party service providers who assist us in:', 'aryaodyssey'); ?></p>
                        <ul>
                            <li><?php _e('Payment processing', 'aryaodyssey'); ?></li>
                            <li><?php _e('Email communications', 'aryaodyssey'); ?></li>
                            <li><?php _e('Website analytics', 'aryaodyssey'); ?></li>
                            <li><?php _e('Customer support services', 'aryaodyssey'); ?></li>
                        </ul>

                        <h3><?php _e('Legal Requirements', 'aryaodyssey'); ?></h3>
                        <p><?php _e('We may disclose your information when required by law or to:', 'aryaodyssey'); ?></p>
                        <ul>
                            <li><?php _e('Comply with legal process or government requests', 'aryaodyssey'); ?></li>
                            <li><?php _e('Protect our rights, property, or safety', 'aryaodyssey'); ?></li>
                            <li><?php _e('Enforce our terms of service', 'aryaodyssey'); ?></li>
                            <li><?php _e('Investigate fraud or security issues', 'aryaodyssey'); ?></li>
                        </ul>
                    </div>

                    <div id="data-security" class="policy-section">
                        <h2><?php _e('4. Data Security', 'aryaodyssey'); ?></h2>
                        <p><?php _e('We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. Our security measures include:', 'aryaodyssey'); ?></p>
                        <ul>
                            <li><?php _e('SSL encryption for data transmission', 'aryaodyssey'); ?></li>
                            <li><?php _e('Secure servers and firewalls', 'aryaodyssey'); ?></li>
                            <li><?php _e('Regular security audits and updates', 'aryaodyssey'); ?></li>
                            <li><?php _e('Limited access to personal information on a need-to-know basis', 'aryaodyssey'); ?></li>
                            <li><?php _e('Employee training on data protection', 'aryaodyssey'); ?></li>
                        </ul>
                        <p><?php _e('However, no method of transmission over the internet or electronic storage is 100% secure. While we strive to protect your information, we cannot guarantee absolute security.', 'aryaodyssey'); ?></p>
                    </div>

                    <div id="cookies" class="policy-section">
                        <h2><?php _e('5. Cookies and Tracking Technologies', 'aryaodyssey'); ?></h2>
                        <p><?php _e('We use cookies and similar tracking technologies to enhance your experience on our website. Cookies are small files stored on your device that help us:', 'aryaodyssey'); ?></p>
                        <ul>
                            <li><?php _e('Remember your preferences and settings', 'aryaodyssey'); ?></li>
                            <li><?php _e('Analyze website traffic and usage patterns', 'aryaodyssey'); ?></li>
                            <li><?php _e('Provide personalized content and recommendations', 'aryaodyssey'); ?></li>
                            <li><?php _e('Improve website functionality and performance', 'aryaodyssey'); ?></li>
                        </ul>
                        <p><?php _e('You can control cookies through your browser settings. However, disabling cookies may affect your ability to use certain features of our website.', 'aryaodyssey'); ?></p>
                    </div>

                    <div id="your-rights" class="policy-section">
                        <h2><?php _e('6. Your Rights and Choices', 'aryaodyssey'); ?></h2>
                        <p><?php _e('You have the following rights regarding your personal information:', 'aryaodyssey'); ?></p>
                        <ul>
                            <li><strong><?php _e('Access:', 'aryaodyssey'); ?></strong> <?php _e('Request a copy of the personal information we hold about you', 'aryaodyssey'); ?></li>
                            <li><strong><?php _e('Correction:', 'aryaodyssey'); ?></strong> <?php _e('Request correction of inaccurate or incomplete information', 'aryaodyssey'); ?></li>
                            <li><strong><?php _e('Deletion:', 'aryaodyssey'); ?></strong> <?php _e('Request deletion of your personal information (subject to legal requirements)', 'aryaodyssey'); ?></li>
                            <li><strong><?php _e('Portability:', 'aryaodyssey'); ?></strong> <?php _e('Request transfer of your data to another service provider', 'aryaodyssey'); ?></li>
                            <li><strong><?php _e('Opt-out:', 'aryaodyssey'); ?></strong> <?php _e('Unsubscribe from marketing communications at any time', 'aryaodyssey'); ?></li>
                        </ul>
                        <p><?php _e('To exercise these rights, please contact us using the information provided below.', 'aryaodyssey'); ?></p>
                    </div>

                    <div id="contact-privacy" class="policy-section">
                        <h2><?php _e('7. Contact Us', 'aryaodyssey'); ?></h2>
                        <p><?php _e('If you have any questions about this Privacy Policy or our data practices, please contact us:', 'aryaodyssey'); ?></p>
                        <div class="contact-details">
                            <p><strong><?php _e('AryaOdyssey', 'aryaodyssey'); ?></strong></p>
                            <p><?php _e('Old Manali Road, Manali, Himachal Pradesh 175131', 'aryaodyssey'); ?></p>
                            <p><?php _e('Email:', 'aryaodyssey'); ?> <a href="mailto:privacy@aryaodyssey.com">privacy@aryaodyssey.com</a></p>
                            <p><?php _e('Phone:', 'aryaodyssey'); ?> <a href="tel:+919876543210">+91 98765 43210</a></p>
                        </div>
                    </div>

                    <div class="policy-footer">
                        <p><?php _e('This Privacy Policy may be updated from time to time. We will notify you of any significant changes by posting the new policy on our website with an updated effective date.', 'aryaodyssey'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
.privacy-policy-page .legal-hero {
    height: 50vh;
    min-height: 300px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.privacy-policy-page .hero-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #1a1a1a 0%, #333 100%);
}

.legal-wrapper {
    display: grid;
    grid-template-columns: 300px 1fr;
    gap: 60px;
    align-items: flex-start;
}

.legal-sidebar {
    position: sticky;
    top: 100px;
}

.legal-nav {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.legal-nav h3 {
    color: #333;
    margin-bottom: 20px;
    font-size: 1.1rem;
}

.legal-menu {
    list-style: none;
    padding: 0;
    margin: 0;
}

.legal-menu li {
    margin-bottom: 8px;
}

.legal-menu a {
    color: #666;
    text-decoration: none;
    padding: 8px 0;
    display: block;
    font-size: 0.9rem;
    border-left: 3px solid transparent;
    padding-left: 12px;
    transition: all 0.3s ease;
}

.legal-menu a:hover,
.legal-menu a:focus {
    color: #2d5016;
    border-left-color: #2d5016;
    background: #f8f9fa;
    padding-left: 16px;
}

.legal-main {
    background: white;
    padding: 50px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.policy-header {
    margin-bottom: 50px;
    padding-bottom: 30px;
    border-bottom: 2px solid #eee;
}

.last-updated {
    color: #666;
    font-size: 0.9rem;
    margin-bottom: 20px;
}

.policy-intro {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #555;
}

.policy-section {
    margin-bottom: 50px;
}

.policy-section h2 {
    color: #333;
    margin-bottom: 25px;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
}

.policy-section h3 {
    color: #2d5016;
    margin: 30px 0 15px;
    font-size: 1.2rem;
}

.policy-section p {
    line-height: 1.7;
    margin-bottom: 20px;
    color: #555;
}

.policy-section ul {
    margin: 20px 0;
    padding-left: 20px;
}

.policy-section li {
    margin-bottom: 8px;
    line-height: 1.6;
    color: #555;
}

.contact-details {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 10px;
    margin: 20px 0;
}

.contact-details p {
    margin-bottom: 10px;
}

.contact-details a {
    color: #2d5016;
    text-decoration: none;
}

.policy-footer {
    margin-top: 50px;
    padding-top: 30px;
    border-top: 2px solid #eee;
    background: #f8f9fa;
    padding: 30px;
    border-radius: 10px;
}

@media (max-width: 768px) {
    .legal-wrapper {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .legal-sidebar {
        position: static;
        order: 2;
    }
    
    .legal-main {
        padding: 30px 20px;
        order: 1;
    }
    
    .legal-nav {
        padding: 20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for navigation links
    const navLinks = document.querySelectorAll('.legal-menu a');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const headerHeight = document.querySelector('.site-header').offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Highlight active section in navigation
    const sections = document.querySelectorAll('.policy-section');
    const navItems = document.querySelectorAll('.legal-menu a');
    
    function updateActiveNav() {
        const scrollPos = window.scrollY + 150;
        
        sections.forEach((section, index) => {
            const top = section.offsetTop;
            const bottom = top + section.offsetHeight;
            
            if (scrollPos >= top && scrollPos < bottom) {
                navItems.forEach(item => item.classList.remove('active'));
                if (navItems[index]) {
                    navItems[index].classList.add('active');
                }
            }
        });
    }
    
    window.addEventListener('scroll', updateActiveNav);
    updateActiveNav();
});
</script>

<?php get_footer(); ?>
