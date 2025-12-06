<?php

/** Template Name: Services page */
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services in New York</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- newyork -->
<div class="bg-gradient-to-br from-blue-900 to-blue-700 py-20 px-6">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h1 class="text-5xl font-bold mb-6">OUR SERVICES FOR NEW YORK PROVIDERS</h1>
            <p class="text-lg leading-relaxed">
            Prime Doc Billing empowers New York clinics and hospitals with specialized healthcare solutions. From virtual assistance to coding and RCM, we tailor every service to meet the demands of modern medical practices in NYC.
            </p>
        </div>
    </div>

    <section class="py-10 lg:py-16">
        <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Item 1 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Credentialing.webp" alt="Credentialing Services in New York for Providers" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Credentialing in New York</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Accelerate provider onboarding in New York with our fast, accurate credentialing services. We manage enrollment and license tracking for NYC-based healthcare professionals.
                            </p>
                            <a href="<?php echo home_url('/new-york/credentialing-services/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Verification of benefits.webp" alt="Insurance Benefit Verification in New York" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Verification of Benefits – New York</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                We verify patient insurance benefits for New York practices, reducing billing errors and ensuring treatment eligibility before services are rendered.
                            </p>
                            <a href="<?php echo home_url('/new-york/verification-of-benefits-services/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Prior authorization.webp" alt="Prior Authorization Services for New York Clinics" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Prior Authorization – New York</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Speed up approvals for medical procedures in New York with our efficient prior authorization services. We handle payor protocols so you can focus on patient care.
                            </p>
                            <a href="<?php echo home_url('/new-york/prior-authorization-services/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Medical coding.webp" alt="Medical Coding Services in New York" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Medical Coding – New York</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Our certified coders ensure accurate, compliant medical coding for New York healthcare providers — reducing rejections and maximizing reimbursements.
                            </p>
                            <a href="<?php echo home_url('/new-york/medical-coding-services/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Medical scribing.webp" alt="Remote Medical Scribing in New York" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Medical Scribing – New York</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Enhance your New York practice’s efficiency with virtual medical scribing. Our HIPAA-compliant scribes deliver real-time, high-quality clinical documentation.
                            </p>
                            <a href="<?php echo home_url('/new-york/medical-scribing-services/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Medical billing.webp" alt="Medical Billing Services in New York" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Medical Billing – New York</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Outsource your medical billing in New York to our expert team. We handle claims, collections, and reimbursements to help your practice thrive financially.
                            </p>
                            <a href="<?php echo home_url('/new-york/medical-billing-services/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Accounts recievable.webp" alt="Accounts Receivable Services in New York" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Accounts Receivable – New York</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Recover unpaid claims and boost revenue with proactive A/R management services for New York providers. We focus on reducing outstanding balances.
                            </p>
                            <a href="<?php echo home_url('/new-york/account-recievables-services/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Denials management.webp" alt="Claim Denial Recovery in New York Healthcare" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Denial Management – New York</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Turn claim rejections into revenue with our denial management services tailored for New York medical practices. We resolve issues fast and prevent future denials.
                            </p>
                            <a href="<?php echo home_url('/new-york/denial-management-services/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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

                <!-- Item 9 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/home/Medical practicwe management.webp" alt="Practice Management Solutions in New York" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Practice Management – New York</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Let us handle your administrative and operational workflows in New York. Our practice management solutions help you focus more on patient outcomes.
                            </p>
                            <a href="<?php echo home_url('/new-york/practice-management-services/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Revenue cycle management.webp" alt="RCM Services in New York for Healthcare Providers" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Revenue Cycle Management – New York</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Streamline the entire revenue cycle for your New York clinic. From patient intake to collections, we improve financial performance across the board.
                            </p>
                            <a href="<?php echo home_url('/new-york/revenue-cycle-management-services/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Virtual assistant.webp" alt="Virtual Medical Assistant Services in New York" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Virtual Assistant – New York</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Boost your practice’s productivity with our virtual medical assistants based in New York. From scheduling to billing support, we’re always connected.
                            </p>
                            <a href="<?php echo home_url('/new-york/virtual-assistance-services/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/home/workers compensation.webp" alt="Workers Compensation Medical Billing in New York" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Workers' Compensation Billing – New York</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                We specialize in workers' compensation billing for New York providers. Ensure timely reimbursement and compliance with state regulations.
                            </p>
                            <a href="<?php echo home_url('/new-york/workers-comp-billing/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Web development.webp" alt="Medical Website Development for New York Practices" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Website Development – New York</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Grow your healthcare practice in New York with a custom-built medical website. We design optimized, mobile-friendly sites tailored for providers.
                            </p>
                            <a href="<?php echo home_url('/new-york/medical-web-development/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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

            <!-- CTA Section (Updated) -->
            <section class="mt-16 bg-[#EEFAF7] rounded-xl p-8 text-center container mx-auto max-w-7xl">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Ready to Transform Your Billing Process?</h2>
                <p class="text-gray-700 mb-6 max-w-2xl mx-auto">Our team of certified billing specialists can help you streamline operations, reduce denials, and increase collections.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <!-- External link to Schedule a Consultation -->
                    <a href="https://primedocbilling.com/schedule-demo/" target="_blank" rel="noopener noreferrer"
                        class="px-6 py-3 bg-[#20C197] hover:bg-[#00D1B2] text-white font-medium rounded-lg shadow-md transition-colors duration-300 inline-flex items-center justify-center">
                        <i class="fas fa-calendar-check mr-2"></i> Schedule a Consultation
                    </a>
            
                    <!-- Modal Trigger for Request Free Analysis -->
                    <button class="hover:border-[#00D1B2] shadow-lg hover:shadow-none transition duration-300 ease-in-out hero-btn py-4 px-8 capitalize border text-[15px] font-medium rounded text-[#20C197] border-[#20C197] hover:bg-[#20C197] hover:text-white" 
                        data-te-toggle="modal"
                        data-te-target="#requestModal"
                        data-te-ripple-init
                        data-te-ripple-color="light" id="openDemoModal">
                        <i class="fas fa-file-invoice-dollar mr-2"></i> 
                        Request A Free Practice Analysis
                    </button>
                </div>
            </section>
    </section>
    </section>
</body>
</html>

<?php

/** Template Name: Services page */
get_footer();
?>
