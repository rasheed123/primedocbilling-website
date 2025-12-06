<?php
/**
 * Template Name: Unified Service Page Template
 * 
 * This is a unified template for service pages that uses custom fields
 * to manage content from the WordPress admin dashboard.
 * 
 * @package primedocbilling
 */

get_header();

// Get custom field values
$hero_title = get_post_meta( get_the_ID(), '_service_hero_title', true );
$hero_description = get_post_meta( get_the_ID(), '_service_hero_description', true );
$hero_image = get_post_meta( get_the_ID(), '_service_hero_image', true );
$hero_button_text = get_post_meta( get_the_ID(), '_service_hero_button_text', true );
$hero_button_url = get_post_meta( get_the_ID(), '_service_hero_button_url', true );
$breadcrumb_text = get_post_meta( get_the_ID(), '_service_breadcrumb_text', true );
$breadcrumb_url = get_post_meta( get_the_ID(), '_service_breadcrumb_url', true );

// Get sections
$sections_json = get_post_meta( get_the_ID(), '_service_sections', true );
$sections = ! empty( $sections_json ) ? json_decode( $sections_json, true ) : array();

// Fallbacks
if ( empty( $hero_title ) ) {
	$hero_title = get_the_title();
}
if ( empty( $hero_button_text ) ) {
	$hero_button_text = 'Book a Demo';
}
if ( empty( $hero_button_url ) ) {
	$hero_button_url = home_url( '/schedule-demo/' );
}
if ( empty( $hero_image ) ) {
	$hero_image = get_template_directory_uri() . '/assets/images/newyork-services/newyork-bg.jpg';
}
?>

<!-- Hero Section -->
<section class="py-12 md:py-20 bg-[#3873cc] font-sans relative overflow-hidden">
	<!-- Background Image with 30% opacity -->
	<div class="absolute inset-0 z-0 opacity-20">
		<img 
			src="<?php echo esc_url( $hero_image ); ?>" 
			alt="Background pattern" 
			class="w-full h-full object-cover"
			loading="lazy"
		/>
	</div>

	<div class="max-w-7xl mx-auto px-6 flex flex-col-reverse lg:flex-row items-center gap-12 relative">
		<!-- Left Content -->
		<div class="max-w-3xl text-white space-y-6 lg:space-y-8">
			<?php if ( ! empty( $breadcrumb_text ) ) : ?>
			<nav aria-label="Breadcrumb" class="text-sm opacity-80 font-medium tracking-wide">
				<ol class="inline-flex items-center space-x-2">
					<li class="flex items-center">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:underline text-white/80">Home</a>
						<svg class="w-4 h-4 mx-2 text-[#00D1B2]" fill="none" stroke="currentColor" stroke-width="2"
							viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
						</svg>
					</li>
					<?php if ( ! empty( $breadcrumb_url ) ) : ?>
					<li class="flex items-center">
						<a href="<?php echo esc_url( $breadcrumb_url ); ?>" class="hover:underline text-white/80"><?php echo esc_html( $breadcrumb_text ); ?></a>
						<svg class="w-4 h-4 mx-2 text-[#00D1B2]" fill="none" stroke="currentColor" stroke-width="2"
							viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
						</svg>
					</li>
					<?php else : ?>
					<li aria-current="page" class="font-semibold text-white">
						<?php echo esc_html( $breadcrumb_text ); ?>
					</li>
					<?php endif; ?>
					<li aria-current="page" class="font-semibold text-white">
						<?php echo esc_html( get_the_title() ); ?>
					</li>
				</ol>
			</nav>
			<?php endif; ?>

			<h1 class="text-5xl font-extrabold tracking-tight leading-tight drop-shadow-lg">
				<?php echo esc_html( $hero_title ); ?>
			</h1>
			
			<?php if ( ! empty( $hero_description ) ) : ?>
			<div class="space-y-4 text-lg opacity-90 leading-relaxed drop-shadow-md">
				<?php echo wp_kses_post( wpautop( $hero_description ) ); ?>
			</div>
			<?php endif; ?>
			
			<a href="<?php echo esc_url( $hero_button_url ); ?>" target="_blank" rel="noopener noreferrer" class="inline-block mt-8">
				<button class="hover:border-white border border-[#00D1B2] shadow-lg hover:shadow-none transition duration-300 ease-in hero-btn py-4 px-8 capitalize bg-[#00D1B2] text-white text-[18px] font-medium rounded text-center">
					<?php echo esc_html( $hero_button_text ); ?>
				</button>
			</a>
		</div>
		
		<!-- Right Image -->
		<div class="w-full max-w-lg lg:max-w-xl relative">
			<img 
				alt="<?php echo esc_attr( $hero_title ); ?>" 
				class="w-full h-auto drop-shadow-2xl rounded-xl animate-[float_6s_ease-in-out_infinite]" 
				decoding="async" 
				loading="lazy" 
				src="<?php echo esc_url( $hero_image ); ?>" 
			/>
		</div>
	</div>
