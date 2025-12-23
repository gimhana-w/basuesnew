<?php
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../config/config.php';
}
$current_page = basename($_SERVER['PHP_SELF'], '.php');
// Determine base path for navigation links
$base_path = (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '';
?>
<nav class="navbar" id="navbar">
    <div class="container">
        <div class="nav-wrapper">
            <div class="logo">
                <a href="<?php echo $base_path; ?>index.php" class="logo-link">
                    <img src="<?php echo $base_path; ?>assets/images/Baseus Logo with guides@2x.png" alt="Basues Logo" class="logo-image">
                </a>
            </div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="<?php echo $base_path; ?>index.php" class="<?php echo $current_page == 'index' ? 'active' : ''; ?>">Home</a></li>
                <li><a href="<?php echo $base_path; ?>pages/category.php" class="<?php echo $current_page == 'category' ? 'active' : ''; ?>">Category</a></li>
                <li><a href="<?php echo $base_path; ?>pages/about.php" class="<?php echo $current_page == 'about' ? 'active' : ''; ?>">About</a></li>
                <li><a href="<?php echo $base_path; ?>pages/shop.php" class="<?php echo $current_page == 'shop' ? 'active' : ''; ?>">Shop</a></li>
            </ul>
            <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>

