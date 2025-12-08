<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package primedocbilling
 */

?>

<!-- Footer -->
 <footer class="bg-[#3873CC] text-white py-16 px-6 sm:px-12 lg:px-20">
    <div class="max-w-[1280px] mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-12">
      <!-- Logo & Description -->
      <div class="space-y-6 flex flex-col justify-start">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block">
          <img
            src="<?php echo esc_url( get_theme_file_uri( '/assets/images/logo_footer.png' ) ); ?>"
            alt="<?php esc_attr_e( 'Prime Doc Billing company logo in white and blue colors', 'primedocbilling' ); ?>"
            width="160"
            height="auto"
            class="hover:opacity-90 transition-opacity duration-300"
            loading="lazy"
          />
        </a>
        <p class="text-[#D1D5DB] text-sm leading-relaxed max-w-[280px]">
          <?php esc_html_e( 'Empowering your medical practice with expert billing, coding, and revenue cycle management solutions.', 'primedocbilling' ); ?>
        </p>
		<span class="block text-[#D1D5DB] mb-2 uppercase tracking-wide font-semibold text-xs"><?php esc_html_e( 'Follow us on', 'primedocbilling' ); ?></span>
        <div class="flex space-x-4 mt-2">
          <a href="<?php echo esc_url( 'https://web.facebook.com/Primedocbilling' ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Facebook', 'primedocbilling' ); ?>" class="hover:text-gray-300 transition-colors duration-200">
            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/facebook.png' ) ); ?>" alt="<?php esc_attr_e( 'Facebook icon in white', 'primedocbilling' ); ?>" class="w-6 h-6" />
          </a>
          <a href="<?php echo esc_url( 'https://web.twitter.com/Primedocbilling' ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Twitter', 'primedocbilling' ); ?>" class="hover:text-gray-300 transition-colors duration-200">
            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/twitter.png' ) ); ?>" alt="<?php esc_attr_e( 'Twitter icon in white', 'primedocbilling' ); ?>" class="w-6 h-6" />
          </a>
          <a href="<?php echo esc_url( 'https://www.instagram.com/primedocbillingllc/' ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Instagram', 'primedocbilling' ); ?>" class="hover:text-gray-300 transition-colors duration-200">
            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/instagram.png' ) ); ?>" alt="<?php esc_attr_e( 'Instagram icon in white', 'primedocbilling' ); ?>" class="w-6 h-6" />
          </a>
          <a href="<?php echo esc_url( 'https://www.linkedin.com/company/prime-doc-billing-llc/' ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'LinkedIn', 'primedocbilling' ); ?>" class="hover:text-gray-300 transition-colors duration-200">
            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/invision.png' ) ); ?>" alt="<?php esc_attr_e( 'LinkedIn icon in white', 'primedocbilling' ); ?>" class="w-6 h-6" />
          </a>
        </div>
      </div>

      <!-- Services Column 1 -->
      <div class="space-y-6">
        <h4 class="uppercase font-semibold tracking-widest text-lg border-b border-white/30 pb-2">
          Services
        </h4>
        <ul class="space-y-3 text-sm text-[#E0E7FF]">
          <li>
            <a href="<?php echo site_url() ?>/medical-billing/medical-coding/" class="hover:text-white transition-colors duration-200 capitalize">Medical Coding</a>
          </li>
          <li>
            <a href="<?php echo site_url() ?>/medical-billing/service/" class="hover:text-white transition-colors duration-200 capitalize">Medical Billing</a>
          </li>
          <li>
            <a href="<?php echo site_url() ?>/medical-billing/rcm/" class="hover:text-white transition-colors duration-200 capitalize">Revenue Cycle Management</a>
          </li>
          <li>
            <a href="<?php echo site_url() ?>/medical-billing/credentialing/" class="hover:text-white transition-colors duration-200 capitalize">Credentialing</a>
          </li>
          <li>
            <a href="<?php echo site_url() ?>/medical-billing/practice-management/" class="hover:text-white transition-colors duration-200 capitalize">Practice Management</a>
          </li>
          <li>
            <a href="<?php echo site_url() ?>/medical-billing/accounts-receivables/" class="hover:text-white transition-colors duration-200 capitalize">Accounts Receivable</a>
          </li>
          <li>
            <a href="<?php echo site_url() ?>/medical-billing/denial-management/" class="hover:text-white transition-colors duration-200 capitalize">Denial Management</a>
          </li>
        </ul>
      </div>

      <!-- Services Column 2 -->
      <div class="space-y-6">
        <h4 class="uppercase font-semibold tracking-widest text-lg border-b border-white/30 pb-2">
          More Services
        </h4>
        <ul class="space-y-3 text-sm text-[#E0E7FF]">
          <li>
            <a href="<?php echo site_url() ?>/medical-billing/prior-authorization/" class="hover:text-white transition-colors duration-200 capitalize">Prior Authorization</a>
          </li>
          <li>
            <a href="<?php echo site_url() ?>/medical-billing/scribing/" class="hover:text-white transition-colors duration-200 capitalize">Scribing</a>
          </li>
          <li>
            <a href="<?php echo site_url() ?>/medical-billing/insurance-verification/" class="hover:text-white transition-colors duration-200 capitalize">Verification of Benefits</a>
          </li>
          <li>
            <a href="<?php echo site_url() ?>/medical-billing/website-development/" class="hover:text-white transition-colors duration-200 capitalize">Website Development</a>
          </li>
          <li>
            <a href="<?php echo site_url() ?>/medical-billing/virtual-assistant/" class="hover:text-white transition-colors duration-200 capitalize">Virtual Assistant</a>
          </li>
          <li>
            <a href="<?php echo site_url() ?>/medical-billing/workers-compensation/" class="hover:text-white transition-colors duration-200 capitalize">Workers Compensation Billing</a>
          </li>
        </ul>
      </div>

      <!-- About Us -->
      <div class="space-y-6">
        <h4 class="uppercase font-semibold tracking-widest text-lg border-b border-white/30 pb-2">
          About Us
        </h4>
        <ul class="space-y-3 text-sm text-[#E0E7FF]">
          <li>
            <a href="<?php echo site_url() ?>/mission/" class="hover:text-white transition-colors duration-200 capitalize">Mission / Vision</a>
          </li>
          <li>
            <a href="<?php echo site_url() ?>/core-values/" class="hover:text-white transition-colors duration-200 capitalize">Core Values</a>
          </li>
          <li>
            <a href="<?php echo site_url() ?>/company-profile/" class="hover:text-white transition-colors duration-200 capitalize">Company Profile</a>
          </li>
        </ul>
      </div>

      <!-- Get in Touch -->
      <div class="space-y-6">
        <h4 class="uppercase font-semibold tracking-widest text-lg border-b border-white/30 pb-2">
          Get in Touch
        </h4>
        <ul class="space-y-5 text-sm text-[#E0E7FF]">
          <li>
            <a href="mailto:info@primedocbilling.com" class="flex items-start gap-3 hover:text-white transition-colors duration-200">
              <img src="<?php echo get_theme_file_uri() ?>/assets/images/mail.png" alt="Email icon white envelope" class="mt-1 w-5 h-5" />
              <span>info@primedocbilling.com</span>
            </a>
          </li>
          <li>
            <a href="tel:(347) 650-2656" class="flex items-start gap-3 hover:text-white transition-colors duration-200">
              <img src="<?php echo get_theme_file_uri() ?>/assets/images/phone_outline.png" alt="Phone icon white outline" class="mt-1 w-5 h-5" />
              <span>(347) 650-2656</span>
            </a>
          </li>
          <li>
            <a href="tel:+13476502656" class="flex items-start gap-3 hover:text-white transition-colors duration-200">
              <img src="<?php echo get_theme_file_uri() ?>/assets/images/bxl_whatsapp.png" alt="WhatsApp icon white" class="mt-1 w-5 h-5" />
              <span>(347) 650-2656</span>
            </a>
          </li>
          <li>
            <a href="https://maps.app.goo.gl/a4xRgQK3wbm1Ppqm7" target="_blank" class="flex items-start gap-3 hover:text-white transition-colors duration-200">
              <img src="<?php echo get_theme_file_uri() ?>/assets/images/location_outline.png" alt="Location pin icon white outline" class="mt-1 w-5 h-5" />
              <span>1765 East 48th Street<br />Brooklyn NY 11234</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="mt-16 border-t border-white/20 pt-8 text-center text-[#D1D5DB] text-xs select-none">
      &copy; <?php echo date('Y'); ?> Prime Doc Billing. All rights reserved.
    </div>
  </footer>

 <script>
