<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package primedocbilling
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="google-site-verification" content="g6k-mv4uZBfUQ9R2B05BIZ19nv_znqHg90gJzI0waKc" />

	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://upload.cc" />
	<link rel="preconnect" href="https://sp-ao.shortpixel.ai" />
	<link rel="preconnect" href="https://cdnjs.cloudflare.com" />
	<link rel="preconnect" href="https://embed.tawk.to" />
	<link rel="preconnect" href="https://cdn.jsdelivr.net" />
	 <link rel="preload" href="https://upload.cc/i1/2020/05/14/A2kBfn.png" as="image"  media="(width <= 600px) />
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- Search -->
	<div class="p-6 min-h-screen flex justify-center items-start min-w-screen w-full bg-black bg-opacity-90 fixed top-0 left-0 z-50 search-form-container invisible opacity-0 transition duration-300 delay-150 ease-in">
		<img src="<?php echo get_theme_file_uri()?>/assets/images/close_big.png" alt="close" class="absolute top-8 right-8 close-search cursor-pointer" />
		<form action="<?php echo home_url('/')?>" method="get" class="mt-10 w-full flex justify-center invisible translate-y-4 opacity-0 transition duration-300 delay-150 searchform" id="search-form">
			<div class="bg-white w-full max-w-[500px] flex items-center border-b-4 border-[#00D1B2]">
				<input type="search" name="s" placeholder="Search..." class="p-4 w-[92%] focus:outline-none" id="input__search" value="<?php echo get_search_query()?>" required/>
				<label for="input__search">
					<button type="submit" class="flex items-center justify-center"><img src="<?php echo get_theme_file_uri()?>/assets/images/search_icon.png" alt="icon" /></button>
				</label>
			</div>
		</form>
	</div>
	<!-- Mobile Header -->
	<div class="flex flex-col justify-between min-h-screen w-screen bg-[#3873CC] text-white fixed left-0 top-0 z-50 mobile-menu -translate-x-full ease-in duration-300">
		<img src="<?php echo get_theme_file_uri()?>/assets/images/close_big.png" alt="icon" class="mobile_icon_close absolute top-4 right-4 z-100" />
		<ul class="flex flex-col gap-3 p-3 mt-8">
			<li>
				<a href="<?php echo site_url()?>" class="capitalize">home</a>
			</li>
			
			<li class="relative">
				<div class="flex items-center gap-2 mobile_droptoggler">
					<span href="#" class="capitalize">about us</span>
					<img src="<?php echo get_theme_file_uri()?>/assets/images/caret_down_w.png" alt="icon" />
				</div>

				<ul class="mobile_dropdown hidden flex flex-col pl-1 gap-2 overflow-hidden">
					<li>
						<a href="<?php echo site_url()?>/mission/" class="capitalize text-[14px]">mission / Vision</a>
					</li>
					<li><a href="<?php echo site_url()?>/core-values/" class="capitalize text-[14px]">core values</a></li>
					<li>
						<a href="<?php echo site_url()?>/company-profile/" class="capitalize text-[14px]">company profile</a>
					</li>
				</ul>
			</li>
			
