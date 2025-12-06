<?php
/** Template Name: Contact Page */
get_header();
?>

<!-- Contact -->
<section class="section-services section-services--about py-8 mb-12">
    <div class="max-w-[950px] flex flex-col gap-4 text-center mx-auto">
        <h1 class="text-center text-[32px] font-semibold text-white capitalize py-4" data-aos="fade-zoom-in">
            Contact Us 
        </h1>
    </div>
</section>
<section class="py-8">

<div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-full px-6 sm:px-3 mx-auto">

  <!-- === Top Row: Contact Info Boxes === -->
  <div class="grid md:grid-cols-3 gap-6 mb-12 text-center">
    <!-- Phone -->
    <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition-transform transform hover:-translate-y-1 border-2 border-blue-500">
      <div class="flex justify-center mb-3">
        <img src="https://primedocbilling.com/wp-content/uploads/2025/10/telephone.png" alt="Phone" class="w-10 h-10 transition-transform transform hover:scale-110" />
      </div>
      <h3 class="text-xl font-semibold text-gray-800 mb-1">Phone</h3>
      <a href="tel:+13476502656" class="text-[#0071E3] font-medium hover:underline">(347) 650-2656</a>
    </div>

    <!-- Email -->
    <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition-transform transform hover:-translate-y-1 border-2 border-blue-500 ">
      <div class="flex justify-center mb-3">
        <img src="https://primedocbilling.com/wp-content/uploads/2025/10/mail.png" alt="Email" class="w-10 h-10 transition-transform transform hover:scale-110" />
      </div>
      <h3 class="text-xl font-semibold text-gray-800 mb-1">E-Mail</h3>
      <a href="mailto:info@primedocbilling.com" class="text-[#0071E3] font-medium hover:underline">
        info@primedocbilling.com
      </a>
    </div>

    <!-- Address -->
    <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition-transform transform hover:-translate-y-1 border-2 border-blue-500">
      <div class="flex justify-center mb-3">
        <img src="https://primedocbilling.com/wp-content/uploads/2025/10/google.png" alt="Address" class="w-10 h-10 transition-transform transform hover:scale-110" />
      </div>
      <h3 class="text-xl font-semibold text-gray-800 mb-1">Address</h3>
      <a href="https://www.google.com/maps/place/Prime+Doc+Billing+LLC/@40.6174015,-73.9283544,19.75z/data=!4m6!3m5!1s0x89c25b31e8f10001:0x4266541c27f8214b!8m2!3d40.6174616!4d-73.9283773!16s%2Fg%2F11twq3l9t7" 
         target="_blank" 
         class="text-gray-600 hover:text-[#0071E3] transition-colors duration-300">
        1765 East 48th Street <br>Brooklyn NY 11234
      </a>
    </div>
  </div>

  <!-- === Second Section: Image & Form Side by Side === -->
  <div class="grid md:grid-cols-2 gap-10 items-center mb-12 rounded-2xl shadow-lg p-8 bg-gradient-to-r from-[#f0f7ff] via-[#eaf2ff] to-[#f0f7ff]">
    <!-- Left Column: Image -->
    <div class="flex justify-center">
      <img src="https://primedocbilling.com/wp-content/uploads/2025/10/contact-us-scaled.webp" alt="Contact Us" class="rounded-2xl shadow-md w-full h-auto object-cover transition-transform transform hover:scale-105" />
    </div>

    <!-- Right Column: Contact Form -->
    <div class="bg-white bg-opacity-95 backdrop-blur-sm rounded-2xl shadow-md p-8">
      <h2 class="text-2xl font-semibold text-[#0B1E3D] mb-4 text-center">Get in <span class="text-[#0071E3]">Touch</span></h2>
      <p class="text-gray-600 mb-6 text-center">
        Fill out the form below and our team will contact you soon.
      </p>

      <!-- Contact Form Shortcode -->
      <?php echo do_shortcode('[contact-form-7 id="4811" title="Contact form"]'); ?>
    </div>
  </div>

  <!-- === Google Map === -->
  <div class="w-full h-[400px] rounded-2xl overflow-hidden shadow-md">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d757.1414623066263!2d-73.9283544!3d40.6174015!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b31e8f10001%3A0x4266541c27f8214b!2sPrime%20Doc%20Billing%20LLC!5e0!3m2!1sen!2s!4v1761244228920!5m2!1sen!2s"
      width="100%"
      height="100%"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>

</div>

</section>

<?php get_footer(); ?>