<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package primedocbilling
 */

get_header();
?>

<main class="h-screen w-full flex flex-col justify-center items-center bg-[#1A2238]">
	<h1 class="text-9xl font-extrabold text-white tracking-widest">404</h1>
	<div class="bg-[#20C197] text-white px-2 text-sm rounded rotate-12 absolute">
		Page Not Found
	</div>
	<button class="mt-5">
		<a href="<?php echo site_url()?>" class="relative inline-block text-sm font-medium text-[#FF6A3D] group active:text-orange-500 focus:outline-none focus:ring">
			<span class="absolute inset-0 transition-transform translate-x-0.5 translate-y-0.5 bg-[#20C197] group-hover:translate-y-0 group-hover:translate-x-0"></span>
			<span class="relative block px-8 py-3 bg-[#20C197] border border-[#fff]">
				<router-link href="<?php echo site_url()?>" class="text-white">Go Home</router-link>
			</span>
		</a>
	</button>
</main>

<?php
get_footer();