<li class="relative">
    <div class="flex items-center gap-2 mobile_droptoggler">
        <a href="<?php echo site_url()?>/services" class="capitalize">services</a>
        <img src="<?php echo get_theme_file_uri()?>/assets/images/caret_down_w.png" alt="icon" />
    </div>

    <ul class="mobile_dropdown hidden flex flex-col pl-1 gap-2 overflow-hidden">
        <li>
            <a href="<?php echo site_url()?>/medical-billing/credentialing/" class="capitalize text-[14px]">Credentialing</a>
        </li>
        <!--<li>-->
        <!--    <a href="<?php echo site_url()?>/medical-billing/appointment-scheduling/" class="capitalize text-[14px]">Appointment Scheduling</a>-->
        <!--</li>-->
        <li>
            <a href="<?php echo site_url()?>/medical-billing/insurance-verification/" class="capitalize text-[14px]">Verification of Benefits</a>
        </li>
        <li>
            <a href="<?php echo site_url()?>/medical-billing/prior-authorization/" class="capitalize text-[14px]">Prior Authorization</a>
        </li>
        <li>
            <a href="<?php echo site_url()?>/medical-billing/medical-coding/" class="capitalize text-[14px]">Medical Coding</a>
        </li>
        <li>
            <a href="<?php echo site_url()?>/medical-billing/scribing/" class="capitalize text-[14px]">Medical Scribing</a>
        </li>
        <li>
            <a href="<?php echo site_url()?>/medical-billing/service/" class="capitalize text-[14px]">Medical Billing</a>
        </li>
        <li>
            <a href="<?php echo site_url()?>/medical-billing/accounts-receivables/" class="capitalize text-[14px]">Account Receivables</a>
        </li>
        <li>
            <a href="<?php echo site_url()?>/medical-billing/denial-management/" class="capitalize text-[14px]">Denial Management</a>
        </li>
        <li>
            <a href="<?php echo site_url()?>services/practice-management/" class="capitalize text-[14px]">Practice Management</a>
        </li>
        <li>
            <a href="<?php echo site_url()?>/medical-billing/rcm/" class="capitalize text-[14px]">Revenue Cycle Management</a>
        </li>
        <li>
            <a href="<?php echo site_url()?>/medical-billing/virtual-assistant/" class="capitalize text-[14px]">Virtual Assistant</a>
        </li>
        <li>
            <a href="<?php echo site_url()?>/medical-billing/workers-compensation/" class="capitalize text-[14px]">Workers Compensation</a>
        </li>
        <li>
            <a href="<?php echo site_url()?>/medical-billing/website-development/" class="capitalize text-[14px]">Website Development</a>
        </li>
    </ul>
    			</li>
			<li class="flex items-center gap-2">
				<a href="<?php echo site_url()?>/blogs/" class="capitalize">blogs</a>
			</li>
			<li class="flex items-center gap-2">
				<a href="<?php echo site_url()?>/faqs/" class="capitalize">FAQ's</a>
			</li>
			<li class="relative">
				<div class="flex items-center gap-2 mobile_droptoggler">
					<span href="<?php echo site_url()?>/contact-us/" class="capitalize">contact us</span>
					<!-- <img src="<?php // echo get_theme_file_uri()?>/assets/images/caret_down_w.png" alt="icon" /> -->
				</div>
<!-- 
				<ul class="mobile_dropdown hidden flex flex-col pl-1 gap-2 overflow-hidden">
					<li class="tawlk-toggle"><span class="capitalize text-[14px]">connect with sales</span></li>
					<li><span class="capitalize text-[14px]" data-te-toggle="modal" data-te-target="#demoModal" data-te-ripple-init data-te-ripple-color="light">book a demo</span></li>
					<li>
						<span class="capitalize text-[14px]" data-te-toggle="modal" data-te-target="#requestModal" data-te-ripple-init data-te-ripple-color="light">request a free practice
							analysis</span>
					</li>
				</ul>
				-->
			</li>
		</ul>
</li>
		<ul class="icons p-3 flex flex-col gap-5">
			<li>
				<a href="tel:(347) 650-2656" class="flex items-center gap-2">
					<img src="<?php echo get_theme_file_uri()?>/assets/images/phone_outline.png" alt="icon"  width="24" height="24"
     loading="lazy"
     decoding="async"
     class="object-contain w-[24px] h-[24px]" />
					(347) 650-2656
				</a>
			</li>
			<li>
				<a href="tel:+13476502656" class="flex items-center gap-2">
					<img src="<?php echo get_theme_file_uri()?>/assets/images/bxl_whatsapp.png" alt="icon" />
					(347) 650-2656
				</a>
			</li>
			<li>
				<a href="mailto:info@primedocbilling.com" class="flex items-center gap-2">
					<img src="<?php echo get_theme_file_uri()?>/assets/images/mail.png" alt="Email Icon"
       width="20" height="20"
       loading="lazy"
       decoding="async"
       class="object-contain w-[20px] h-[20px]" />
					info@primedocbilling.com
				</a>
			</li>
			<li class="flex gap-4 items-center">
				<a href="https://web.facebook.com/Primedocbilling" target="_blank"><img src="https://primedocbilling.com/wp-content/themes/primedocbilling/assets/images/facebook.png"
     alt="Facebook"
     width="24" height="24"
     loading="lazy"
     decoding="async"
     style="object-fit: contain;">
