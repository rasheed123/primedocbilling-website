<?php

/** Template Name: Front Page */

get_header();
?>
<!-- Hero -->
<section class="hero bg-[#3873CC] text-white">
    <div class="wrap">
        <div class="bgWave waveOne"></div>
        <div class="bgWave waveTwo"></div> 
    </div>
    <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
        <div class="flex flex-col lg:flex-row gap-2 items-center">
            <!-- Column 1 -->
            <div class="py-8 md:py-10 max-w-[558px] hero-maxw">
                <h1 class="text-[32px] sm:text-[48px] font-bold capitalize hero-heading" data-aos="fade-right">
                    Putting Patients First, Every Claim, Every Time
                </h1>
            <div class="flex flex-col md:flex-row gap-6 mt-8 md:mt-16" data-aos="fade-up">
                <!-- Calendly Link Button - Replaces your existing button -->
                    <a href="https://primedocbilling.com/schedule-demo/" class="hover:border-white border border-[#00D1B2] hover:bg-transparent shadow-lg hover:shadow-none transition duration-300 ease-in hero-btn py-4 px-8 capitalize bg-[#00D1B2] text-white text-[18px] font-medium rounded text-center">
                        Book a Demo
                    </a>
                    <button class="hover:border-white hover:border-white hover:bg-transparent border-[#00D1B2] bg-[#00D1B2] shadow-lg hover:shadow-none transition duration-300 ease-in-out hero-btn py-4 px-8 capitalize border text-[15px] font-medium rounded" data-te-toggle="modal" data-te-target="#requestModal" data-te-ripple-init data-te-ripple-color="light" id="openDemoModal">
                        request a free practice analysis
                    </button>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="self-end over" data-aos="fade-left">
                <img src="<?php echo get_theme_file_uri() ?>/assets/images/medical-billing-company.webp" alt="medical billing company
 " />
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-4">
    <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
        <div class="flex justify-between items-center testimonial-slider">
            <div class="testimonial__frame">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri() ?>/assets/images/pfmb.png" >
                    <img 
  src="https://primedocbilling.com/wp-content/themes/primedocbilling/assets/images/pf.png" 
  alt="PrimeDoc Billing Logo" 
  width="180" 
  height="80" 
   
  decoding="async"
  class="testimonial__logo testimonial__logo--pf object-contain mx-auto"
  style="max-width: 180px; height: auto;"
>
                </picture>
            </div>
            <div class="testimonial__frame">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri() ?>/assets/images/cmdmb.png" >
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/cmd.png" alt="Logo" class="testimonial__logo testimonial__logo--cmd"  />
                </picture>
            </div>
            <div class="testimonial__frame" style="max-width: 200px; max-height: 100px;">
                <picture>
                    <source media="(max-width: 767px)" srcset="https://primedocbilling.com/wp-content/uploads/2025/03/cgm-aprima.png" loading="lazy" >
                    <img 
  src="https://primedocbilling.com/wp-content/uploads/2025/03/cgm-aprima.png" 
  alt="CGM Aprima Logo"
  width="180"
  height="80"
  loading="lazy"
  class="object-contain mx-auto"
  style="max-height: 100px;"
>
                </picture>
            </div>
            <div class="testimonial__frame" style="max-width: 200px; max-height: 100px;">
                <picture>
                    <source media="(max-width: 767px)" srcset="https://primedocbilling.com/wp-content/uploads/2025/10/OWL-Practice.png" loading="lazy">
                    <img src="https://primedocbilling.com/wp-content/uploads/2025/10/OWL-Practice.png" alt="OWL Practice Logo" style="width: 100%; height: auto; max-height: 100px;" loading="lazy" />
                </picture>
            </div>
            <div class="testimonial__frame" style="max-width: 200px; max-height: 100px;">
                <picture>
                    <source media="(max-width: 767px)" srcset="https://primedocbilling.com/wp-content/uploads/2025/10/RXNT.webp" loading="lazy" >
                    <img src="https://primedocbilling.com/wp-content/uploads/2025/10/RXNT.webp"
     alt="RXNT Logo"
     width="180" height="80"
     loading="lazy"
     decoding="async"
     style="object-fit: contain; max-height: 100px;">
                </picture>
            </div>
            <div class="testimonial__frame" style="max-width: 200px; max-height: 100px;">
                <picture>
                    <source media="(max-width: 767px)" srcset="https://primedocbilling.com/wp-content/uploads/2025/03/Kareo-Tebra.webp" loading="lazy">
                    <img src="https://primedocbilling.com/wp-content/uploads/2025/03/Kareo-Tebra.webp" alt="Kareo Tebra Logo" width="300" height="100" loading="lazy" decoding="async" />
                </picture>
            </div>
            <div class="testimonial__frame" style="max-width: 200px; max-height: 100px;">
                <picture>
                    <source media="(max-width: 767px)" srcset="https://primedocbilling.com/wp-content/uploads/2025/03/Zhealth.png" loading="lazy">
                    <img src="https://primedocbilling.com/wp-content/uploads/2025/03/Zhealth.png" alt="Zhealth Logo" style="width: 100%; height: auto; max-height: 100px;" loading="lazy" />
                </picture>
            </div>
            <div class="testimonial__frame" style="max-width: 200px; max-height: 100px;">
                <picture>
                    <source media="(max-width: 767px)" srcset="https://primedocbilling.com/wp-content/uploads/2025/03/Office-Ally.webp" loading="lazy" >
                    <img src="https://primedocbilling.com/wp-content/uploads/2025/03/Office-Ally.webp" alt="Office Ally Logo" style="width: 100%; height: auto; max-height: 100px;" loading="lazy" />
                </picture>
            </div>
            <div class="testimonial__frame" style="max-width: 200px; max-height: 100px;">
                <picture>
                    <source media="(max-width: 767px)" srcset="https://primedocbilling.com/wp-content/uploads/2025/03/Charm-HER.webp" loading="lazy" >
                    <img src="https://primedocbilling.com/wp-content/uploads/2025/03/Charm-HER.webp" alt="Charm HER Logo" style="width: 100%; height: auto; max-height: 100px;" loading="lazy" />
                </picture>
            </div>
            <!-- New logos -->
            <div class="testimonial__frame" style="max-width: 200px; max-height: 100px;">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri() ?>/assets/images/home/testimonial/ECW.jpg" loading="lazy" >
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/home/testimonial/ECW.jpg" alt="eClinicalWorks Logo" style="width: 100%; height: auto; max-height: 100px;" loading="lazy" />
                </picture>
            </div>
            <div class="testimonial__frame" style="max-width: 200px; max-height: 100px;">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri() ?>/assets/images/home/testimonial/NextGen.png" loading="lazy" >
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/home/testimonial/NextGen.png" alt="NextGen Logo" style="width: 100%; height: auto; max-height: 100px;" loading="lazy" />
                </picture>
            </div>
            <div class="testimonial__frame" style="max-width: 200px; max-height: 100px;">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri() ?>/assets/images/home/testimonial/Jane App.png" loading="lazy" >
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/home/testimonial/Jane App.png" alt="Jane App Logo" style="width: 100%; height: auto; max-height: 100px;" loading="lazy" />
                </picture>
            </div>
            <div class="testimonial__frame" style="max-width: 200px; max-height: 100px;">
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri() ?>/assets/images/home/testimonial/Practice Suite.jpg" loading="lazy" >
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/home/testimonial/Practice Suite.jpg" alt="Practice Suite Logo" style="width: 100%; height: auto; max-height: 100px;" loading="lazy" />
                </picture>
            </div>
            <div class="testimonial__frame" style="max-width: 200px; max-height: 100px;">
			
                <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo get_theme_file_uri() ?>/assets/images/home/testimonial/Opus.png" loading="lazy" >
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/home/testimonial/Opus.png" alt="Opus EHR Logo" style="width: 100%; height: auto; max-height: 100px;" loading="lazy" />
                </picture>
            </div>
			<div class="testimonial__frame" style="max-width: 200px; max-height: 100px;">
    <picture>
        <source 
            media="(max-width: 767px)" 
            srcset="<?php echo get_theme_file_uri() ?>/assets/images/home/testimonial/kinnser.webp" 
            loading="lazy"
        >
        <img 
            src="<?php echo get_theme_file_uri() ?>/assets/images/home/testimonial/kinnser.webp" 
            alt="Kinnser Logo" 
            style="width: 100%; height: auto; max-height: 100px;" 
            loading="lazy" 
        />
    </picture>
