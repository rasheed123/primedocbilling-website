<?php
/**
 * Template Name: Blogs page
 * Description: A custom template for displaying blog posts with filtering
 */
get_header();
?>

<!-- Archive Header -->
<div class="text-center mb-12 py-12 md:py-20 bg-[#3873cc] font-sans">
    <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">Blog Archives</h1>
    <p class="text-white max-w-2xl mx-auto">Browse our latest articles on medical billing and practice management</p>
</div>
<main class="container mx-auto px-4 py-12 max-w-6xl">


    <!-- Category Filters -->
    <div class="flex flex-wrap gap-2 justify-center mb-8">
        <?php
        // Get current category filter from URL parameter
        $current_category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';
        $all_topics_class = empty($current_category) ? 'bg-[#20C197] text-white' : 'bg-gray-100 text-gray-800 hover:bg-gray-200';
        
        // Get the blog page URL (this page)
        $blog_page_url = get_permalink();
        ?>
        <a href="<?php echo esc_url($blog_page_url); ?>" class="px-4 py-2 rounded-full text-sm font-medium transition-colors <?php echo $all_topics_class; ?>">All Topics</a>
        <?php
        $categories = get_categories();
        foreach ( $categories as $category ) {
            $category_class = ($current_category == $category->slug) ? 'bg-[#20C197] text-white' : 'bg-gray-100 text-gray-800 hover:bg-gray-200';
            $category_url = add_query_arg('category', $category->slug, $blog_page_url);
            echo '<a href="' . esc_url( $category_url ) . '" class="px-4 py-2 rounded-full text-sm font-medium transition-colors ' . $category_class . '">' . esc_html( $category->name ) . '</a>';
        }
        ?>
    </div>

    <!-- Sorting Controls -->
    <div class="flex justify-center mb-8">
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <?php
            // Get current sort order from URL parameter, default to 'desc' (newest first)
            $current_order = isset($_GET['order']) ? sanitize_text_field($_GET['order']) : 'desc';
            $order_newest_class = ($current_order === 'desc') ? 'bg-[#20C197] text-white' : 'bg-white text-gray-700 hover:bg-gray-100';
            $order_oldest_class = ($current_order === 'asc') ? 'bg-[#20C197] text-white' : 'bg-white text-gray-700 hover:bg-gray-100';
            
            // Get current URL without order parameter
            $current_url = remove_query_arg('order');
            ?>
            <a href="<?php echo esc_url(add_query_arg('order', 'desc', $current_url)); ?>" class="px-4 py-2 text-sm font-medium rounded-l-lg border border-gray-200 <?php echo $order_newest_class; ?> transition-colors">
                Newest First
            </a>
            <a href="<?php echo esc_url(add_query_arg('order', 'asc', $current_url)); ?>" class="px-4 py-2 text-sm font-medium rounded-r-lg border border-gray-200 <?php echo $order_oldest_class; ?> transition-colors">
                Oldest First
            </a>
        </div>
    </div>

    <?php
    // Custom query for blog posts with sorting and category filtering
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $blog_args = array(
        'post_type' => 'post',
        'posts_per_page' => 9,
        'paged' => $paged,
        'orderby' => 'date',
        'order' => strtoupper($current_order) // Convert to uppercase for WP_Query
    );
    
    // Add category filter if specified
    if (!empty($current_category)) {
        $blog_args['category_name'] = $current_category;
    }
    
    $blog_query = new WP_Query( $blog_args );
    
    if ( $blog_query->have_posts() ) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
                <article class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <a href="<?php the_permalink(); ?>" class="block">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-48 object-cover', 'alt' => get_the_title() ) );
                        } else {
                            echo '<img src="' . esc_url( get_template_directory_uri() . '/assets/images/default-post-image.jpg' ) . '" alt="Default image" class="w-full h-48 object-cover">';
                        }
                        ?>
                        <div class="p-6">
                            <span class="inline-block px-3 py-1 rounded-full bg-[#EEFAF7] text-[#20C197] text-xs font-medium mb-2">
                                <?php
                                $post_categories = get_the_category();
                                if ( ! empty( $post_categories ) ) {
                                    echo esc_html( $post_categories[0]->name );
                                }
                                ?>
                            </span>
                            <h2 class="text-xl font-bold text-gray-900 mb-3"><?php the_title(); ?></h2>
                            <p class="text-gray-600 mb-4 text-sm"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                            <div class="flex items-center text-xs text-gray-500">
                                <span><?php echo get_the_date(); ?></span>
                                <span class="mx-2">•</span>
                                <span><?php echo esc_html( round( str_word_count( get_the_content() ) / 200 ) ); ?> min read</span>
                            </div>
                        </div>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center">
            <?php
            // Prepare pagination base URL with current filters
            $pagination_base = get_pagenum_link( 999999999 );
            if (!empty($current_category)) {
                $pagination_base = add_query_arg('category', $current_category, $pagination_base);
            }
            if (!empty($current_order)) {
                $pagination_base = add_query_arg('order', $current_order, $pagination_base);
            }
            
            echo paginate_links( array(
                'base' => str_replace( 999999999, '%#%', esc_url( $pagination_base ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $blog_query->max_num_pages,
                'prev_text' => '<span class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Previous</span>',
                'next_text' => '<span class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Next</span>',
                'before_page_number' => '<span class="px-4 py-2 bg-white border border-gray-300 rounded-md hover:bg-gray-50">',
                'after_page_number' => '</span>',
                'current_class' => 'bg-[#20C197] text-white border-[#20C197]',
                'class' => 'flex space-x-2',
            ) );
            ?>
        </div>

    <?php else : ?>
        <div class="text-center py-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">No posts found</h2>
            <p class="text-gray-600 mb-8">Sorry, no posts found. Please check back later.</p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="px-6 py-3 bg-[#20C197] text-white rounded-lg hover:bg-[#00D1B2] transition-colors">
                Return to Home
            </a>
        </div>
    <?php endif; ?>

    <!-- CTA Section -->
    <section class="mt-16 bg-[#EEFAF7] rounded-xl p-8 text-center">
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Ready to Transform Your Billing Process?</h2>
        <p class="text-gray-700 mb-6 max-w-2xl mx-auto">Our team of certified billing specialists can help you streamline operations, reduce denials, and increase collections.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="px-6 py-3 bg-[#20C197] hover:bg-[#00D1B2] text-white font-medium rounded-lg shadow-md transition-colors duration-300 inline-flex items-center justify-center">
                <i class="fas fa-calendar-check mr-2"></i> Schedule a Consultation
            </a>
            <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="px-6 py-3 bg-white border border-[#20C197] text-[#20C197] hover:bg-[#20C197] hover:text-white font-medium rounded-lg shadow-md transition-colors duration-300 inline-flex items-center justify-center">
                <i class="fas fa-file-invoice-dollar mr-2"></i> Request Free Analysis
            </a>
        </div>
    </section>

</main>

<?php
wp_reset_postdata();
get_footer();
?>
