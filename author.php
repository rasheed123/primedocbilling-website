<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package PrimeDocBilling
 */

get_header(); ?>

<div class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <section class="bg-[#3873cc] text-white py-20 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'><g fill=\'none\' fill-rule=\'evenodd\'><g fill=\'%23ffffff\' fill-opacity=\'0.1\'><circle cx=\'30\' cy=\'30\' r=\'2\'/></g></g></svg>');"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center">
                <?php
                $author = get_queried_object();
                $author_id = $author->ID;
                $author_name = get_the_author_meta('display_name', $author_id);
                $author_bio = get_the_author_meta('description', $author_id);
                $author_avatar = get_avatar_url($author_id, array('size' => 200));
                $author_email = get_the_author_meta('email', $author_id);
                ?>
                
                <div class="flex justify-center mb-6">
                    <div class="relative">
                        <img src="<?php echo esc_url($author_avatar); ?>" 
                             alt="<?php echo esc_attr($author_name); ?>" 
                             class="w-32 h-32 rounded-full border-4 border-white shadow-2xl">
                    </div>
                </div>
                
                <h1 class="text-4xl md:text-6xl font-bold mb-4">
                    <?php echo esc_html($author_name); ?>
                </h1>
                
                <?php if ($author_bio) : ?>
                    <p class="text-xl opacity-90 max-w-3xl mx-auto leading-relaxed mb-8">
                        <?php echo esc_html($author_bio); ?>
                    </p>
                <?php endif; ?>
                
                <div class="flex justify-center space-x-4 mt-6">
                    <a href="mailto:<?php echo esc_attr($author_email); ?>" 
                       class="bg-white bg-opacity-20 hover:bg-opacity-30 px-6 py-3 rounded-full transition-all duration-300">
                        <i class="fas fa-envelope mr-2"></i>Contact
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center p-6 bg-gradient-to-br from-blue-50 to-indigo-100 rounded-2xl">
                    <div class="text-4xl font-bold text-[#3873cc] mb-2">
                        <?php echo count_user_posts($author_id); ?>
                    </div>
                    <div class="text-gray-600 font-medium">Articles Written</div>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-br from-green-50 to-emerald-100 rounded-2xl">
                    <div class="text-4xl font-bold text-green-600 mb-2">
                        <?php
                        $comments_count = 0;
                        $posts = get_posts(array('author' => $author_id, 'numberposts' => -1));
                        foreach ($posts as $post) {
                            $comments_count += wp_count_comments($post->ID)->approved;
                        }
                        echo $comments_count;
                        ?>
                    </div>
                    <div class="text-gray-600 font-medium">Comments Received</div>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-br from-purple-50 to-violet-100 rounded-2xl">
                    <div class="text-4xl font-bold text-purple-600 mb-2">
                        <?php
                        $total_views = 0;
                        foreach ($posts as $post) {
                            $views = get_post_meta($post->ID, 'post_views_count', true);
                            $total_views += $views ? $views : 0;
                        }
                        echo number_format($total_views);
                        ?>
                    </div>
                    <div class="text-gray-600 font-medium">Total Views</div>
                </div>
                
                <div class="text-center p-6 bg-gradient-to-br from-orange-50 to-amber-100 rounded-2xl">
                    <div class="text-4xl font-bold text-orange-600 mb-2">
                        <?php
                        $first_post = get_posts(array(
                            'author' => $author_id,
                            'numberposts' => 1,
                            'order' => 'ASC'
                        ));
                        if ($first_post) {
                            $years = floor((current_time('timestamp') - strtotime($first_post[0]->post_date)) / (365*24*60*60));
                            echo $years > 0 ? $years . '+' : '1';
                        }
                        ?>
                    </div>
                    <div class="text-gray-600 font-medium">Years Writing</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Posts Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'author' => $author_id,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'posts_per_page' => 9
                );
                $author_posts = new WP_Query($args);
                
                if ($author_posts->have_posts()) :
                    while ($author_posts->have_posts()) : $author_posts->the_post();
                ?>
                        <article class="bg-white rounded-2xl shadow-lg overflow-hidden">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="relative overflow-hidden h-48">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover')); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="p-6">
                                <div class="flex items-center text-sm text-gray-500 mb-3">
                                    <i class="fas fa-calendar mr-2"></i>
                                    <time datetime="<?php echo get_the_date('c'); ?>">
                                        <?php echo get_the_date('M j, Y'); ?>
                                    </time>
                                </div>
                                
                                <h3 class="text-xl font-bold text-gray-900 mb-3">
                                    <a href="<?php the_permalink(); ?>" class="block">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                
                                <p class="text-gray-600 mb-4">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                </p>
                                
                                <a href="<?php the_permalink(); ?>" 
                                   class="inline-flex items-center text-[#3873cc] hover:text-blue-700 font-medium">
                                    Read More
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </article>
                <?php
                    endwhile;
                else :
                ?>
                    <div class="col-span-full text-center py-16">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">No Articles Found</h3>
                        <p class="text-gray-600">This author hasn't published any articles yet.</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                <?php
                $pagination = paginate_links(array(
                    'total' => $author_posts->max_num_pages,
                    'current' => $paged,
                    'prev_text' => '<i class="fas fa-chevron-left"></i>',
                    'next_text' => '<i class="fas fa-chevron-right"></i>',
                    'type' => 'array',
                    'mid_size' => 2,
                ));

                if ($pagination) {
                    echo '<nav class="flex justify-center"><ul class="flex space-x-2">';
                    foreach ($pagination as $page) {
                        echo '<li class="pagination-item">' . str_replace(
                            array('page-numbers', 'current'),
                            array('px-4 py-2 border border-gray-300 rounded-lg hover:bg-[#3873cc] hover:text-white transition-colors', 'px-4 py-2 bg-[#3873cc] text-white border border-[#3873cc] rounded-lg'),
                            $page
                        ) . '</li>';
                    }
                    echo '</ul></nav>';
                }
                ?>
            </div>
            
            <?php wp_reset_postdata(); ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>
