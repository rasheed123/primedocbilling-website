<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package primedocbilling
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="entry-header my-5">
    <div class="2xl:max-w-[1284px] xl:max-w-[1152px] lg:max-w-[984px] md:max-w-[744px] sm:max-w-[100%] px-6 sm:px-3 mx-auto py-3">
        
        <div class="single-blog-thumbnail">
            <?php primedocbilling_post_thumbnail(); ?>
        </div>
        
        <!--< ?php-->
        <!--if ('post' === get_post_type()) :-->
        <!--?>-->
        <!--<div class="entry-meta">
            <!--< ?php-->
            <!--primedocbilling_posted_on();-->
            <!--primedocbilling_posted_by();-->
            <!--?>-->
        <!--</div><!-- .entry-meta -->
        <!--< ?php endif; ?>
        
        <!-- Title -->
        <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title mt-6 mb-1 text-[#222] text-[20px] md:text-[24px] font-medium">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;
        ?>
        	<div class="entry-content text-gray-700 leading-7 mt-2">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'primedocbilling' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'primedocbilling' ),
				'after'  => '</div>',
			)
		);
		?>
		<div class="border-t my-4" data-aos="fade-up"></div>
	</div><!-- .entry-content -->
    </div>
</section><!-- .entry-header -->

	<footer class="entry-footer">
		<!-- ?php primedocbilling_entry_footer(); ?>-->
	</footer><!-- .entry-footer -->
<?php
// Extract tag slugs from the current post.
$tags = wp_get_post_terms(get_the_ID(), 'post_tag', array("fields" => "slugs"));

if ($tags) {
    $related_posts_query = new WP_Query(
        array(
            'tag_slug__in' => $tags, // Use tag slugs for related posts.
            'post__not_in' => array(get_the_ID()), // Exclude the current post.
            'posts_per_page' => 5, // Limit the number of related posts to 5.
            'post_type' => 'post', // Specify the post type (if using a custom post type).
        )
    );

    if ($related_posts_query->have_posts()) {
        echo '<h5 class="text-gray-800 text-[20px] font-medium mb-5" data-aos="fade-up">Related Posts</h5>';
        echo '<div class="flex gap-7 flex-col divide-y mb-5" data-aos="fade-up">';
        while ($related_posts_query->have_posts()) {
            $related_posts_query->the_post();
            $related_tags = wp_get_post_terms(get_the_ID(), 'post_tag', array("fields" => "slugs"));
            $first_tag = reset($related_tags); // Get the first tag for the current related post.
            $post_content = substr(get_the_content(), 0, 220) . '...'; // Get the first 60 characters of the post content.
            echo '<a href="' . get_permalink() . '" class="flex flex-col" data-aos="fade-up">' .
            '<span class="uppercase font-medium text-[#475569] text-sm mt-3">#' . $first_tag . '</span>' .
            '<h4 class="hover:underline text-[24px] text-[#334155] font-medium">' . get_the_title() . '</h4>' .
            '<p class="text-[#475569]">' . $post_content . '</p></a>';
        }
        echo '</div>';
    }
    wp_reset_postdata();
}

?>
	
</article><!-- #post-<?php the_ID(); ?> -->
