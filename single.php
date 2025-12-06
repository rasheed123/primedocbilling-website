<?php get_header(); ?>

<!-- Reading Progress Bar -->
<div id="reading-progress" class="fixed top-0 left-0 h-1 bg-gradient-to-r from-[#3873CC] via-[#20C197] to-[#10b981] z-50 w-0 transition-all duration-300 ease-out"></div>

<main class="max-w-4xl mx-auto px-6 py-10 md:py-16">
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article <?php post_class("bg-white rounded-3xl shadow-lg overflow-hidden") ?> itemscope itemtype="https://schema.org/BlogPosting">

                <!-- Featured Image -->
                <div class="relative">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="w-full h-64 md:h-96 overflow-hidden rounded-t-3xl">
                            <?php the_post_thumbnail('large', [
                                'class' => 'w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-105',
                                'itemprop' => 'image',
                                'loading' => 'lazy'
                            ]); ?>
                        </div>
                    <?php else : ?>
                        <div class="w-full h-64 md:h-96 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center rounded-t-3xl">
                            <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    <?php endif; ?>

                    <!-- Category Badge -->
                    <div class="absolute top-6 left-6">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            echo '<span class="inline-block bg-gradient-to-r from-[#20C197] to-[#10b981] text-white uppercase text-xs font-semibold tracking-widest rounded-full px-4 py-1 shadow-lg drop-shadow-lg select-none" itemprop="articleSection">' . esc_html($categories[0]->name) . '</span>';
                        }
                        ?>
                    </div>
                </div>

                <!-- Article Content -->
                <div class="px-6 md:px-10 py-8 md:py-12">
                    <!-- Meta Info -->
                    <div class="flex flex-wrap items-center text-gray-500 text-sm space-x-4 mb-8">
                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
                           class="flex items-center space-x-2 group" itemprop="author" itemscope itemtype="https://schema.org/Person">
                            <?php echo get_avatar(get_the_author_meta('ID'), 32, '', '', ['class' => 'w-8 h-8 rounded-full ring-2 ring-white shadow-sm group-hover:ring-[#3873CC] transition']); ?>
                            <span itemprop="name" class="font-medium text-gray-700 group-hover:text-[#3873CC] transition"><?php the_author(); ?></span>
                        </a>

                        <div class="flex items-center space-x-1">
                            <i class="fas fa-calendar-alt"></i>
                            <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="select-none">
                                <?php echo get_the_date('F j, Y'); ?>
                            </time>
                        </div>

                        <div class="flex items-center space-x-1">
                            <i class="fas fa-clock"></i>
                            <span>
                                <?php echo esc_html(round(str_word_count(get_the_content()) / 200)); ?> min read
                            </span>
                        </div>

                        <div class="flex items-center space-x-1">
                            <i class="fas fa-eye"></i>
                            <span><?php echo primedoc_get_post_views(); ?> views</span>
                        </div>
                    </div>

                    <!-- Title -->
                    <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight mb-8 tracking-tight drop-shadow-sm">
                        <?php the_title(); ?>
                    </h1>

                    <!-- Article Body -->
                    <div class="prose prose-lg max-w-none text-gray-700 prose-a:text-[#3873CC] prose-a:no-underline prose-a:border-b-2 prose-a:border-transparent hover:prose-a:border-[#3873CC] hover:prose-a:text-[#2c5ba3] transition-all duration-300">
                        <?php the_content(); ?>
                    </div>

                    <!-- Tags -->
                    <?php
                    $post_tags = get_the_tags();
                    if ($post_tags) : ?>
                        <section class="mt-12 pt-8 border-t border-gray-200">
                            <h3 class="flex items-center text-xl font-semibold text-gray-900 mb-5">
                                <i class="fas fa-tags mr-3 text-[#3873CC]"></i> Tags
                            </h3>
                            <div class="flex flex-wrap gap-3">
                                <?php foreach ($post_tags as $tag) : ?>
                                    <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                                       class="inline-block bg-gray-100 text-gray-700 px-4 py-2 rounded-full text-sm font-semibold hover:bg-[#3873CC] hover:text-white transition">
                                        <?php echo esc_html($tag->name); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </section>
                    <?php endif; ?>

                    <!-- Author Bio -->
                    <section class="mt-16 bg-gradient-to-tr from-gray-100 to-gray-200 rounded-3xl p-8 shadow-lg flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-8">
                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="flex-shrink-0">
                            <?php echo get_avatar(get_the_author_meta('ID'), 96, '', '', ['class' => 'w-24 h-24 rounded-full ring-4 ring-white shadow-lg transition-transform hover:scale-105']); ?>
                        </a>
                        <div class="flex-1">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-2xl font-bold text-gray-900">
                                    <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
                                       class="text-[#3873CC] hover:underline transition">
                                        <?php the_author(); ?>
                                    </a>
                                </h3>
                                <?php
                                $author_id = get_the_author_meta('ID');
                                $social_links = primedoc_get_author_social_links($author_id);
                                if (!empty($social_links)) : ?>
                                    <div class="flex space-x-3">
                                        <?php foreach ($social_links as $social) : ?>
                                            <a href="<?php echo esc_url($social['url']); ?>"
                                               class="w-10 h-10 flex items-center justify-center rounded-full bg-[#3873CC] text-white shadow-md hover:bg-[#2c5ba3] hover:shadow-lg transition transform hover:-translate-y-1"
                                               target="_blank" rel="noopener noreferrer" title="<?php echo esc_attr($social['label']); ?>">
                                                <i class="<?php echo esc_attr($social['icon']); ?> fa-lg"></i>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <p class="text-gray-700 mb-5 leading-relaxed max-w-prose" itemprop="description">
                                <?php the_author_meta('description'); ?>
                            </p>
                            <div class="flex flex-wrap items-center gap-6 text-gray-500 text-sm font-medium">
                                <span class="flex items-center space-x-2">
                                    <i class="fas fa-pen fa-fw"></i>
                                    <span><?php echo count_user_posts($author_id); ?> articles</span>
                                </span>
                                <span class="flex items-center space-x-2">
                                    <i class="fas fa-calendar-alt fa-fw"></i>
                                    <span>Member since <?php echo date('Y', strtotime(get_the_author_meta('user_registered'))); ?></span>
                                </span>
                                <a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>"
                                   class="text-[#3873CC] hover:underline font-semibold transition">
                                    View all articles →
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </article>

            <!-- Related Articles -->
            <section class="mt-20">
                <h2 class="text-3xl font-extrabold text-gray-900 mb-10 flex items-center space-x-3">
                    <i class="fas fa-newspaper text-[#3873CC] text-3xl"></i>
                    <span>Related Articles</span>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    $related_args = [
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post__not_in' => [get_the_ID()],
                        'category__in' => wp_get_post_categories(get_the_ID()),
                        'orderby' => 'rand',
                    ];
                    $related_query = new WP_Query($related_args);

                    if ($related_query->have_posts()) :
                        while ($related_query->have_posts()) : $related_query->the_post(); ?>
                            <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                                <a href="<?php the_permalink(); ?>" class="block group">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover rounded-t-2xl group-hover:scale-105 transition-transform duration-500']); ?>
                                    <?php else : ?>
                                        <div class="w-full h-48 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center rounded-t-2xl">
                                            <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                        </div>
                                    <?php endif; ?>
                                    <div class="p-6">
                                        <?php
                                        $post_cats = get_the_category();
                                        if (!empty($post_cats)) {
                                            echo '<span class="inline-block px-3 py-1 mb-3 rounded-full text-xs font-semibold bg-[#EEFAF7] text-[#20C197] select-none">' . esc_html($post_cats[0]->name) . '</span>';
                                        }
                                        ?>
                                        <h3 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2 group-hover:text-[#3873CC] transition">
                                            <?php the_title(); ?>
                                        </h3>
                                        <p class="text-gray-600 text-sm line-clamp-2 mb-4">
                                            <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                                        </p>
                                        <div class="flex items-center text-sm text-gray-500 space-x-3 select-none">
                                            <span><?php echo get_the_date('M j, Y'); ?></span>
                                            <span>•</span>
                                            <span><?php echo primedoc_estimate_reading_time(); ?> min read</span>
                                        </div>
                                    </div>
                                </a>
                            </article>
                        <?php endwhile;
                        wp_reset_postdata();
                    else : ?>
                        <p class="col-span-full text-center text-gray-500">No related articles found.</p>
                    <?php endif; ?>
                </div>
            </section>

        <?php endwhile;
    else : ?>
        <p class="text-center text-gray-500 text-lg py-20">Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</main>

<!-- Reading Progress JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const progressBar = document.getElementById('reading-progress');
        const article = document.querySelector('article');

        if (progressBar && article) {
            window.addEventListener('scroll', function () {
                const articleTop = article.offsetTop;
                const articleHeight = article.offsetHeight;
                const windowHeight = window.innerHeight;
                const scrollTop = window.pageYOffset;

                const scrollPercentage = Math.min(
                    Math.max(
                        (scrollTop - articleTop + windowHeight) / (articleHeight + windowHeight),
                        0
                    ),
                    1
                );

                progressBar.style.width = (scrollPercentage * 100) + '%';
            });
        }
    });
</script>

<?php get_footer(); ?>