document.addEventListener('wpcf7mailsent', function(event) {
  const formId = event.detail.contactFormId.toString();

  // ✅ Form IDs that should show the popup (no redirect)
  const showPopupForms = ['46', '48', '4521', '49', '4816'];

  // ✅ If the submitted form is one of the popup forms
  if (showPopupForms.includes(formId)) {
    // Fade out popup modal if open
    const popupModal = document.getElementById('demoModal');
    if (popupModal) {
      popupModal.classList.add('transition-opacity', 'duration-700', 'opacity-0');
      setTimeout(() => popupModal.classList.add('hidden'), 700);
    }

    // ✅ Create semi-transparent background overlay
    const overlay = document.createElement('div');
    overlay.classList.add(
      'fixed', 'inset-0', 'bg-black/70', 'backdrop-blur-sm',
      'z-[9999998]', 'transition-opacity', 'duration-700', 'opacity-0'
    );
    document.body.appendChild(overlay);
    setTimeout(() => overlay.classList.add('opacity-100'), 10);

    // ✅ Create centered thank-you message
    const messageContainer = document.createElement('div');
    messageContainer.classList.add(
      'fixed', 'top-1/2', 'left-1/2', 'transform', '-translate-x-1/2', '-translate-y-1/2',
      'bg-white', 'border-2', 'border-black', 'rounded-xl',
      'p-10', 'text-center', 'shadow-2xl', 'z-[9999999]', 'max-w-[80%]',
      'transition-all', 'duration-700', 'opacity-0', 'scale-95'
    );

    messageContainer.innerHTML = `
      <button class="popup-close-btn absolute top-3 right-4 text-3xl font-bold text-[#3873cc] hover:text-black transition-all">&times;</button>
      <h2 class="text-[34px] text-[#222] border-2 border-[#3873cc] inline-block px-6 py-2 rounded mb-4 font-semibold">
        Thank You!
      </h2>
      <p class="text-[20px] text-[#333] border-2 border-[#3873cc] p-5 rounded leading-relaxed">
        We have received your application. Our team will get back to you soon.
      </p>
    `;
    document.body.appendChild(messageContainer);

    // ✅ Fade in the thank-you message
    setTimeout(() => {
      messageContainer.classList.remove('opacity-0', 'scale-95');
      messageContainer.classList.add('opacity-100', 'scale-100');
    }, 50);

    // ✅ Close button functionality
    messageContainer.querySelector('.popup-close-btn').addEventListener('click', function() {
      overlay.classList.add('opacity-0');
      messageContainer.classList.add('opacity-0', 'scale-95');
      setTimeout(() => {
        overlay.remove();
        messageContainer.remove();
      }, 700);
    });

    // ✅ Auto-close after 5 seconds
    setTimeout(() => {
      overlay.classList.add('opacity-0');
      messageContainer.classList.add('opacity-0', 'scale-95');
      setTimeout(() => {
        overlay.remove();
        messageContainer.remove();
      }, 700);
    }, 500000);

    return; // stop redirect
  }

  // ✅ All other forms → redirect to thank-you page
  window.location.href = 'https://primedocbilling.com/thankyou/';
}, false);

