<?php

/** Template Name: Company profile page */
get_header();
?>

<section class="section-services section-services--about py-8 mb-12">
    <div class="wrap">
        <div class="bgWave waveOne"></div>
        <div class="bgWave waveTwo"></div>
    </div>
    <h1 class="text-center text-[32px] font-semibold text-white capitalize" data-aos="fade-zoom-in">
        company profile
    </h1>
</section>
<section class="pb-10 lg:pb-16">
    <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3
                mx-auto">
        <div class="md:grid grid-cols-12 gap-14 max-w-[1024px] mx-auto place-items-center md:place-items-start">
            <div class="col-span-5 flex flex-col items-center gap-12">
                <img src="<?php echo get_theme_file_uri()?>/assets/images/img-company-profile.png" alt="Photo" class="border-l border-[#00D1B2] pl-4" data-aos="fade-up">
                <a href="<?php echo site_url();?>/wp-content/uploads/2025/05/PDB-Profile-compressed.pdf" download class="hover:shadow-lg transition duration-300 flex gap-2 items-center py-3 px-8 capitalize bg-[#00D1B2] text-white text-[16px] font-medium inline-block" data-aos="fade-up">download
                    profile
                    <img src="<?php echo get_theme_file_uri()?>/assets/images/file-down.png" alt="icon">
                </a>

            </div>
            <div class="col-span-7 mt-10 md:mt-0 -order-1">
                <div class="flex flex-col gap-5 items-start mb-8 md:mb-16">
                    <img src="<?php echo get_theme_file_uri()?>/assets/images/logo_profile.png" alt="Photo" data-aos="fade-up">
                    <p class="text-gray-600 leading-7" data-aos="fade-up">
                       All sizes of practices and specializations can benefit from Prime Doc Billing LLC's commitment to optimizing the revenue cycle. 
                    </p>
                    <p class="text-gray-600 leading-7" data-aos="fade-up">
                        With years of industry experience, we have helped numerous providers transform their failing practices into profitable enterprises. Our highly qualified staff is experienced in working with the practices of providers to increase reimbursements and decrease denials.      
                    </p>
                    <p class="text-gray-600 leading-7" data-aos="fade-up">
                    We take pride in providing top-notch customer service and solutions that are specifically designed to fit the individual requirements of each healthcare practice. Count on us to quickly handle your medical billing needs so you can concentrate on providing high-quality patient care.    
                </p>
                </div>
            </div>
        </div>
</section>

<?php get_footer(); ?>