<?php
$page_title = 'Home';
require_once 'config/config.php';
include 'components/header.php';
include 'components/hero.php';
?>

<!-- Categories Section -->
<section class="categories-section">
    <div class="container">
        <div class="categories-title-new">
            <h2>What we offer</h2>
        </div>
        <div class="categories-grid-new">
            <div class="category-card-new">
                <div class="category-image-wrapper">
                    <img src="assets/images/catogory/mobile.png" alt="Mobile Accessories" class="category-product-image">
                </div>
                <div class="category-content">
                    <p class="category-tagline">Power Up Fast</p>
                    <h3 class="category-title-new">Mobile Accessories</h3>
                    <a href="pages/category.php?cat=mobile" class="btn-category-shop">SHOP NOW</a>
                </div>
            </div>
            
            <div class="category-card-new">
                <div class="category-image-wrapper">
                    <img src="assets/images/catogory/car.png" alt="Vehicle Accessories" class="category-product-image">
                </div>
                <div class="category-content">
                    <p class="category-tagline">Strong durability</p>
                    <h3 class="category-title-new">Vehicle Accessories</h3>
                    <a href="pages/category.php?cat=vehicle" class="btn-category-shop">SHOP NOW</a>
                </div>
            </div>
            
            <div class="category-card-new">
                <div class="category-image-wrapper">
                    <img src="assets/images/catogory/computer.png" alt="Computer Accessories" class="category-product-image">
                </div>
                <div class="category-content">
                    <p class="category-tagline">Best In hubs in the Market</p>
                    <h3 class="category-title-new">Computer Accessories</h3>
                    <a href="pages/category.php?cat=computer" class="btn-category-shop">SHOP NOW</a>
                </div>
            </div>
            
            <div class="category-card-new">
                <div class="category-image-wrapper">
                    <img src="assets/images/catogory/life.png" alt="Lifestyle Accessories" class="category-product-image">
                </div>
                <div class="category-content">
                    <p class="category-tagline">MagSafe-compatible</p>
                    <h3 class="category-title-new">Lifestyle Accessories</h3>
                    <a href="pages/category.php?cat=lifestyle" class="btn-category-shop">SHOP NOW</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner Section -->
<section class="banner-section">
    <?php
    // Determine base path for image
    $base_path = (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '';
    ?>
    <div class="banner-wrapper">
        <img src="<?php echo $base_path; ?>assets/images/baner.jpg" alt="Banner" class="banner-image">
    </div>
</section>

<!-- Cable Products Section -->
<section class="cable-products-section">
    <div class="container">
        <div class="cable-products-grid">
            <div class="cable-card">
                <div class="cable-image-wrapper">
                    <img src="<?php echo $base_path; ?>assets/images/cable/cable 1.png" alt="Cable 1" class="cable-image">
                </div>
            </div>
            
            <div class="cable-card">
                <div class="cable-image-wrapper">
                    <img src="<?php echo $base_path; ?>assets/images/cable/cable2.png" alt="Cable 2" class="cable-image">
                </div>
            </div>
            
            <div class="cable-card">
                <div class="cable-image-wrapper">
                    <img src="<?php echo $base_path; ?>assets/images/cable/cable3.png" alt="Cable 3" class="cable-image">
                </div>
            </div>
            
            <div class="cable-card">
                <div class="cable-image-wrapper">
                    <img src="<?php echo $base_path; ?>assets/images/cable/cable4.png" alt="Cable 4" class="cable-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Earbuds Features Section -->
<section class="earbuds-features-section">
    <div class="container">
        <div class="earbuds-features-grid">
            <!-- Top Left - Punchier Bass -->
            <div class="earbuds-feature-card">
                <div class="earbuds-feature-content">
                    <h3 class="earbuds-feature-title">Punchier Bass</h3>
                    <p class="earbuds-feature-value">50%</p>
                    <div class="earbuds-feature-image-wrapper">
                        <img src="<?php echo $base_path; ?>assets/images/hero/Baseus earbud 1.png" alt="Baseus Earbuds" class="earbuds-feature-image">
                    </div>
                </div>
            </div>
            
            <!-- Top Middle - Environmental Noise Cancelling Mics -->
            <div class="earbuds-feature-card">
                <div class="earbuds-feature-content">
                    <h3 class="earbuds-feature-title">Environmental Noise Cancelling Mics</h3>
                    <div class="earbuds-feature-image-wrapper">
                        <img src="<?php echo $base_path; ?>assets/images/hero/Baseus earbud 1.png" alt="Noise Cancelling Earbud" class="earbuds-feature-image">
                    </div>
                </div>
            </div>
            
            <!-- Top Right - 12mm Oversized Drivers -->
            <div class="earbuds-feature-card">
                <div class="earbuds-feature-content">
                    <p class="earbuds-feature-value">12mm</p>
                    <h3 class="earbuds-feature-title">Oversized Drivers</h3>
                    <div class="earbuds-feature-image-wrapper">
                        <img src="<?php echo $base_path; ?>assets/images/hero/Baseus earbud 1.png" alt="12mm Driver" class="earbuds-feature-image">
                    </div>
                </div>
            </div>
            
            <!-- Bottom - Battery Life (spans 2 columns) -->
            <div class="earbuds-feature-card earbuds-feature-card-large">
                <div class="earbuds-feature-content earbuds-feature-content-battery">
                    <div class="battery-info">
                        <p class="earbuds-feature-value">6H</p>
                        <h3 class="earbuds-feature-title">Single Charge</h3>
                    </div>
                    <div class="battery-info">
                        <p class="earbuds-feature-value">25H</p>
                        <h3 class="earbuds-feature-title">with Charging Case</h3>
                    </div>
                    <div class="earbuds-feature-image-wrapper">
                        <img src="<?php echo $base_path; ?>assets/images/hero/Baseus earbud 1.png" alt="Baseus Earbuds Case" class="earbuds-feature-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose Basues?</h2>
            <p>Discover what makes us the premium choice in Sri Lanka</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <span class="feature-icon">✨</span>
                <h3>Premium Quality</h3>
                <p>We deliver only the finest quality products, ensuring excellence in every detail.</p>
            </div>
            <div class="feature-card">
                <span class="feature-icon">🇱🇰</span>
                <h3>Made for Sri Lanka</h3>
                <p>Proudly launching in Sri Lanka, designed to meet the highest standards.</p>
            </div>
            <div class="feature-card">
                <span class="feature-icon">🎯</span>
                <h3>Excellence Guaranteed</h3>
                <p>Our commitment to excellence ensures you receive the best experience.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Preview Section -->
<section class="section" style="background: #ffffff;">
    <div class="container">
        <div class="section-title">
            <h2>Welcome to Basues</h2>
            <p>Experience premium quality as we officially launch in Sri Lanka</p>
        </div>
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 2rem; color: var(--text-secondary);">
                Basues represents a new era of premium quality products in Sri Lanka. 
                We are committed to delivering excellence in every aspect of our brand, 
                from product quality to customer service. Join us as we embark on this 
                exciting journey of bringing premium experiences to Sri Lankan consumers.
            </p>
            <a href="pages/about.php" class="btn btn-primary">Learn More About Us</a>
        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>