// ✅ Breadcrumb code (leave as is)
document.addEventListener("DOMContentLoaded", function() {
  const breadcrumbContainer = document.getElementById('breadcrumb');
  if (breadcrumbContainer) {
    const pathArray = window.location.pathname.split('/').filter(Boolean);
    const baseUrl = window.location.origin;
    const breadcrumbItems = pathArray.map((item, index) => {
      const url = baseUrl + '/' + pathArray.slice(0, index + 1).join('/');
      return `<a href="${url}" class="text-white hover:underline">${item.replace(/-/g, ' ')}</a>`;
    });
    breadcrumbContainer.innerHTML = breadcrumbItems.join(' / ');
  }
});
</script>

<!-- Floating WhatsApp Button (Icon + Text) -->
<a href="https://wa.me/13476502656" 
   target="_blank" 
   rel="noopener noreferrer"
   class="fixed bottom-5 left-5 z-50 flex items-center space-x-2 bg-green-500 hover:bg-green-600 text-white font-medium rounded-full px-4 py-2 shadow-lg transition transform hover:scale-110"
   aria-label="Chat on WhatsApp">

  <!-- WhatsApp Icon -->
  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
       viewBox="0 0 24 24" class="w-6 h-6">
    <path d="M12.04 2.002a9.94 9.94 0 0 0-8.516 15.18l-.556 4.055 4.145-1.087a9.94 9.94 0 0 0 4.927 1.3h.004a9.96 9.96 0 0 0 7.07-2.93 9.94 9.94 0 0 0 2.93-7.07 9.95 9.95 0 0 0-9.94-9.94Zm.003 18.17h-.003a8.19 8.19 0 0 1-4.17-1.14l-.3-.18-2.46.64.65-2.4-.2-.31a8.16 8.16 0 1 1 6.48 3.39Zm4.48-6.13c-.25-.13-1.47-.72-1.7-.81-.23-.08-.4-.13-.56.12s-.64.81-.79.98-.29.19-.54.06a6.65 6.65 0 0 1-1.95-1.2 7.26 7.26 0 0 1-1.34-1.65c-.14-.25 0-.38.1-.5.1-.1.25-.27.37-.4s.16-.23.24-.38.04-.28-.02-.4c-.06-.12-.56-1.36-.77-1.86-.2-.48-.4-.4-.56-.41h-.47c-.15 0-.4.06-.61.28s-.8.78-.8 1.9.82 2.2.93 2.35c.12.16 1.63 2.49 3.94 3.5.55.24.98.38 1.31.49.55.17 1.05.14 1.45.08.44-.07 1.36-.56 1.55-1.1.19-.55.19-1.03.13-1.1-.05-.07-.22-.11-.46-.23Z"/>
  </svg>

  <!-- Text -->
  <span>WhatsApp</span>
