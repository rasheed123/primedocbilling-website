<?php

/** Template Name: Services page */
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-blue-900 to-blue-700 py-20 px-6">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h1 class="text-5xl font-bold mb-6">OUR SERVICES</h1>
            <p class="text-lg leading-relaxed">
                Prime Doc Billing adopts a dynamic and flexible approach for its clients
                to cater their needs in a cost effective manner. Our variety of business
                models help the clients to avail top quality services according to their
                requirements and needs.
            </p>
        </div>
    </div>

    <section class="py-10 lg:py-16">
        <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Item 1 -->
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="flex flex-col h-full">
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Credentialing.webp" alt="Credentialing Services" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Credentialing</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Prime Doc Billing's fast and accurate credentialing services. From provider enrollment to license tracking, we handle it all.
                            </p>
                            <a href="<?php echo home_url('/services/credentialing/'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Verification of benefits.webp" alt="Insurance Benefit Verification" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Verification of Benefits</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                We verify insurance benefits before the services are rendered. It ensures fewer billing issues and timely patient treatments.
                            </p>
                            <a href="<?php echo site_url() ?>/services/verification-of-benefits/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Prior authorization.webp" alt="Prior Authorization Services" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Prior Authorization</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Get your procedures approved on time with our fast prior authorization services. We focus on keeping your practice on track.
                            </p>
                            <a href="<?php echo site_url() ?>/services/prior-authorization/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Medical coding.webp" alt="Medical Coding Services" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Medical Coding</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Get compliant coding services. We turn clinical documentation into accurate codes to ensure faster billing and minimum delays.
                            </p>
                            <a href="<?php echo site_url() ?>/services/medical-coding/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Medical scribing.webp" alt="Remote Medical Scribing" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Medical Scribing</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Boost your productivity with our accurate and HIPAA-compliant medical scribe services to streamline your clinical workflows.
                            </p>
                            <a href="<?php echo site_url() ?>/services/scribing/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Medical billing.webp" alt="Medical Billing Services" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Medical Billing</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Your revenue is our responsibility. Our end-to-end billing services ensure faster reimbursements to keep a steady cash flow.
                            </p>
                            <a href="<?php echo site_url() ?>/services/medical-billing/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Accounts recievable.webp" alt="Accounts Receivable Services" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Accounts Receivable</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Get proactive A/R management services tailored for your practice. Your practice's financial performance is our top priority.
                            </p>
                            <a href="<?php echo site_url() ?>/services/accounts-recievable/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Denials management.webp" alt="Claim Denial Recovery" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Denial Management</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Get efficient denial management services to recover lost revenue. We identify the root cause to improve billing efficiency.
                            </p>
                            <a href="<?php echo site_url() ?>/services/denial-management/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/home/Medical practicwe management.webp" alt="Practice Management Solutions" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Practice Management</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Get more time for patient care with our Practice Management Services, so your practice can achieve better productivity.
                            </p>
                            <a href="<?php echo site_url() ?>/services/practice-management/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Revenue cycle management.webp" alt="RCM Services" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Revenue Cycle Management</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Our end-to-end RCM support from patient intake to payments. We maximize your revenue with tailored and strategic RCM planning.
                            </p>
                            <a href="<?php echo site_url() ?>/services/revenue-cycle-management/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Virtual assistant.webp" alt="Virtual Medical Assistant Services" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Virtual Assistant</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Boost your productivity with our Virtual Medical Assistants who handle your daily operations and offer cost-effective help.
                            </p>
                            <a href="<?php echo site_url() ?>/services/virtual-assistant/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/home/workers compensation.webp" alt="Workers Compensation Medical Billing" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Workers' Compensation Billing</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                We specialize in workers' compensation billing. Ensure timely reimbursement and compliance with state regulations.
                            </p>
                            <a href="<?php echo home_url('/services/workers-comp-billing'); ?>" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                        <img src="<?php echo get_theme_file_uri() ?>/assets/images/Web development.webp" alt="Medical Website Development" class="w-full object-cover flip-card__photo"/>
                        <div class="p-4 flex-grow flex flex-col">
                            <h5 class="text-[#334155] font-semibold capitalize text-lg mb-2">Website Development</h5>
                            <p class="text-[#334155] text-[14px] font-light mb-4 flex-grow">
                                Get a custom healthcare website with our web development services to enhance patient engagement and elevate practice growth.
                            </p>
                            <a href="<?php echo site_url() ?>/services/website-development/" target="_blank" class="bg-[#3873CC] hover:bg-[#2C5FAA] text-white px-4 py-2 rounded-lg text-center transition-colors duration-300">
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
                    <button id="openDemoModal" class="hover:border-[#00D1B2] shadow-lg hover:shadow-none transition duration-300 ease-in-out hero-btn py-4 px-8 capitalize border text-[15px] font-medium rounded text-[#20C197] border-[#20C197] hover:bg-[#20C197] hover:text-white"
                        data-te-toggle="modal"
                        data-te-target="#requestModal"
                        data-te-ripple-init
                        data-te-ripple-color="light">
                        <i class="fas fa-file-invoice-dollar mr-2"></i> Request A Free Practice Analysis
                    </button>
                </div>
            </section>
        </div>
    </section>
</body>
</html>
<?php
get_footer();
?>
