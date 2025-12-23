<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../config/config.php';
}
?>
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <?php
                $base_path = (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '';
                ?>
                <img src="<?php echo $base_path; ?>assets/images/Baseus Logo with guides@2x.png" alt="Basues Logo" class="footer-logo">
                <p><?php echo SITE_TAGLINE; ?></p>
                <p class="footer-location">📍 Sri Lanka</p>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <?php
                    $base_path = (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '';
                    ?>
                    <li><a href="<?php echo $base_path; ?>index.php">Home</a></li>
                    <li><a href="<?php echo $base_path; ?>pages/category.php">Category</a></li>
                    <li><a href="<?php echo $base_path; ?>pages/about.php">About</a></li>
                    <li><a href="<?php echo $base_path; ?>pages/shop.php">Shop</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Contact Info</h4>
                <ul>
                    <li>📧 <?php echo SITE_EMAIL; ?></li>
                    <li>📞 <?php echo SITE_PHONE; ?></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" aria-label="Facebook">Facebook</a>
                    <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" aria-label="Instagram">Instagram</a>
                    <a href="<?php echo TWITTER_URL; ?>" target="_blank" aria-label="Twitter">Twitter</a>
                    <a href="<?php echo LINKEDIN_URL; ?>" target="_blank" aria-label="LinkedIn">LinkedIn</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved. | Officially Launching in Sri Lanka</p>
        </div>
    </div>
</footer>
<?php
// Determine base path for assets
$base_path = (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '';
?>
<script src="<?php echo $base_path; ?>assets/js/main.js"></script>
</body>
</html>