</section>

<!-- Main Content -->
<div class="container mx-auto px-4 md:px-6 py-12 max-w-7xl">
	<div class="flex flex-col lg:flex-row gap-8">
		<!-- Content Column -->
		<div class="lg:w-2/3">
			<?php if ( ! empty( $sections ) && is_array( $sections ) ) : ?>
				<?php foreach ( $sections as $index => $section ) : ?>
					<section class="mb-16">
						<?php if ( ! empty( $section['title'] ) ) : ?>
							<h2 class="text-3xl font-bold text-gray-800 mb-6"><?php echo esc_html( $section['title'] ); ?></h2>
						<?php endif; ?>
						
						<?php if ( ! empty( $section['description'] ) ) : ?>
							<p class="text-lg text-gray-600 mb-6 leading-relaxed">
								<?php echo wp_kses_post( wpautop( $section['description'] ) ); ?>
							</p>
						<?php endif; ?>
						
						<?php if ( ! empty( $section['items'] ) && is_array( $section['items'] ) ) : ?>
							<div class="space-y-6">
								<?php foreach ( $section['items'] as $item ) : ?>
									<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition duration-300">
										<p class="text-gray-600">
											<?php echo esc_html( $item ); ?>
										</p>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</section>
				<?php endforeach; ?>
			<?php endif; ?>
			
			<!-- Default WordPress Content -->
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<!-- Sidebar Form -->
		<div class="lg:w-1/3">
			<div class="sticky top-32">
				<div class="bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden">
					<div class="bg-sky-600 p-6 text-center">
						<h3 class="text-xl font-bold text-white">Book A Demo</h3>
					</div>
					<div class="p-6">
						<?php echo do_shortcode('[contact-form-7 id="87cc5b3" title="Book a Demo Form - Service"]'); ?>
					</div>
				</div>

				<!-- Trust Indicators -->
				<div class="mt-8 bg-gray-50 p-6 rounded-xl">
					<h4 class="text-lg font-semibold text-gray-800 mb-4">Why Practices Trust Us</h4>
					<div class="space-y-3">
						<div class="flex items-center gap-3">
							<div class="text-sky-600">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
								</svg>
							</div>
							<span class="text-sm text-gray-600">100% HIPAA Compliant</span>
						</div>
						<div class="flex items-center gap-3">
							<div class="text-sky-600">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
								</svg>
							</div>
							<span class="text-sm text-gray-600">24/7 Support</span>
						</div>
						<div class="flex items-center gap-3">
							<div class="text-sky-600">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
								</svg>
							</div>
							<span class="text-sm text-gray-600">US-Based Experts</span>
						</div>
						<div class="flex items-center gap-3">
							<div class="text-sky-600">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
								</svg>
							</div>
							<span class="text-sm text-gray-600">95% Accuracy Guarantee</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- External JavaScript -->
<script src="<?php echo get_theme_file_uri(); ?>/services.js"></script>

<?php get_footer(); ?>