</a>
				<a href="https://twitter.com/PrimeDocBilling" target="_blank"><img src="<?php echo get_theme_file_uri()?>/assets/images/twitter.png" alt="twitter" /></a>
				<a href="https://www.instagram.com/primedocbillingllc/" target="_blank"><img src="<?php echo get_theme_file_uri()?>/assets/images/instagram.png" alt="instagram" /></a>
				<a href="https://www.linkedin.com/company/prime-doc-billing-llc/" target="_blank"><img src="<?php echo get_theme_file_uri()?>/assets/images/invision.png" alt="linkedin" /></a>
			</li>
		</ul>
	</div>
	<!-- Sub Header -->
	<div class="sub-header py-2 bg-[#3873CC] hidden md:block">
		<div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
			<div class="flex justify-between items-center">
				<div class="flex items-center gap-6 text-white">
					<a href="tel:(347) 650-2656" class="flex items-center gap-2">
						<img src="<?php echo get_theme_file_uri()?>/assets/images/phone_outline.png" alt="icon" width="24" height="24"
     loading="lazy"
     decoding="async"
     class="object-contain w-[24px] h-[24px]" />
						(347) 650-2656
					</a>
					<a href="mailto:info@primedocbilling.com" class="flex items-center gap-2">
						<img src="<?php echo get_theme_file_uri()?>/assets/images/mail.png" alt="icon" />
						info@primedocbilling.com
					</a>
				</div>
				<div class="flex gap-4">
					<a href="https://web.facebook.com/Primedocbilling" target="_blank"><img src="<?php echo get_theme_file_uri()?>/assets/images/facebook.png" alt="facebook" /></a>
					<a href="https://twitter.com/PrimeDocBilling" target="_blank"><img src="<?php echo get_theme_file_uri()?>/assets/images/twitter.png" alt="twitter" /></a>
					<a href="https://www.instagram.com/primedoc_billing/" target="_blank"><img src="<?php echo get_theme_file_uri()?>/assets/images/instagram.png" alt="instagram" /></a>
					<a href="https://www.linkedin.com/company/prime-doc-billing-llc/" target="_blank"><img src="<?php echo get_theme_file_uri()?>/assets/images/invision.png" alt="linkedin" /></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Header -->
	<header class="py-4 bg-white sticky top-0 z-20">
		<div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
			<div class="flex justify-between items-center">
				<a href="<?php echo site_url()?>">
					<img src="<?php echo get_theme_file_uri()?>/assets/images/Logo_Header_White.png" alt="Logo" />
				</a>
				<nav>
					<ul class="hidden xl:flex gap-12">
						<li class="flex gap-2 items-center">
							<a href="<?php echo site_url()?>" class="nav__link font-medium text-[#1F2937] capitalize">Home</a>
						</li>
						<li class="flex items-center gap-2 group relative">
							<a href="#" class="nav__link font-medium text-[#1F2937] capitalize">about us</a>
							<img src="<?php echo get_theme_file_uri()?>/assets/images/caret_down.png" alt="icon" />
							<ul class="shadow-lg absolute w-max top-8 right-0 2xl:left-0 bg-transparent border-t border-[#3873CC] opacity-0 translate-y-4 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-300 before:block before:w-full before:absolute before:-top-8 before:h-10 before:bg-transparent">
								<li class="bg-white px-4 py-1 hover:bg-gray-100">
									<a href="<?php echo site_url()?>/mission/" class="text-gray-700 text-[14px]">Mission /
										Vision</a>
								</li>
								<li class="bg-white px-4 py-1 hover:bg-gray-100">
									<a href="<?php echo site_url()?>/core-values/" class="text-gray-700 text-[14px]">Core
										Values</a>
								</li>
								<li class="bg-white px-4 py-1 hover:bg-gray-100">
									<a href="<?php echo site_url()?>/company-profile/" class="text-gray-700 text-[14px]">Company
										Profile</a>
								</li>
							</ul>
						</li>
