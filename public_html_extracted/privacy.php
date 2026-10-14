<?php
/**
 * Indian Short Movie - Privacy Policy Page
 */
$page_title = 'Privacy Policy | Indian Short Movie';
$page_description = 'Privacy Policy for Indian Short Movie.';
$current_page = 'privacy';
$base_url = './';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<main style="max-width: 1280px; margin: 0 auto; padding: 3rem 1.5rem; min-height: 80vh;">
  <!-- Privacy Hero -->
  <section style="text-align: center; max-width: 860px; margin: 0 auto 4rem auto;">
    <div style="display: inline-block; padding: 0.35rem 0.85rem; border-radius: 9999px; background: rgba(229, 9, 20, 0.15); border: 1px solid rgba(229, 9, 20, 0.3); color: #e50914; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 1rem;">
      Legal
    </div>
    <h1 style="font-family: 'Outfit', sans-serif; font-size: clamp(2.2rem, 5vw, 3.5rem); font-weight: 900; color: #ffffff; letter-spacing: -0.02em; line-height: 1.15; margin-bottom: 1.25rem;">
      Privacy <br>
      <span style="background: linear-gradient(135deg, #e50914, #ffb703); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Policy</span>
    </h1>
    <p style="font-size: 1.05rem; color: #9ca3af; line-height: 1.7;">
      Effective Date: <?php echo date('F d, Y'); ?>
    </p>
  </section>

  <!-- Content Section -->
  <section style="max-width: 860px; margin: 0 auto; color: #d1d5db; line-height: 1.8; font-size: 1rem; background: #111319; border: 1px solid #262a36; border-radius: 1.5rem; padding: 3rem;">
    
    <h2 style="color: #ffffff; font-size: 1.5rem; font-weight: 800; margin-bottom: 1rem; margin-top: 0;">1. Introduction</h2>
    <p style="margin-bottom: 2rem;">
      Welcome to Indian Short Movie. We value your privacy and are committed to protecting your personal data. This Privacy Policy explains how we collect, use, and safeguard your information when you visit our website.
    </p>

    <h2 style="color: #ffffff; font-size: 1.5rem; font-weight: 800; margin-bottom: 1rem;">2. Information We Collect</h2>
    <p style="margin-bottom: 2rem;">
      We may collect personal information such as your name, email address, and usage data when you register an account, submit a film, or interact with our platform.
    </p>

    <h2 style="color: #ffffff; font-size: 1.5rem; font-weight: 800; margin-bottom: 1rem;">3. How We Use Your Information</h2>
    <p style="margin-bottom: 2rem;">
      The information we collect is used to provide, maintain, and improve our services, communicate with you, and personalize your experience on our platform.
    </p>

    <h2 style="color: #ffffff; font-size: 1.5rem; font-weight: 800; margin-bottom: 1rem;">4. Data Security</h2>
    <p style="margin-bottom: 2rem;">
      We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.
    </p>

    <h2 style="color: #ffffff; font-size: 1.5rem; font-weight: 800; margin-bottom: 1rem;">5. Third-Party Links</h2>
    <p style="margin-bottom: 2rem;">
      Our website may contain links to third-party sites. We are not responsible for the privacy practices or content of these external sites.
    </p>

    <h2 style="color: #ffffff; font-size: 1.5rem; font-weight: 800; margin-bottom: 1rem;">6. Changes to This Policy</h2>
    <p style="margin-bottom: 2rem;">
      We may update our Privacy Policy from time to time. Any changes will be posted on this page with an updated effective date.
    </p>

    <h2 style="color: #ffffff; font-size: 1.5rem; font-weight: 800; margin-bottom: 1rem;">7. Contact Us</h2>
    <p style="margin-bottom: 0;">
      If you have any questions about this Privacy Policy, please <a href="contact.php" style="color: #e50914; text-decoration: none; font-weight: 600;">contact us</a>.
    </p>
  </section>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
