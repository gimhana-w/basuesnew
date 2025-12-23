<section class="hero">
    <div class="hero-slider">
        <?php
        // Determine base path for images
        $base_path = (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '';
        ?>
        
        <!-- Slide 1 - Baseus PicoGo Series -->
        <div class="hero-slide active hero-slide-picogo">
            <div class="hero-background hero-background-picogo">
                <div class="hero-overlay"></div>
            </div>
            
            <div class="hero-products-picogo">
                <img src="<?php echo $base_path; ?>assets/images/hero/basues charger.png" alt="67W Wall Charger" class="hero-product-picogo product-charger-67w">
                <img src="<?php echo $base_path; ?>assets/images/hero/Baseus earbud 1.png" alt="Earbuds" class="hero-product-picogo product-earbuds">
                <img src="<?php echo $base_path; ?>assets/images/hero/baseus power bank 1.png" alt="Power Bank" class="hero-product-picogo product-powerbank">
                <img src="<?php echo $base_path; ?>assets/images/hero/basues mouse.png" alt="Mouse" class="hero-product-picogo product-mouse">
                <img src="<?php echo $base_path; ?>assets/images/hero/Basues-hedphoen.png" alt="Headphones" class="hero-product-picogo product-headphones">
            </div>
            
            <div class="container">
                <div class="hero-content hero-content-picogo">
                    <h1 class="hero-title hero-title-picogo">
                        <span class="hero-title-line1">Designed for Life — Powered by You.</span>
                    </h1>
                    <p class="hero-description hero-description-picogo">
                    Precision-engineered accessories that elevate your everyday technology 
                    </p>
                    
                </div>
            </div>
        </div>
        
        <!-- Slide 2 - Monitor Charge Percentage -->
        <div class="hero-slide hero-slide-monitor">
            <div class="hero-background hero-background-monitor">
                <div class="hero-overlay"></div>
            </div>
            
            <!-- Slide 2 Images -->
            <div class="hero-products-monitor">
                <img src="<?php echo $base_path; ?>assets/images/hero/slide2/Gemini_Generated_Image_vrnqu4vrnqu4vrnq-removebg-preview.png" alt="Monitor Charge Percentage" class="monitor-slide-image monitor-image-left">
                <img src="<?php echo $base_path; ?>assets/images/hero/slide2/Gemini_Generated_Image_vrnqu4vrnqu4vrnq-removebg-preview.png" alt="Monitor Charge Percentage" class="monitor-slide-image monitor-image-right">
            </div>
            
            <div class="container">
                <div class="hero-content hero-content-monitor">
                    <h1 class="hero-title hero-title-monitor">
                        <span class="hero-title-line1">Your Devices</span>
                        <span class="hero-title-line2">Our Power</span>
                        
                    </h1>
                    <p class="hero-description hero-description-monitor">
                        Real-Time &amp; Precise
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Slide 3 - Immersive Headphone Experience -->
        <div class="hero-slide hero-slide-headphones">
            <div class="hero-background hero-background-headphones">
                <div class="hero-overlay"></div>
            </div>

            <div class="container">
                <div class="hero-headphones-wrapper">
                    <!-- Left: Text -->
                    <div class="hero-content hero-content-headphones">
                        <h1 class="hero-title hero-title-headphones">
                            <span class="hero-title-line1">Pure Power</span>
                            <span class="hero-title-line2">Pure Design</span>
                        </h1>
                        <p class="hero-description hero-description-headphones">
                        Seamless charging, audio, and connectivity — designed to perform without distraction.
                        </p>
                    </div>

                    <!-- Right: Headphone image -->
                    <div class="hero-headphones-image-wrapper">
                        <img
                            src="<?php echo $base_path; ?>assets/images/hero/slide3/product.png"
                            alt="Basues Headphones"
                            class="hero-headphones-image"
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Slider Navigation -->
    <div class="hero-slider-nav">
        <button class="slider-prev" aria-label="Previous slide">‹</button>
        <div class="slider-dots">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
        </div>
        <button class="slider-next" aria-label="Next slide">›</button>
    </div>
    
    <div class="scroll-indicator">
        <span>Scroll</span>
        <div class="scroll-arrow"></div>
    </div>
</section>