</a>

<!-- Hidden elements for accordion icons -->
<span id="accordionPlus" data-icon-path="https://primedocbilling.com/wp-content/themes/primedocbilling/assets/images/accordion_plus.png"></span>
<span id="accordionExpanded" data-icon-path="https://primedocbilling.com/wp-content/themes/primedocbilling/assets/images/accordion_expanded.png"></span>

<!-- Modal Background this code for popup  -->
<!-- Modal Background -->
<div id="demoModal"
  class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden items-center justify-center z-[9999999] overflow-y-auto py-6 sm:py-10">
  
  <!-- Modal Box -->
  <div class="bg-white w-full max-w-lg mx-auto rounded-2xl shadow-2xl relative my-auto max-h-[90vh] overflow-y-auto">

    <!-- Header Bar -->
    <div class="bg-[#2F6FD6] text-white flex items-center justify-between px-4 py-3 rounded-t-2xl">
      <h2 class="text-lg sm:text-2xl font-semibold text-center flex-1">Request A Free Practice Analysis</h2>

      <!-- Close Button -->
      <button id="closeDemoModal"
        class="ml-3 text-white hover:text-gray-200 text-3xl font-bold leading-none focus:outline-none">
        &times;
      </button>
    </div>

    <!-- Inner Content -->
    <div class="p-4 sm:p-8">
      <div class="space-y-2">
        <?php echo do_shortcode('[contact-form-7 id="c7b4932" title="Request a Free Analysis - Modal"]'); ?>
      </div>
    </div>
  </div>

</div>

<?php wp_footer(); ?>
</body>
</html>