</div>
		</div>
    </div>
</section>

<!-- New Section: Welcome to Prime Doc Billing -->
<section class="py-12 lg:py-20 stats-section">
  <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
    <div class="lg:grid lg:grid-cols-12 lg:gap-x-12 items-center">
      
      <!-- Stats Grid -->
      <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-8 lg:gap-10">
        
        <!-- Happy Clients -->
        <div class="relative bg-[#DBEAFE] rounded-3xl p-8 flex flex-col items-center justify-center shadow-md hover:shadow-xl transition-shadow duration-300 group stats-card" data-aos="fade-left">
          <div class="absolute -top-6 left-6 rounded-full bg-gradient-to-tr from-[#00D1B2] to-[#00A887] text-white text-3xl font-extrabold h-[88px] w-[88px] flex justify-center items-center shadow-lg badge group-hover:scale-110 transform transition-transform duration-300">
            20+
          </div>
          <img src="<?php echo get_theme_file_uri() ?>/assets/images/happy_client.png" alt="Happy Clients Icon" loading="lazy" />
          <p class="text-[#374151] uppercase font-semibold tracking-wide text-lg">Happy Clients</p>
        </div>

        <!-- Specialties -->
        <div class="relative bg-[#EFF6FF] rounded-3xl p-8 flex flex-col items-center justify-center shadow-md hover:shadow-xl transition-shadow duration-300 group stats-card" data-aos="fade-left">
          <div class="absolute -top-6 right-6 rounded-full bg-gradient-to-tr from-[#00D1B2] to-[#00A887] text-white text-3xl font-extrabold h-[88px] w-[88px] flex justify-center items-center shadow-lg badge group-hover:scale-110 transform transition-transform duration-300">
            25+
          </div>
          <img src="<?php echo get_theme_file_uri() ?>/assets/images/Specialists.png" alt="Specialties Icon" loading="lazy" />
          <p class="text-[#374151] uppercase font-semibold tracking-wide text-lg">Specialties</p>
        </div>

        <!-- Years in Business -->
        <div class="relative bg-[#EFF6FF] sm:bg-[#DBEAFE] rounded-3xl p-8 flex flex-col items-center justify-center shadow-md hover:shadow-xl transition-shadow duration-300 group stats-card" data-aos="fade-left">
          <div class="absolute -top-6 left-6 rounded-full bg-gradient-to-tr from-[#00D1B2] to-[#00A887] text-white text-3xl font-extrabold h-[88px] w-[88px] flex flex-col justify-center items-center shadow-lg badge group-hover:scale-110 transform transition-transform duration-300">
            <span>10+</span>
            <span class="text-xs font-semibold leading-none -mt-1">Years</span>
          </div>
          <img src="<?php echo get_theme_file_uri() ?>/assets/images/InBusiness.png" alt="Years in Business Icon" loading="lazy" />
          <p class="text-[#374151] uppercase font-semibold tracking-wide text-lg">In Business</p>
        </div>

        <!-- States -->
        <div class="relative bg-[#DBEAFE] sm:bg-[#EFF6FF] rounded-3xl p-8 flex flex-col items-center justify-center shadow-md hover:shadow-xl transition-shadow duration-300 group stats-card" data-aos="fade-left">
          <div class="absolute -top-6 right-6 rounded-full bg-gradient-to-tr from-[#00D1B2] to-[#00A887] text-white text-3xl font-extrabold h-[88px] w-[88px] flex justify-center items-center shadow-lg badge group-hover:scale-110 transform transition-transform duration-300">
            35+
          </div>
          <img src="<?php echo get_theme_file_uri() ?>/assets/images/States.png" alt="States Icon" loading="lazy" />
          <p class="text-[#374151] uppercase font-semibold tracking-wide text-lg">States</p>
        </div>

      </div>

      <!-- Text Content -->
		<div class="lg:col-span-6 mt-12 lg:mt-0 flex flex-col justify-center text-left" data-aos="fade-right">
	  <h2 class="text-4xl sm:text-3xl font-extrabold text-gray-900 mb-4 tracking-tight relative max-w-xl">
		Prime Doc Billing LLC:
	  </h2>
	  <h2 class="text-3xl sm:text-2xl font-bold text-gray-900 mb-8 tracking-tight relative max-w-xl">
		Your Trusted Partner in Medical Billing
		<span class="absolute -bottom-2 left-0 w-28 h-1 rounded-full bg-gradient-to-r from-[#3873CC] to-[#2a54a0]"></span>
	  </h2>
	  <p class="text-gray-600 leading-relaxed mb-6 max-w-xl text-lg">
		Prime Doc Billing is a trusted partner in the medical billing industry with years of expertise. We specialize in providing all the services related to medical billing. Our experts tailor to the unique needs of our healthcare providers.
	  </p>
	  <p class="text-gray-600 leading-relaxed max-w-xl text-lg">
		Our team at Prime Doc Billing handles the entire RCM cycle of your practice so you can focus on patient care. Your revenue growth is our responsibility, and we take very good care of it.
	  </p>
	</div>
    </div>
  </div>
