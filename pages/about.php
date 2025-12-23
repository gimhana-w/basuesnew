<?php
$page_title = 'About Us';
require_once '../config/config.php';
include '../components/header.php';
?>

<!-- Page Hero -->
<section class="hero" style="min-height: 60vh;">
    <div class="hero-background"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title-main">About Basues</h1>
            <p class="hero-description">Discover our story and commitment to excellence</p>
        </div>
    </div>
</section>

<!-- About Content -->
<section class="section">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="section-title">
                <h2>Our Story</h2>
            </div>
            <div style="margin-bottom: 3rem;">
                <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    Basues is a premium brand that is officially launching in Sri Lanka, 
                    bringing with it a commitment to excellence, quality, and innovation. 
                    Our mission is to provide Sri Lankan consumers with access to 
                    world-class products and services that exceed expectations.
                </p>
                <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.5rem;">
                    We believe in the power of quality and the importance of building 
                    lasting relationships with our customers. Every product we offer 
                    is carefully selected and crafted to meet the highest standards 
                    of excellence.
                </p>
            </div>

            <div class="section-title">
                <h2>Our Mission</h2>
            </div>
            <div style="margin-bottom: 3rem;">
                <p style="font-size: 1.1rem; line-height: 1.8;">
                    To become the leading premium brand in Sri Lanka by delivering 
                    exceptional quality products and services that enhance the lives 
                    of our customers while maintaining the highest standards of 
                    integrity and excellence.
                </p>
            </div>

            <div class="section-title">
                <h2>Our Values</h2>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <span class="feature-icon">💎</span>
                    <h3>Quality First</h3>
                    <p>We never compromise on quality, ensuring every product meets our high standards.</p>
                </div>
                <div class="feature-card">
                    <span class="feature-icon">🤝</span>
                    <h3>Customer Focus</h3>
                    <p>Our customers are at the heart of everything we do.</p>
                </div>
                <div class="feature-card">
                    <span class="feature-icon">🚀</span>
                    <h3>Innovation</h3>
                    <p>We continuously innovate to bring you the best products and experiences.</p>
                </div>
                <div class="feature-card">
                    <span class="feature-icon">🌱</span>
                    <h3>Sustainability</h3>
                    <p>We are committed to sustainable practices and responsible business.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../components/footer.php'; ?>

