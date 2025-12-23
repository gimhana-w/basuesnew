<?php
$page_title = 'Contact Us';
require_once '../config/config.php';
include '../components/header.php';
?>

<!-- Page Hero -->
<section class="hero" style="min-height: 60vh;">
    <div class="hero-background"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title-main">Get In Touch</h1>
            <p class="hero-description">We'd love to hear from you</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">
            <div class="section-title">
                <h2>Contact Basues</h2>
                <p>Reach out to us for inquiries, partnerships, or any questions</p>
            </div>
            
            <?php if (isset($_GET['success'])): ?>
                <div style="background: rgba(76, 175, 80, 0.2); border: 1px solid rgba(76, 175, 80, 0.5); 
                            padding: 1rem; border-radius: 10px; margin-bottom: 2rem; color: #4caf50; text-align: center;">
                    <strong>✓</strong> Thank you! Your message has been sent successfully.
                </div>
            <?php endif; ?>
            
            <?php if (isset($_GET['error'])): ?>
                <div style="background: rgba(244, 67, 54, 0.2); border: 1px solid rgba(244, 67, 54, 0.5); 
                            padding: 1rem; border-radius: 10px; margin-bottom: 2rem; color: #f44336; text-align: center;">
                    <strong>✗</strong> <?php echo htmlspecialchars($_GET['error']); ?>
                </div>
            <?php endif; ?>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                <div class="feature-card">
                    <span class="feature-icon">📧</span>
                    <h3>Email</h3>
                    <p><?php echo SITE_EMAIL; ?></p>
                </div>
                <div class="feature-card">
                    <span class="feature-icon">📞</span>
                    <h3>Phone</h3>
                    <p><?php echo SITE_PHONE; ?></p>
                </div>
                <div class="feature-card">
                    <span class="feature-icon">📍</span>
                    <h3>Location</h3>
                    <p>Sri Lanka</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="feature-card" style="text-align: left;">
                <h3 style="text-align: center; margin-bottom: 2rem;">Send us a Message</h3>
                <form action="../process_contact.php" method="POST" style="display: flex; flex-direction: column; gap: 1.5rem;">
                    <div>
                        <label for="name" style="display: block; margin-bottom: 0.5rem; color: var(--text-dark); font-weight: 500;">Name</label>
                        <input type="text" id="name" name="name" required 
                               style="width: 100%; padding: 1rem; border-radius: 10px; border: 1px solid var(--border-color); 
                                      background: #ffffff; color: var(--text-dark); 
                                      font-family: inherit; font-size: 1rem;">
                    </div>
                    <div>
                        <label for="email" style="display: block; margin-bottom: 0.5rem; color: var(--text-dark); font-weight: 500;">Email</label>
                        <input type="email" id="email" name="email" required 
                               style="width: 100%; padding: 1rem; border-radius: 10px; border: 1px solid var(--border-color); 
                                      background: #ffffff; color: var(--text-dark); 
                                      font-family: inherit; font-size: 1rem;">
                    </div>
                    <div>
                        <label for="subject" style="display: block; margin-bottom: 0.5rem; color: var(--text-dark); font-weight: 500;">Subject</label>
                        <input type="text" id="subject" name="subject" required 
                               style="width: 100%; padding: 1rem; border-radius: 10px; border: 1px solid var(--border-color); 
                                      background: #ffffff; color: var(--text-dark); 
                                      font-family: inherit; font-size: 1rem;">
                    </div>
                    <div>
                        <label for="message" style="display: block; margin-bottom: 0.5rem; color: var(--text-dark); font-weight: 500;">Message</label>
                        <textarea id="message" name="message" rows="5" required 
                                  style="width: 100%; padding: 1rem; border-radius: 10px; border: 1px solid var(--border-color); 
                                         background: #ffffff; color: var(--text-dark); 
                                         font-family: inherit; font-size: 1rem; resize: vertical;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="align-self: center; margin-top: 1rem;">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include '../components/footer.php'; ?>

