<?php
/** Template Name: Thank You Page */
get_header();
?>

<section class="thank-you-page bg-[#3873CC] text-white min-h-screen flex items-center justify-center">
    <div class="text-center px-6 max-w-[600px]">
        <div class="flex justify-center mb-4">
            <div id="thank-you-animation" class="w-32 h-32"></div>
        </div>
        <h1 class="text-[40px] sm:text-[48px] font-bold text-white" data-aos="fade-down">Thank You!</h1>
        <p class="text-lg mt-4 text-white" data-aos="fade-up">We appreciate your submission. Our team will get back to you soon.</p>
        <div class="flex flex-col md:flex-row gap-4 mt-8 justify-center" data-aos="fade-up">
            <a href="<?php echo home_url(); ?>" class="py-3 px-6 border border-white text-white font-semibold rounded-lg hover:bg-white hover:text-[#3873CC] transition">Back to Home</a>
            <a href="<?php echo home_url('/services'); ?>" class="py-3 px-6 border border-white text-white font-semibold rounded-lg hover:bg-white hover:text-[#3873CC] transition">View Services</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
