<?php
/**
 * Template part for displaying posts in author archive
 *
 * @package PrimeDocBilling
 */

?>

<article class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:scale-105 transition-all duration-300 hover:shadow-2xl">
    <?php if (has_post_thumbnail()) : ?>
        <div class="relative overflow-hidden h-48">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-300 hover:scale-110')); ?>
            </a>
            <div class="absolute top-4 left-4">
                <?php
                $categories = get_the_category();
                if ($categories) {
                    echo '<span class="bg-[#3873cc] text-white px-3 py-1 rounded-full text-xs font-medium">' . esc_html($categories[0]->name) . '</span>';
                }
                ?>
            </div>
        </div>
    <?php endif; ?>
    
    <div class="p-6">
        <div class="flex items-center text-sm text-gray-500 mb-3">
            <i class="fas fa-calendar mr-2"></i>
            <time datetime="<?php echo get_the_date('c'); ?>">
                <?php echo get_the_date('M j, Y'); ?>
            </time>
            <span class="mx-2">•</span>
            <i class="fas fa-clock mr-1"></i>
            <?php echo primedoc_estimate_reading_time(); ?> min read
        </div>
        
        <h3 class="text-2xl font-bold text-gray-900 mb-4">
            <a href="<?php the_permalink(); ?>" class="block hover:text-[#3873cc] transition-colors">
                <?php the_title(); ?>
            </a>
        </h3>
        
        <p class="text-gray-600 mb-4 line-clamp-3">
            <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
        </p>
        
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4 text-sm text-gray-500">
                <span class="flex items-center">
                    <i class="fas fa-eye mr-1"></i>
                    <?php echo primedoc_get_post_views(); ?>
                </span>
                <span class="flex items-center">
                    <i class="fas fa-comments mr-1"></i>
                    <?php comments_number('0', '1', '%'); ?>
                </span>
                <span class="flex items-center">
                    <i class="fas fa-heart mr-1"></i>
                    <?php echo primedoc_get_post_likes(); ?>
                </span>
            </div>
            
            <a href="<?php the_permalink(); ?>" 
               class="inline-flex items-center bg-[#3873cc] text-white px-6 py-2 rounded-full hover:bg-blue-700 transition-colors font-medium">
                Read More
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</article>
