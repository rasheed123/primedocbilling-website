<?php

/** Template Name: Mission page */
get_header();
?>

<section class="section-services section-services--about py-8 mb-12">
    <div class="wrap">
        <div class="bgWave waveOne"></div>
        <div class="bgWave waveTwo"></div>
    </div>
    <h1 class="text-center text-[32px] font-semibold text-white capitalize">
        Mission / Vision
    </h1>
</section>
<section class="pb-10 lg:pb-16">

    <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3
                mx-auto">
        <div class="md:grid grid-cols-12 gap-14 max-w-[1024px] mx-auto place-items-center md:place-items-start">
            <div class="col-span-4 flex flex-col items-center gap-6">
                <img src="<?php echo get_theme_file_uri()?>/assets/images/img_mission.png" alt="Photo" data-aos="fade-up">
                <div class="flex flex-col gap-2 items-center">
                    <h5 class="capitalize text-[28px] text-gray-700 text-center" data-aos="fade-up">prime doc billing</h5>
                    <div class="border-t w-full" data-aos="fade-up"></div>
                    <small class="text-gray-500 text-center" data-aos="fade-up">Commited to excelence since 2023</small>
                </div>
            </div>
            <div class="col-span-8 flex flex-col gap-10 mt-10 md:mt-0">
                <div>
                    <h3 class="capitalize text-[24px] mb-2 text-gray-700 font-semibold" data-aos="fade-up">mission</h3>
                    <p class="text-gray-600 leading-7" data-aos="fade-up">
                    We'll be using our digital health approach to help providers & practices improve clinical workflows, boost practice revenue, modernize the patient experience, and lower operational costs in order to bring innovation to the healthcare sector as the world has become increasingly digitalized. ensuring that our clients receive high-quality, reasonably priced services. 

                    </p>
                </div>
                <div>
                    <h3 class="capitalize text-[24px] mb-2 text-gray-700 font-semibold" data-aos="fade-up">vision</h3>
                    <p class="text-gray-600 leading-7" data-aos="fade-up">
                    Offering outstanding services to its clients and treating the practices dedicatedly, Prime Doc Billing LLC, is eager to play a major part in the healthcare sector. We had visions of becoming a reputable business in the IT healthcare industry, providing cutting-edge, technologically advanced service, and contributing to societal improvement.
                    </p>
                </div>
            </div>
        </div>
</section>

<?php get_footer(); ?>