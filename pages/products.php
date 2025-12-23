<?php
$page_title = 'Products';
require_once '../config/config.php';
include '../components/header.php';
?>

<!-- Page Hero -->
<section class="hero" style="min-height: 60vh;">
    <div class="hero-background"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title-main">Our Products</h1>
            <p class="hero-description">Discover our premium collection</p>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Premium Collection</h2>
            <p>Explore our range of high-quality products</p>
        </div>
        <div class="products-grid">
            <div class="product-card">
                <span class="product-icon">⭐</span>
                <h3>Premium Product Line 1</h3>
                <p>Experience the finest quality with our signature product line, designed for excellence.</p>
            </div>
            <div class="product-card">
                <span class="product-icon">🌟</span>
                <h3>Premium Product Line 2</h3>
                <p>Discover our innovative range of products that combine style and functionality.</p>
            </div>
            <div class="product-card">
                <span class="product-icon">✨</span>
                <h3>Premium Product Line 3</h3>
                <p>Quality meets elegance in our carefully curated premium collection.</p>
            </div>
            <div class="product-card">
                <span class="product-icon">💫</span>
                <h3>Premium Product Line 4</h3>
                <p>Excellence in every detail, crafted to perfection for discerning customers.</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 3rem;">
            <p style="font-size: 1.1rem; margin-bottom: 2rem; color: var(--text-secondary);">
                More products coming soon as we officially launch in Sri Lanka!
            </p>
            <a href="contact.php" class="btn btn-primary">Contact Us for More Info</a>
        </div>
    </div>
</section>

<?php include '../components/footer.php'; ?>

