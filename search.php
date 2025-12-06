<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package primedocbilling
 */

get_header();
?>

	<main id="primary" class="site-main mb-12">
		<?php if ( have_posts() ) : ?>
			<header class="page-header py-8">
			    <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
				<h1 class="page-title border-b text-gray-600">
					<?php
					printf( esc_html__( 'Search Results for: %s', 'primedocbilling' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
				</div>
			</header>

			<?php

			while ( have_posts() ) :
				the_post(); ?>
                <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
				    <h2 class="capitalize text-[#3F3F46] font-medium text-[20px]"> <a href="<?php the_permalink();?>"><?php the_title(); ?></a> </h2>
				    <p class="my-3"> <?php the_excerpt(); ?> </p>
				</div>
            <?php
            
			endwhile;
			
			the_posts_navigation();
		else :
		?>
		  <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto">
			<p>Nothing Found</p>
		</div>
        <?php
		    endif;
		?>
	</main>

<?php
get_footer();
