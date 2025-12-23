<?php
$page_title = 'Category';
require_once '../config/config.php';
include '../components/header.php';
?>

<!-- Page Hero -->
<section class="hero" style="min-height: 60vh;">
    <div class="hero-background"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title-main">Categories</h1>
            <p class="hero-description">Browse our product categories</p>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Our Categories</h2>
            <p>Explore our wide range of premium product categories</p>
        </div>
        <div class="products-grid">
            <div class="product-card">
                <span class="product-icon">👔</span>
                <h3>Fashion</h3>
                <p>Premium fashion items and accessories</p>
            </div>
            <div class="product-card">
                <span class="product-icon">💼</span>
                <h3>Lifestyle</h3>
                <p>Products for your everyday lifestyle</p>
            </div>
            <div class="product-card">
                <span class="product-icon">🏠</span>
                <h3>Home & Living</h3>
                <p>Premium home and living essentials</p>
            </div>
            <div class="product-card">
                <span class="product-icon">🎁</span>
                <h3>Gifts</h3>
                <p>Thoughtful gifts for special occasions</p>
            </div>
        </div>
    </div>
</section>

<?php include '../components/footer.php'; ?>

