<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package primedocbilling
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-8'); ?>>
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-48 object-cover', 'alt' => get_the_title() ) ); ?>
                </a>
            </div>
        <?php endif; ?>
        
        <div class="p-6">
            <!-- Category -->
            <div class="mb-3">
                <?php
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<span class="inline-block px-3 py-1 rounded-full bg-[#EEFAF7] text-[#20C197] text-xs font-medium">' . esc_html( $categories[0]->name ) . '</span>';
                }
                ?>
            </div>
            
            <!-- Title -->
            <header class="entry-header mb-3">
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title text-2xl font-bold text-gray-900">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title text-xl font-bold text-gray-900 mb-2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
                ?>
            </header><!-- .entry-header -->
            
            <!-- Meta -->
            <div class="entry-meta text-sm text-gray-500 mb-4">
                <span class="posted-on">
                    <time class="entry-date published" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                </span>
                <span class="mx-2">•</span>
                <span class="byline">
                    <span class="author vcard">
                        <a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author(); ?></a>
                    </span>
                </span>
                <span class="mx-2">•</span>
                <span><?php echo esc_html( round( str_word_count( get_the_content() ) / 200 ) ); ?> min read</span>
            </div><!-- .entry-meta -->
            
            <!-- Content -->
            <div class="entry-content text-gray-700 leading-relaxed">
                <?php
                if ( is_singular() ) :
                    the_content();
                else :
                    echo '<p>' . wp_trim_words( get_the_excerpt(), 30, '...' ) . '</p>';
                endif;
                
                wp_link_pages(
                    array(
                        'before' => '<div class="page-links mt-4">' . esc_html__( 'Pages:', 'primedocbilling' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div><!-- .entry-content -->
            
            <?php if ( ! is_singular() ) : ?>
                <div class="mt-4">
                    <a href="<?php the_permalink(); ?>" class="text-[#20C197] hover:text-[#00D1B2] font-medium">
                        Read More <span aria-hidden="true">→</span>
                    </a>
                </div>
            <?php endif; ?>
            
            <?php if ( is_singular() ) : ?>
                <!-- Tags -->
                <?php
                $post_tags = get_the_tags();
                if ( $post_tags ) : ?>
                    <div class="mt-6 pt-4 border-t border-gray-200">
                        <h3 class="text-sm font-medium text-gray-900 mb-2">Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach( $post_tags as $tag ) : ?>
                                <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800 hover:bg-gray-200" rel="tag"><?php echo esc_html( $tag->name ); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->

<?php if ( is_singular() ) : ?>
    <!-- Related Posts -->
    <?php
    $tags = wp_get_post_terms(get_the_ID(), 'post_tag', array("fields" => "slugs"));
    
    if ($tags) {
        $related_posts_query = new WP_Query(
            array(
                'tag_slug__in' => $tags,
                'post__not_in' => array(get_the_ID()),
                'posts_per_page' => 3,
                'post_type' => 'post',
            )
        );

        if ($related_posts_query->have_posts()) {
            echo '<section class="related-posts mt-12">';
            echo '<h3 class="text-2xl font-bold text-gray-900 mb-6">Related Posts</h3>';
            echo '<div class="grid grid-cols-1 md:grid-cols-3 gap-6">';
            
            while ($related_posts_query->have_posts()) {
                $related_posts_query->the_post();
                ?>
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <a href="<?php the_permalink(); ?>">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'medium', array( 'class' => 'w-full h-32 object-cover' ) );
                        } else {
                            echo '<img src="https://placehold.co/400x225" alt="' . get_the_title() . '" class="w-full h-32 object-cover">';
                        }
                        ?>
                        <div class="p-4">
                            <h4 class="font-semibold text-gray-900 mb-2"><?php the_title(); ?></h4>
                            <p class="text-gray-600 text-sm"><?php echo wp_trim_words( get_the_excerpt(), 15, '...' ); ?></p>
                        </div>
                    </a>
                </article>
                <?php
            }
            
            echo '</div>';
            echo '</section>';
        }
        wp_reset_postdata();
    }
    ?>
<?php endif; ?>