</section>

<script>
  AOS.init({
    duration: 800,
    once: true,
    mirror: false,
  });
</script>

<!-- Who We Are -->
<section class="py-10 lg:py-16 bg-[#fffff]">
    <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-2">
            <div class="lg:col-span-5">
                <h2 class="text-4xl sm:text-3xl font-extrabold text-left text-gray-900 mb-10 tracking-tight relative inline-block" data-aos="fade-right">
                    Who We Are?
                    <span class="absolute -bottom-2 left-0 w-24 h-1 rounded-full" style="background-color:#3873CC;"></span>
                </h2>
                <p class="mt-4 text-[#4B5563] leading-[28px]" data-aos="fade-right">
                Prime Doc Billing is a dedicated team of medical billing, credentialing and coding professionals. We commit to streamlining your medical practice and optimizing your revenue. We deliver transparent and result-driven services while enhancing overall efficiency. 
                </p>
                <p class="mt-6 text-[#4B5563] leading-[28px]" data-aos="fade-right">
                Our team consists of Certified Coders, Billers, and Credentialing Specialists who stay up-to-date with the payers’ policies. We help identify the issues before they become costly. Our specialists enhance claim submissions by making all necessary corrections to ensure accuracy and compliance.
                </p>
                <div class="border border-[#20C197] mt-8" data-aos="fade-right"></div>
            </div>
        
<div class="lg:col-start-7 lg:col-span-6">
    <!-- Video Container with responsive height and max-width constraint -->
    <div class="w-full max-w-4xl mx-auto">
        <video 
            class="w-full h-[auto] md:h-[auto] object-cover rounded-[30px]"
            controls
            autoplay
            muted
            playsinline
            poster="<?php echo get_theme_file_uri() ?>/assets/images/PDB Poster.png">
            <source src="<?php echo get_theme_file_uri() ?>/assets/videos/PDB VIDEO finalll compressed.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
    </div>
</div>

</div>
</section>

<!-- Part one Enf. --> 

<!-- Services -->
<section class="py-10 lg:py-12 bg-gradient-to-r from-[#e6f0ff] via-white to-[#e6f0ff]">
    <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
        <div class="max-w-[950px] flex flex-col gap-6 justify-center items-center mx-auto">
            <h2 class="text-4xl sm:text-3xl font-extrabold text-center text-gray-900 mb-5 tracking-tight relative inline-block" data-aos="fade-up">
                What Are Our Comprehensive Services
                <span class="absolute -bottom-2 left-0 w-24 h-1 rounded-full" style="background-color:#3873CC;"></span>
            </h2>
            <p class="text-[#4B5563] leading-[28px] text-center" data-aos="fade-up">
                Prime Doc Billing covers a wide range of medical billing services all under one roof. From patient scheduling to filing for an appeal, we can handle it all.
            </p>
        </div>
    <section class="py-10 lg:py-16">
        <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Item 1 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Credentialing.webp" alt="Credentialing Services" class="w-full object-cover flip-card__photo" loading="lazy"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Credentialing</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Prime Doc Billing's fast and accurate credentialing services. From provider enrollment to license tracking, we handle it all.
                            </p>
                            <a href="<?php echo home_url('/medical-billing/credentialing/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
                                <span class="uppercase text-[14px] flex items-center justify-center gap-3">
                                    explore more
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Verification of benefits.webp" alt="Insurance Benefit Verification" class="w-full object-cover flip-card__photo" loading="lazy" />
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Verification of Benefits</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                We verify insurance benefits before the services are rendered. It ensures fewer billing issues and timely patient treatments.
                            </p>
                            <a href="<?php echo site_url() ?>/medical-billing/insurance-verification/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
                                <span class="uppercase text-[14px] flex items-center justify-center gap-3">
                                    explore more
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Prior authorization.webp" alt="Prior Authorization Services" class="w-full object-cover flip-card__photo" loading="lazy" />
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Prior Authorization</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Get your procedures approved on time with our fast prior authorization services. We focus on keeping your practice on track.
                            </p>
                            <a href="<?php echo site_url() ?>/medical-billing/prior-authorization/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
                                <span class="uppercase text-[14px] flex items-center justify-center gap-3">
                                    explore more
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Medical coding.webp" alt="Medical Coding Services" class="w-full object-cover flip-card__photo" loading="lazy" />
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Medical Coding</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Get compliant coding services. We turn clinical documentation into accurate codes to ensure faster billing and minimum delays.
                            </p>
                            <a href="<?php echo site_url() ?>/medical-billing/medical-coding/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
                                <span class="uppercase text-[14px] flex items-center justify-center gap-3">
                                    explore more
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Medical scribing.webp" alt="Remote Medical Scribing" class="w-full object-cover flip-card__photo" loading="lazy"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Medical Scribing</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Boost your productivity with our accurate and HIPAA-compliant medical scribe services to streamline your clinical workflows.
                            </p>
                            <a href="<?php echo site_url() ?>/medical-billing/scribing/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
                                <span class="uppercase text-[14px] flex items-center justify-center gap-3">
                                    explore more
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Medical billing.webp" alt="Medical Billing Services" class="w-full object-cover flip-card__photo" loading="lazy" />
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Medical Billing</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Your revenue is our responsibility. Our end-to-end billing services ensure faster reimbursements to keep a steady cash flow.
                            </p>
                            <a href="<?php echo site_url() ?>/medical-billing/service/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
                                <span class="uppercase text-[14px] flex items-center justify-center gap-3">
                                    explore more
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item 7 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Accounts recievable.webp" alt="Accounts Receivable Services" class="w-full object-cover flip-card__photo" loading="lazy" />
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Accounts Receivable</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Get proactive A/R management services tailored for your practice. Your practice's financial performance is our top priority.
                            </p>
                            <a href="<?php echo site_url() ?>/medical-billing/accounts-receivables/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
                                <span class="uppercase text-[14px] flex items-center justify-center gap-3">
                                    explore more
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item 8 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Denials management.webp" alt="Claim Denial Recovery" class="w-full object-cover flip-card__photo" loading="lazy" />
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Denial Management</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Get efficient denial management services to recover lost revenue. We identify the root cause to improve billing efficiency.
                            </p>
                            <a href="<?php echo site_url() ?>/medical-billing/denial-management/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
                                <span class="uppercase text-[14px] flex items-center justify-center gap-3">
                                    explore more
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item 10 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Revenue cycle management.webp" alt="RCM Services" class="w-full object-cover flip-card__photo" loading="lazy" />
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Revenue Cycle Management</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Our end-to-end RCM support from patient intake to payments. We maximize your revenue with tailored and strategic RCM planning.
                            </p>
                            <a href="<?php echo site_url() ?>/medical-billing/rcm/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
                                <span class="uppercase text-[14px] flex items-center justify-center gap-3">
                                    explore more
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item 11 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Virtual assistant.webp" alt="Virtual Medical Assistant Services" class="w-full object-cover flip-card__photo" loading="lazy" />
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Virtual Assistant</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Boost your productivity with our Virtual Medical Assistants who handle your daily operations and offer cost-effective help.
                            </p>
                            <a href="<?php echo site_url() ?>/medical-billing/virtual-assistant/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
                                <span class="uppercase text-[14px] flex items-center justify-center gap-3">
                                    explore more
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item 12 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/home/workers compensation.webp" alt="Workers Compensation Medical Billing" class="w-full object-cover flip-card__photo" loading="lazy"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Worker's Compensation Billing</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                We specialize in workers' compensation billing. Ensure timely reimbursement and compliance with state regulations.
                            </p>
                            <a href="<?php echo home_url('medical-billing/workers-compensation/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
                                <span class="uppercase text-[14px] flex items-center justify-center gap-3">
                                    explore more
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Item 13 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Web development.webp" alt="Medical Website Development" class="w-full object-cover flip-card__photo" loading="lazy" />
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Website Development</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Get a custom healthcare website with our web development services to enhance patient engagement and elevate practice growth.
                            </p>
                            <a href="<?php echo site_url() ?>/medical-billing/website-development/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
                                <span class="uppercase text-[14px] flex items-center justify-center gap-3">
                                    explore more
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