<li class="flex items-center gap-2 group relative">
    <a href="<?php echo site_url()?>/services" class="nav__link font-medium text-[#1F2937] capitalize">services</a>
    <img src="<?php echo get_theme_file_uri()?>/assets/images/caret_down.png" alt="icon" />
    <ul class="shadow-lg absolute w-max top-12 right-0 2xl:left-0 bg-transparent border-t border-[#3873CC] opacity-0 translate-y-4 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-300 before:block before:w-full before:absolute before:-top-8 before:h-10 before:bg-transparent">
        <li class="bg-white px-4 py-1 hover:bg-gray-100">
            <a href="<?php echo site_url()?>/medical-billing/credentialing/" class="text-gray-700 text-[14px]">Credentialing</a>
        </li>
        <!--<li class="bg-white px-4 py-1 hover:bg-gray-100">-->
        <!--    <a href="<?php echo site_url()?>/medical-billing/appointment-scheduling/" class="text-gray-700 text-[14px]">Appointment Scheduling</a>-->
        <!--</li>-->
        <li class="bg-white px-4 py-1 hover:bg-gray-100">
            <a href="<?php echo site_url()?>/medical-billing/insurance-verification/" class="text-gray-700 text-[14px]">Verification of Benefits</a>
        </li>
        <li class="bg-white px-4 py-1 hover:bg-gray-100">
            <a href="<?php echo site_url()?>/medical-billing/prior-authorization/" class="text-gray-700 text-[14px]">Prior Authorization</a>
        </li>
        <li class="bg-white px-4 py-1 hover:bg-gray-100">
            <a href="<?php echo site_url()?>/medical-billing/medical-coding/" class="text-gray-700 text-[14px]">Medical Coding</a>
        </li>
        <li class="bg-white px-4 py-1 hover:bg-gray-100">
            <a href="<?php echo site_url()?>/medical-billing/scribing/" class="text-gray-700 text-[14px]">Medical Scribing</a>
        </li>
        <li class="bg-white px-4 py-1 hover:bg-gray-100">
            <a href="<?php echo site_url()?>/medical-billing/service/" class="text-gray-700 text-[14px]">Medical Billing</a>
        </li>
        <li class="bg-white px-4 py-1 hover:bg-gray-100">
            <a href="<?php echo site_url()?>/medical-billing/accounts-receivables/" class="text-gray-700 text-[14px]">Account Receivables</a>
        </li>
        <li class="bg-white px-4 py-1 hover:bg-gray-100">
            <a href="<?php echo site_url()?>/medical-billing/denial-management/" class="text-gray-700 text-[14px]">Denial Management</a>
        </li>
        <li class="bg-white px-4 py-1 hover:bg-gray-100">
            <a href="<?php echo site_url()?>/medical-billing/practice-management/" class="text-gray-700 text-[14px]">Practice Management</a>
        </li>
        <li class="bg-white px-4 py-1 hover:bg-gray-100">
            <a href="<?php echo site_url()?>/medical-billing/rcm/" class="text-gray-700 text-[14px]">Revenue Cycle Management</a>
        </li>
        <li class="bg-white px-4 py-1 hover:bg-gray-100">
            <a href="<?php echo site_url()?>/medical-billing/virtual-assistant/" class="text-gray-700 text-[14px]">Virtual Assistant</a>
        </li>
        <!--<li class="bg-white px-4 py-1 hover:bg-gray-100">-->
        <!--    <a href="<?php echo site_url()?>/medical-billing/workers-compensation/" class="text-gray-700 text-[14px]">Workers Compensation</a>-->
        <!--</li>-->
        <li class="bg-white px-4 py-1 hover:bg-gray-100">
            <a href="<?php echo site_url()?>/medical-billing/workers-compensation/" class="capitalize text-[14px]">Workers Compensation</a>
        </li>
        <li class="bg-white px-4 py-1 hover:bg-gray-100">
            <a href="<?php echo site_url()?>/medical-billing/website-development/" class="text-gray-700 text-[14px]">Website Development</a>
        </li>
    </ul>
</li>
						<li class="flex gap-2 items-center">
							<a href="<?php echo site_url()?>/blogs/" class="nav__link font-medium text-[#1F2937] capitalize">blogs</a>
						</li>
						<li class="flex gap-2 items-center">
							<a href="<?php echo site_url()?>/faqs/" class="nav__link font-medium text-[#1F2937] capitalize">FAQ's</a>
						</li>
						<li class="flex items-center gap-2 group relative">
							<a href="<?php echo site_url()?>/contact-us/" class="nav__link font-medium text-[#1F2937] capitalize">contact us</a>
						</li>
						<li class="flex gap-2 items-center">
							<a href="/schedule-demo/" class="bg-[#3873CC] text-white px-6 py-2 rounded-md font-medium hover:bg-[#2c5ea3] transition duration-300">
								TALK TO AN EXPERT
							</a>
						</li>
					</ul>
					<img src="<?php echo get_theme_file_uri()?>/assets/images/menu_alt.svg" alt="icon" class="block xl:hidden icon_menu" />
				</nav>
			</div>
		</div>
	</header>