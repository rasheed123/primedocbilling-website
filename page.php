<?php

/**
 * Template Name: Blog Sample Page
 */
get_header();
?>
<article class="prose prose-lg max-w-none text-gray-800 leading-relaxed pb-16">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<!-- Title Section -->
			<section class="py-8 bg-[#fff] w-full">
				<div class="max-w-5xl mx-auto px-6">
					<h1 class="text-4xl font-extrabold text-[#0a1a3b] mb-6 mt-6"><?php the_title(); ?></h1>
				</div>
			</section>
			<!-- Featured Image Section -->
			<?php if (has_post_thumbnail()) : ?>
				<section class="bg-[#fff] w-full">
					<div class="max-w-5xl mx-auto px-6">
						<div class="mb-8">
							<?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover rounded-xl shadow-md']); ?>
						</div>
					</div>
				</section>
			<?php endif; ?>
			<!-- Content Section -->
			<section class="py-8 bg-[#f8fbff] w-full">
				<div class="max-w-5xl mx-auto px-6">
					<div class="prose prose-lg">
						<?php the_content(); ?>
					</div>
				</div>
			</section>
	<?php endwhile;
	endif; ?>

	<!-- 7. Submission methods -->
	<section id="choosing-billing-company" class="py-8 bg-[#fff] w-full">
		<div class="max-w-5xl mx-auto px-6">
			<h2 class="text-3xl font-extrabold text-[#0a1a3b] mb-6">Choosing the Right Medical Billing Company for Outsourcing</h2>

			<p>Choosing the right billing partner directly affects your practice’s growth. The right billing company fits into your workflow to improve financial results. It also helps protect your practice from compliance issues and audits.
			</p>
			<p>Why let billing hold you back when outsourcing can boost your practice’s revenue? <a href="<?php echo home_url(); ?>" class="font-semibold text-[#3873CC]"> Prime Doc Billing LLC </a> boosts your practice’s cash flow. You get results that are clear, consistent, and measurable.
			</p>
		</div>
	</section>

	<!-- Final Call to Action -->
	<section class="bg-gradient-to-r from-[#3873CC] to-[#2a54a0] py-16 text-center text-white">
		<div class="max-w-3xl mx-auto px-6">
			<h2 class="text-3xl font-extrabold mb-4">Partner with Prime Doc Billing Today</h2>
			<p class="text-lg mb-8">Let our experts handle your billing — streamline your revenue cycle and focus on patient care.</p>
			<div class="flex flex-col sm:flex-row justify-center gap-4">
				<a href="/schedule-demo/"
					class="bg-white text-sky-700 hover:bg-gray-100 font-medium py-3 px-8 rounded-md shadow-lg transition duration-300 transform hover:scale-105">
					Schedule a Demo
				</a>
				<a href="/contact-us/"
					class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-sky-700 font-medium py-3 px-8 rounded-md shadow transition duration-300 transform hover:scale-105">
					Contact Us
				</a>
			</div>
		</div>
	</section>
</article>
<?php get_footer(); ?>