<!-- New Section: Compliance and Security -->
<!-- HIPAA Compliance And Security -->
<section class="py-20 bg-white">
  <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-16">
      
      <!-- Left Text Column -->
      <div class=" text-gray-700 font-light">
        <h3 class="text-4xl sm:text-3xl font-extrabold text-gray-900 mb-10 tracking-tight relative inline-block" data-aos="fade-right">
          HIPAA Compliance And Security
          <span class="absolute -bottom-2 left-0 w-24 h-1 rounded-full bg-[#3873CC]"></span>
        </h3>

        <!-- Arrow List -->
        <ul class="space-y-5 pl-4 sm:pl-6">
          <li class="flex items-start gap-4 group">
            <div class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center shadow-md bg-[#3873CC] transition-all duration-300 group-hover:bg-[#4A8CF5]">
              <i class="fas fa-arrow-right text-white text-[14px] transition-transform duration-300 group-hover:translate-x-1"></i>
            </div>
            <span class="font-normal text-gray-900 text-lg">Strict Adherence to HIPAA Regulations</span>
          </li>

          <li class="flex items-start gap-4 group">
            <div class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center shadow-md bg-[#3873CC] transition-all duration-300 group-hover:bg-[#4A8CF5]">
              <i class="fas fa-arrow-right text-white text-[14px] transition-transform duration-300 group-hover:translate-x-1"></i>
            </div>
            <span class="font-normal text-gray-900 text-lg">Confidentiality & Data Security</span>
          </li>

          <li class="flex items-start gap-4 group">
            <div class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center shadow-md bg-[#3873CC] transition-all duration-300 group-hover:bg-[#4A8CF5]">
              <i class="fas fa-arrow-right text-white text-[14px] transition-transform duration-300 group-hover:translate-x-1"></i>
            </div>
            <span class="font-normal text-gray-900 text-lg">Encrypted Communication</span>
          </li>

          <li class="flex items-start gap-4 group">
            <div class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center shadow-md bg-[#3873CC] transition-all duration-300 group-hover:bg-[#4A8CF5]">
              <i class="fas fa-arrow-right text-white text-[14px] transition-transform duration-300 group-hover:translate-x-1"></i>
            </div>
            <span class="font-normal text-gray-900 text-lg">Access Control & Authentication</span>
          </li>

          <li class="flex items-start gap-4 group">
            <div class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center shadow-md bg-[#3873CC] transition-all duration-300 group-hover:bg-[#4A8CF5]">
              <i class="fas fa-arrow-right text-white text-[14px] transition-transform duration-300 group-hover:translate-x-1"></i>
            </div>
            <span class="font-normal text-gray-900 text-lg">Workstation & Device Security</span>
          </li>

          <li class="flex items-start gap-4 group">
            <div class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center shadow-md bg-[#3873CC] transition-all duration-300 group-hover:bg-[#4A8CF5]">
              <i class="fas fa-arrow-right text-white text-[14px] transition-transform duration-300 group-hover:translate-x-1"></i>
            </div>
            <span class="font-normal text-gray-900 text-lg">HIPAA Training</span>
          </li>

          <li class="flex items-start gap-4 group">
            <div class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center shadow-md bg-[#3873CC] transition-all duration-300 group-hover:bg-[#4A8CF5]">
              <i class="fas fa-arrow-right text-white text-[14px] transition-transform duration-300 group-hover:translate-x-1"></i>
            </div>
            <span class="font-normal text-gray-900 text-lg">Audit Trails & Monitoring</span>
          </li>

          <li class="flex items-start gap-4 group">
            <div class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center shadow-md bg-[#3873CC] transition-all duration-300 group-hover:bg-[#4A8CF5]">
              <i class="fas fa-arrow-right text-white text-[14px] transition-transform duration-300 group-hover:translate-x-1"></i>
            </div>
            <span class="font-normal text-gray-900 text-lg">Data Backup & Disaster Recovery</span>
          </li>
        </ul>
      </div>

      <!-- Right Image Column -->
      <div class="flex justify-end">
        <img
          src="https://primedocbilling.com/wp-content/uploads/2025/10/Compliance-Security.webp"
		  data-src="https://primedocbilling.com/wp-content/uploads/2025/10/Compliance-Security.webp"
          alt="HIPAA Security"
          class="w-full max-w-[520px] rounded-3xl border-4 border-blue-500 shadow-2xl" />
      </div>
    </div>
  </div>
</section>


<!-- Our Business Models (Image Left, Text Right) -->
<section class="py-20 bg-gradient-to-r from-[#e6f0ff] via-white to-[#e6f0ff]">
  <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-16">
      
      <!-- Left Image -->
      <div class="flex justify-start">
        <img
          src="https://primedocbilling.com/wp-content/uploads/2025/10/Our-Business-Models.webp" data-src="https://primedocbilling.com/wp-content/uploads/2025/10/Our-Business-Models.webp" alt="Business Models" class="border-4 border-blue-500 w-full max-w-[400px] rounded-3xl shadow-2xl transition-transform duration-500 hover:scale-105" />
      </div>

      <!-- Right Text -->
      <div>
        <h2 class="text-4xl sm:text-3xl font-extrabold mb-6 relative inline-block text-gray-900">
          Our Business Models
          <span class="absolute -bottom-3 left-0 w-28 h-1 rounded-full bg-[#3873CC]"></span>
        </h2>
        <p class="text-[#2f3e6a] text-lg leading-relaxed tracking-wide">
          At Prime Doc Billing, we offer flexible models tailored to your
          healthcare practice’s unique needs. Whether you prefer a
          performance-based partnership or a scalable plan, we customize
          solutions that grow with you.
        </p>
      </div>
    </div>
  </div>
</section>


<!-- Percentage Model (Text Left, Image Right) + Employee Outsourcing (Image Left, Text Right) -->
<section class="py-20 bg-gradient-to-r from-[#e6f0ff] via-white to-[#e6f0ff]">
  <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">

    <!-- Percentage Model (Text Left, Image Right) -->
    <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-16 pb-20">
      <div>
        <h3 class="text-3xl font-bold mb-5 border-l-4 border-[#3873CC] pl-4 text-[black]">
          Percentage Model
        </h3>
        <p class="text-gray-700 text-lg leading-relaxed mb-5 tracking-wide">
          Our percentage-based model aligns our service cost with your total
          revenue, offering unmatched flexibility. We charge a fair
          percentage instead of fixed fees, eliminating hidden costs and
          simplifying your budgeting.
        </p>
        <p class="text-gray-700 text-lg leading-relaxed tracking-wide">
          Partner with Prime Doc Billing for a performance-driven team
          dedicated to maximizing your reimbursements and financial health.
        </p>
      </div>
      <div class="flex justify-end">
        <img src="https://primedocbilling.com/wp-content/uploads/2025/10/Percentage-Model.webp" data-src="https://primedocbilling.com/wp-content/uploads/2025/10/Percentage-Model.webp" alt="Percentage Model" class="border-4 border-blue-500 w-full max-w-[400px] rounded-3xl shadow-2xl transition-transform duration-500 hover:scale-105" />
      </div>
    </div>

    <!-- Employee Outsourcing (Image Left, Text Right) -->
    <div class="pt-20 grid grid-cols-1 lg:grid-cols-2 items-center gap-16">
      <div class="flex justify-start">
        <img
          src="https://primedocbilling.com/wp-content/uploads/2025/10/Employee-Outsourcing-on-an-Hourly-Basis.webp" data-src="https://primedocbilling.com/wp-content/uploads/2025/10/Employee-Outsourcing-on-an-Hourly-Basis.webp" alt="Employee Outsourcing" class="border-4 border-blue-500 w-full max-w-[400px] rounded-3xl shadow-2xl transition-transform duration-500 hover:scale-105"  />
      </div>
      <div>
        <h3 class="text-3xl font-bold mb-5 border-l-4 border-[#3873CC] pl-4 text-[black]">
          Employee Outsourcing on an Hourly Basis (FTE/PTE)
        </h3>
        <p class="text-gray-700 text-lg leading-relaxed mb-5 tracking-wide">
          We tailor solutions to fit your budget and practice size,
          whether small or large. Our flexible Full-Time and Part-Time
          Employee options allow you to scale services as needed without
          overspending.
        </p>
        <p class="text-gray-700 text-lg leading-relaxed tracking-wide">
          Trust Prime Doc Billing to provide accurate, cost-effective
          staffing solutions that keep your practice running smoothly.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Part two  -->

<!-- Offer -->
  <section class="py-16 bg-gradient-to-b from-[#e6f0ff] to-white">
    <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
      <div class="max-w-3xl mx-auto text-center mb-16">
        <h2
          class="text-4xl sm:text-3xl font-extrabold text-gray-900 mb-4 relative inline-block"
          data-aos="fade-up"
        >
          Whom We Serve
          <span
            class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-24 h-1 rounded-full bg-[#3873CC]"
          ></span>
        </h2>
        <p
          class="text-gray-600 text-lg sm:text-xl max-w-xl mx-auto leading-relaxed"
          data-aos="fade-up"
        >
          From small clinics to large hospitals, we serve every kind of
          practice. Our experts have expertise in all kinds of practice
          facilities.
        </p>
      </div>
      <div
        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-8xl mx-auto"
      >
        <!-- Card 1 -->
        <div
          class="bg-white rounded-3xl shadow-lg p-8 flex flex-col items-center text-center hover:shadow-2xl transition-shadow duration-300 group"
          data-aos="fade-up"
        >
          <div
            class="flex items-center justify-center w-16 h-16 rounded-full bg-[#3873CC] text-white text-2xl mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300"
          >
            <i class="fas fa-user-md"></i>
          </div>
          <h5 class="text-xl font-semibold text-[black] mb-3">
            Individual Doctors
          </h5>
          <p class="text-gray-700 text-sm sm:text-base font-light leading-relaxed capitalize">
            We provide our comprehensive services to individual doctors and
            their medical billing needs. Prime Doc Billings helps the doctors
            focus on patient care while we handle their administrative work.
          </p>
        </div>
        <!-- Card 2 -->
        <div
          class="bg-white rounded-3xl shadow-lg p-8 flex flex-col items-center text-center hover:shadow-2xl transition-shadow duration-300 group"
          data-aos="fade-up"
        >
          <div
            class="flex items-center justify-center w-16 h-16 rounded-full bg-[#3873CC] text-white text-2xl mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300"
          >
            <i class="fas fa-user-nurse"></i>
          </div>
          <h5 class="text-xl font-semibold text-[black] mb-3">
            Nurse Practitioners
          </h5>
          <p class="text-gray-700 text-sm sm:text-base font-light leading-relaxed capitalize">
            We understand the role of nurse practitioners in independent or
            group practices. We assist them in billing services and teach them
            proper use of billing codes. Prime Doc Billing ensures that the
            services of Nurse Practitioners are fully captured and reimbursed.
          </p>
        </div>
        <!-- Card 3 -->
        <div
          class="bg-white rounded-3xl shadow-lg p-8 flex flex-col items-center text-center hover:shadow-2xl transition-shadow duration-300 group"
          data-aos="fade-up"
        >
          <div
            class="flex items-center justify-center w-16 h-16 rounded-full bg-[#3873CC] text-white text-2xl mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300"
          >
            <i class="fas fa-clinic-medical"></i>
          </div>
          <h5 class="text-xl font-semibold text-[black] mb-3">
            Private Practices
          </h5>
          <p class="text-gray-700 text-sm sm:text-base font-light leading-relaxed capitalize">
            Our services for solo or group private practices ensure customized
            solutions. We handle everything from claim submission to reporting
            and analytics. We focus on your practice’s growth by maximizing
            reimbursements.
          </p>
        </div>
        <!-- Card 4 -->
        <div
          class="bg-white rounded-3xl shadow-lg p-8 flex flex-col items-center text-center hover:shadow-2xl transition-shadow duration-300 group"
          data-aos="fade-up"
        >
          <div
            class="flex items-center justify-center w-16 h-16 rounded-full bg-[#3873CC] text-white text-2xl mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300"
          >
            <i class="fas fa-vials"></i>
          </div>
          <h5 class="text-xl font-semibold text-[black] mb-3">Laboratories</h5>
          <p class="text-gray-700 text-sm sm:text-base font-light leading-relaxed capitalize">
            Laboratory billing includes a very complex and precise coding
            system. It includes CPT, and HCPCS codes for molecular diagnostics,
            clinical lab services, and pathology. We manage payer-specific
            coding and requirements to ensure timely cash flow.
          </p>
        </div>
        <!-- Card 5 -->
        <div
          class="bg-white rounded-3xl shadow-lg p-8 flex flex-col items-center text-center hover:shadow-2xl transition-shadow duration-300 group"
          data-aos="fade-up"
        >
          <div
            class="flex items-center justify-center w-16 h-16 rounded-full bg-[#3873CC] text-white text-2xl mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300"
          >
            <i class="fas fa-hospital"></i>
          </div>
          <h5 class="text-xl font-semibold text-[black] mb-3">Hospitals</h5>
          <p class="text-gray-700 text-sm sm:text-base font-light leading-relaxed capitalize">
            Our team has years of training in enterprise-level billing
            solutions for hospitals. We support hospital revenue cycles with
            advanced billing and coding systems, along with sister medical
            billing companies.
          </p>
        </div>
        <!-- Card 6 -->
        <div
          class="bg-white rounded-3xl shadow-lg p-8 flex flex-col items-center text-center hover:shadow-2xl transition-shadow duration-300 group"
          data-aos="fade-up"
        >
          <div
            class="flex items-center justify-center w-16 h-16 rounded-full bg-[#3873CC] text-white text-2xl mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300"
          >
            <i class="fas fa-handshake"></i>
          </div>
          <h5 class="text-xl font-semibold text-[black] mb-3">
            Sister Medical Billing Companies
          </h5>
          <p class="text-gray-700 text-sm sm:text-base font-light leading-relaxed capitalize">
            Prime Doc Billing also provides services for sister medical billing
            companies. We offer complete RCM services solutions, credentialing
            with flexible business models that are percentage or employee
            outsourcing.
          </p>
        </div>
      </div>
    </div>
  </section>

<!-- Choose Us -->
<section class="py-20 bg-gradient-to-b from-[#e6f0ff] to-white">
  <div class="max-w-7xl mx-auto px-8 text-center">

    <!-- Section Title -->
    <h2 class="text-3xl md:text-4xl font-extrabold text-[#0a1a3b] mb-12 relative inline-block">
      Why Choose Prime Doc Billing?
    </h2>

    <!-- Two Columns -->
    <div class="grid md:grid-cols-2 gap-2 md:gap-16 justify-between text-left mx-auto">

      <!-- Left Column -->
      <ul class="space-y-8 w-full">
        <li class="flex items-start gap-4 group">
          <i class="fas fa-chart-line text-[#3873CC] text-lg mt-1 transition-transform duration-300 group-hover:translate-x-1"></i>
          <span class="text-gray-800 text-[0.9rem] md:text-lg font-medium">Complimentary Practice Analysis</span>
        </li>
        <li class="flex items-start gap-4 group">
          <i class="fas fa-shield-alt text-[#3873CC] text-lg mt-1 transition-transform duration-300 group-hover:translate-x-1"></i>
          <span class="text-gray-800 text-[0.9rem] md:text-lg font-medium">Fully HIPAA-Compliant Operations</span>
        </li>
        <li class="flex items-start gap-4 group">
          <i class="fas fa-headset text-[#3873CC] text-lg mt-1 transition-transform duration-300 group-hover:translate-x-1"></i>
          <span class="text-gray-800 text-[0.9rem] md:text-lg font-medium">Dedicated Point of Contact for Seamless Support</span>
        </li>
        <li class="flex items-start gap-4 group">
          <i class="fas fa-users-cog text-[#3873CC] text-lg mt-1 transition-transform duration-300 group-hover:translate-x-1"></i>
          <span class="text-gray-800 text-[0.9rem] md:text-lg font-medium">Dedicated Team for Every Practice</span>
        </li>
        <li class="flex items-start gap-4 group">
          <i class="fas fa-user-md text-[#3873CC] text-lg mt-1 transition-transform duration-300 group-hover:translate-x-1"></i>
          <span class="text-gray-800 text-[0.9rem] md:text-lg font-medium">Certified Coding, Billing & Credentialing Experts</span>
        </li>
      </ul>

      <!-- Right Column -->
      <ul class="space-y-8 w-full">
        <li class="flex items-start gap-4 group">
          <i class="fas fa-file-invoice-dollar text-[#3873CC] text-lg mt-1 transition-transform duration-300 group-hover:translate-x-1"></i>
          <span class="text-gray-800 text-[0.9rem] md:text-lg font-medium">98% Clean Claim Success Rate</span>
        </li>
        <li class="flex items-start gap-4 group">
          <i class="fas fa-hand-holding-usd text-[#3873CC] text-lg mt-1 transition-transform duration-300 group-hover:translate-x-1"></i>
          <span class="text-gray-800 text-[0.9rem] md:text-lg font-medium">Proactive AR & Denial Management for Higher Returns</span>
        </li>
        <li class="flex items-start gap-4 group">
          <i class="fas fa-chart-pie text-[#3873CC] text-lg mt-1 transition-transform duration-300 group-hover:translate-x-1"></i>
          <span class="text-gray-800 text-[0.9rem] md:text-lg font-medium">Consistent Revenue Growth & Scalability</span>
        </li>
        <li class="flex items-start gap-4 group">
          <i class="fas fa-smile-beam text-[#3873CC] text-lg mt-1 transition-transform duration-300 group-hover:translate-x-1"></i>
          <span class="text-gray-800 text-[0.9rem] md:text-lg font-medium">Guaranteed Value and Client Satisfaction</span>
        </li>
        <li class="flex items-start gap-4 group">
          <i class="fas fa-globe-americas text-[#3873CC] text-lg mt-1 transition-transform duration-300 group-hover:translate-x-1"></i>
          <span class="text-gray-800 text-[0.9rem] md:text-lg font-medium">Nationwide Billing Expertise & Support</span>
        </li>
      </ul>

    </div>
  </div>
</section>

<!-- Outsourcing -->
<section class="py-20 bg-[#e6f0ff]">
   <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
    <div class="max-w-3xl mx-auto text-center mb-20">
     <h2 class="text-4xl sm:text-3xl font-extrabold text-[black] mb-4 relative inline-block tracking-tight" data-aos="fade-up">
      Benefits of Outsourcing
      <span class="absolute -bottom-3 left-1/2 -translate-x-1/2 w-28 h-1 rounded-full bg-[#3873CC]">
      </span>
     </h2>
     <p class="text-gray-700 text-lg sm:text-xl max-w-xl mx-auto leading-relaxed font-medium" data-aos="fade-up">
      Efficient and effective medical billing plays a considerable role in
          the success and growth of practices, regardless of dimensions of
          healthcare industry.
     </p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 max-w-6xl mx-auto">
     <!-- Card 1 -->
     <div class="bg-white border-2 border-[#3873CC] rounded-3xl p-5 flex flex-col items-center text-center shadow-lg hover:shadow-2xl transition-shadow duration-300 group" data-aos="fade-up">
      <img alt="Icon representing boost revenue with accurate billing" class="mb-8 w-20 h-20 object-contain" height="80" src="<?php echo get_theme_file_uri() ?>/assets/images/img_reducecost.png"  width="80"/>
      <h3 class="text-[#3873CC] font-semibold text-2xl mb-4 group-hover:text-[#2a54a0] transition-colors">
       Boost Revenue with Accurate Billing
      </h3>
      <p class="text-gray-600 italic text-base font-light capitalize leading-relaxed max-w-xs">
       In the highly competitive healthcare landscape, accurate billing is
            paramount. Expert medical billing services ensure you receive fair
            compensation for your services by minimizing errors and optimizing
            reimbursements.
      </p>
     </div>
     <!-- Card 2 -->
     <div class="bg-[#d9e6ff] border-2 border-[#3873CC] rounded-3xl p-5 flex flex-col items-center text-center shadow-lg hover:shadow-2xl transition-shadow duration-300 group" data-aos="fade-up">
      <img alt="Icon representing streamlined cash flow management" class="mb-8 w-20 h-20 object-contain" height="80" src="<?php echo get_theme_file_uri() ?>/assets/images/FocusOnPatientCare.png" width="80"/>
      <h3 class="text-[#3873CC] font-semibold text-2xl mb-4 group-hover:text-[#2a54a0] transition-colors">
       Streamlined Cash Flow Management
      </h3>
      <p class="text-gray-700 italic text-base font-light capitalize leading-relaxed max-w-xs">
       Achieving a steady cash flow is vital for your practice's financial
            health. Timely billing and efficient follow-up on unpaid claims are
            key strategies to keep your practice thriving.
      </p>
     </div>
     <!-- Card 3 -->
     <div class="bg-white border-2 border-[#3873CC] rounded-3xl p-5 flex flex-col items-center text-center shadow-lg hover:shadow-2xl transition-shadow duration-300 group" data-aos="fade-up">
      <img alt="Icon representing reduced administrative workload" class="mb-8 w-20 h-20 object-contain" height="80" src="<?php echo get_theme_file_uri() ?>/assets/images/BoostingRevenue.png" width="80"/>
      <h3 class="text-[#3873CC] font-semibold text-2xl mb-4 group-hover:text-[#2a54a0] transition-colors">
       Reduced Administrative Work-Load
      </h3>
      <p class="text-gray-600 italic text-base font-light capitalize leading-relaxed max-w-xs">
       Ease the administrative burden on your staff and focus more on
            patient care. Consider outsourcing medical billing operations or
            utilizing advanced billing software solutions to streamline your
            operations.
      </p>
     </div>
     <!-- Card 4 -->
     <div class="bg-[#d9e6ff] border-2 border-[#3873CC] rounded-3xl p-5 flex flex-col items-center text-center shadow-lg hover:shadow-2xl transition-shadow duration-300 group" data-aos="fade-up">
      <img alt="Icon representing compliance assurance" class="mb-8 w-20 h-20 object-contain" height="80" src="<?php echo get_theme_file_uri() ?>/assets/images/dedicatedteamofexperts.png" width="80"/>
      <h3 class="text-[#3873CC] font-semibold text-2xl mb-4 group-hover:text-[#2a54a0] transition-colors">
       Compliance Assurance
      </h3>
      <p class="text-gray-700 italic text-base font-light capitalize leading-relaxed max-w-xs">
       Staying compliant with healthcare regulations, including HIPAA, is
            non-negotiable. Effective medical billing services can safeguard
            your practice from costly fines and legal complications.
      </p>
     </div>
     <!-- Card 5 -->
     <div class="bg-white border-2 border-[#3873CC] rounded-3xl p-5 flex flex-col items-center text-center shadow-lg hover:shadow-2xl transition-shadow duration-300 group" data-aos="fade-up">
      <img alt="Icon representing enhanced patient experience" class="mb-8 w-20 h-20 object-contain" height="80" src="<?php echo get_theme_file_uri() ?>/assets/images/MinimizeYourAdministrativeWorkload.png" width="80"/>
      <h3 class="text-[#3873CC] font-semibold text-2xl mb-4 group-hover:text-[#2a54a0] transition-colors">
       Enhanced Patient Experience
      </h3>
      <p class="text-gray-600 italic text-base font-light capitalize leading-relaxed max-w-xs">
       Transparency in billing practices can lead to a positive patient
            experience. Patients value understanding their bills, resulting in
            increased satisfaction &amp; patient count/daily encounters.
      </p>
     </div>
     <!-- Card 6 -->
     <div class="bg-[#d9e6ff] border-2 border-[#3873CC] rounded-3xl p-5 flex flex-col items-center text-center shadow-lg hover:shadow-2xl transition-shadow duration-300 group" data-aos="fade-up">
      <img alt="Icon representing efficient claims processing" class="mb-8 w-20 h-20 object-contain" height="80" src="<?php echo get_theme_file_uri() ?>/assets/images/Transparency&Reporting.png" width="80"/>
      <h3 class="text-[#3873CC] font-semibold text-2xl mb-4 group-hover:text-[#2a54a0] transition-colors">
       Efficient Claims Processing
      </h3>
      <p class="text-gray-700 italic text-base font-light capitalize leading-relaxed max-w-xs">
       Swift claims processing and minimal rejections or denials translate
            to faster payments and less hassle for your practice.
      </p>
     </div>
    </div>
   </div>
  </section>


<section class="py-10 lg:py-16">
    <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
        <div class='max-w-3xl mx-auto text-center'>
        <h2 class="text-4xl sm:text-3xl font-extrabold text-center text-gray-900 mb-14 tracking-tight relative inline-block" data-aos="fade-up">
            FAQ'S
            <span class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-24 h-1 rounded-full" style="background-color:#3873CC;"></span>
        </h2>
      </div>
        <ul class="divide-y">
            <li class="capitalize text-[#3F3F46] font-medium text-[16px] md:text-[20px] p-4 border-t overflow-hidden accordion__item" data-aos="fade-up">
                <div class="flex justify-between cursor-pointer items-center">
                    <span>How does Prime Doc Billing ensure HIPAA compliance?</span>
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/accordion_plus.png" alt="icon" class="w-8 h-8 md:w-10 md:h-10" />
                </div>
                <p class="text-[#52525B] font-light text-[16px] mt-3 leading-[28px] hidden">
                    We ensure HIPAA compliance by 24/7 surveillance of operations. Our IT and Compliance Security team keeps a check on the internet usage while restricting social media URLs on the operations floor. We have a proper firewall system to protect all the confidential data from phishing attacks. Apart from that, our team gets seasonal training HIPAA and Compliance.
                </p>
            </li>
            <li class="capitalize text-[#3F3F46] font-medium text-[16px] md:text-[20px] p-4 border-t overflow-hidden accordion__item" data-aos="fade-up">
                <div class="flex justify-between cursor-pointer items-center">
                    <span>Can you work with my current EHR system?</span>
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/accordion_plus.png" alt="icon" class="w-8 h-8 md:w-10 md:h-10" />
                </div>
                <p class="text-[#52525B] font-light text-[16px] mt-3 leading-[28px] hidden">
                    Yes! Prime Doc Billing can integrate with your current EHR system in a flow, while ensuring accuracy. We are capable of working with every EHR with no boundary.
                </p>
            </li>
            <li class="capitalize text-[#3F3F46] font-medium text-[16px] md:text-[20px] p-4 border-t overflow-hidden accordion__item" data-aos="fade-up">
                <div class="flex justify-between cursor-pointer items-center">
                    <span>What specialties does Prime Doc Billing cater to?</span>
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/accordion_plus.png" alt="icon" class="w-8 h-8 md:w-10 md:h-10" />
                </div>
                <p class="text-[#52525B] font-light text-[16px] mt-3 leading-[28px] hidden">
                    From primary care to oncology, we cater to all the specialties of the healthcare industry without any boundaries.
                </p>
            </li>
            <li class="capitalize text-[#3F3F46] font-medium text-[16px] md:text-[20px] p-4 border-t overflow-hidden accordion__item" data-aos="fade-up">
                <div class="flex justify-between cursor-pointer items-center">
                    <span>How does Prime Doc Billing handle claim denials?</span>
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/accordion_plus.png" alt="icon" class="w-8 h-8 md:w-10 md:h-10" />
                </div>
                <p class="text-[#52525B] font-light text-[16px] mt-3 leading-[28px] hidden">
                    We make necessary corrections and take consistent follow-ups with Accounts Receivables (A/R). If the claim still does not get accepted, we file for an appeal not once but twice.
                </p>
            </li>
            <li class="capitalize text-[#3F3F46] font-medium text-[16px] md:text-[20px] p-4 border-t overflow-hidden accordion__item" data-aos="fade-up">
                <div class="flex justify-between cursor-pointer items-center">
                    <span>How does Prime Doc Billing boost revenue?</span>
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/accordion_plus.png" alt="icon" class="w-8 h-8 md:w-10 md:h-10" />
                </div>
                <p class="text-[#52525B] font-light text-[16px] mt-3 leading-[28px] hidden">
                    Prime Doc Billing boosts your practice’s revenue by:
                    <br>Accurate coding and documentation
                    <br>Faster claim processing
                    <br>Real-time reporting and analytics
                    <br>Ongoing performance monitoring
                    <br>Specialty-specific solutions
                </p>
            </li>
						<li class="capitalize text-[#3F3F46] font-medium text-[16px] md:text-[20px] p-4 border-t overflow-hidden accordion__item" data-aos="fade-up">
                <div class="flex justify-between cursor-pointer items-center">
                    <span>What to know before outsourcing medical billing serivces?</span>
                    <img src="<?php echo get_theme_file_uri() ?>/assets/images/accordion_plus.png" alt="icon" class="w-8 h-8 md:w-10 md:h-10" />
                </div>
                <p class="text-[#52525B] font-light text-[16px] mt-3 leading-[28px] hidden">
                    <a href="https://primedocbilling.com/medical-billing/" class="font-semibold text-[#3873CC]">Before outsourcing medical billing services </a>, the healthcare providers need to evaluate a medical billing company's expertise, transparency level, technology advancements, and compliance standards. This ensures an efficient, secure and accurate claim management handling. Choosing the right medical billing partner helps the practice improve cash flow and maintain regulatory compliance, while also reducing the provider's administrative burden.
                </p>
            </li>
        </ul>
        <div class="flex justify-center aos-init aos-animate" data-aos="fade-up">
            <a href="<?php echo site_url();?>/faqs/" class="py-3 px-8 capitalize bg-[#00D1B2] text-white text-[14px] font-semibold mt-14 inline-block">Read More</a>
        </div>
    </div>
</section>

<section
    class="max-w-7xl mx-auto mb-5 px-12 py-20 bg-white rounded-3xl shadow-xl border border-white text-center relative overflow-hidden bg-gradient-to-b from-[#e6f0ff]"
  >
    <h2
      class="text-3xl font-extrabold text-[#3873CC] mb-8 tracking-tight drop-shadow-md"
    >
      Get Started Today
    </h2>
    <p class="text-gray-700 text-xl max-w-3xl mx-auto mb-12 leading-relaxed">
      If you are looking for comprehensive billing services under one roof,
      <span class="font-semibold text-[#3873CC]">Prime Doc Billing</span> is the
      right platform. Connect with us now.
    </p>
    <a
      href="https://primedocbilling.com/schedule-demo/"
      class="inline-block bg-gradient-to-r from-[#3873CC] to-[#2a54a0] hover:from-[#2a54a0] hover:to-[#1f3f7a] text-white font-semibold text-lg px-14 py-5 rounded-full shadow-lg transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-[#3873CC]/50"
      > Book a Demo</a
    >
    <div
      aria-hidden="true"
      class="absolute -top-24 -left-24 w-64 h-64 rounded-full bg-gradient-to-tr from-[#3873CC]/30 to-transparent blur-3xl pointer-events-none"
    ></div>
    <div
      aria-hidden="true"
      class="absolute -bottom-24 -right-24 w-64 h-64 rounded-full bg-gradient-to-br from-[#2a54a0]/30 to-transparent blur-3xl pointer-events-none"
    ></div>
  </section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Prime Doc Billing LLC",
  "alternateName": "Prime Doc Billing LLC",
  "url": "https://primedocbilling.com",
  "logo": "https://primedocbilling.com/wp-content/uploads/2025/02/Untitled.jpeg",
  "sameAs": [
    "https://www.facebook.com/Primedocbilling",
    "https://x.com/PrimeDocBilling",
    "https://www.linkedin.com/company/prime-doc-billing-llc/"
  ]
}
</script>
<?php get_footer(); ?>