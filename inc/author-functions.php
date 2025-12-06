<?php
/**
 * Author Page Functions
 * 
 * @package PrimeDocBilling
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get author social media links
 */
function primedoc_get_author_social_links($author_id) {
    $social_links = array();
    
    // Get social media URLs
    $social_fields = array(
        'facebook' => array(
            'url' => get_the_author_meta('facebook', $author_id),
            'icon' => 'fab fa-facebook-f',
            'label' => 'Facebook'
        ),
        'twitter' => array(
            'url' => get_the_author_meta('twitter', $author_id),
            'icon' => 'fab fa-twitter',
            'label' => 'Twitter'
        ),
        'linkedin' => array(
            'url' => get_the_author_meta('linkedin', $author_id),
            'icon' => 'fab fa-linkedin-in',
            'label' => 'LinkedIn'
        ),
        'instagram' => array(
            'url' => get_the_author_meta('instagram', $author_id),
            'icon' => 'fab fa-instagram',
            'label' => 'Instagram'
        ),
        'youtube' => array(
            'url' => get_the_author_meta('youtube', $author_id),
            'icon' => 'fab fa-youtube',
            'label' => 'YouTube'
        ),
        'website' => array(
            'url' => get_the_author_meta('user_url', $author_id),
            'icon' => 'fas fa-globe',
            'label' => 'Website'
        )
    );
    
    foreach ($social_fields as $key => $field) {
        if (!empty($field['url'])) {
            $social_links[$key] = $field;
        }
    }
    
    return $social_links;
}

/**
 * Get author statistics
 */
function primedoc_get_author_stats($author_id) {
    $stats = array(
        'total_posts' => count_user_posts($author_id),
        'total_comments' => 0,
        'total_views' => 0,
        'years_writing' => 0
    );
    
    // Get all author posts
    $author_posts = get_posts(array(
        'author' => $author_id,
        'numberposts' => -1,
        'post_status' => 'publish'
    ));
    
    // Calculate stats
    foreach ($author_posts as $post) {
        // Comments count
        $comments = wp_count_comments($post->ID);
        $stats['total_comments'] += $comments->approved;
        
        // Views count (if using post views plugin)
        $views = get_post_meta($post->ID, 'post_views_count', true);
        $stats['total_views'] += $views ? intval($views) : 0;
    }
    
    // Calculate years writing
    if (!empty($author_posts)) {
        $first_post = get_posts(array(
            'author' => $author_id,
            'numberposts' => 1,
            'order' => 'ASC',
            'post_status' => 'publish'
        ));
        
        if ($first_post) {
            $first_date = strtotime($first_post[0]->post_date);
            $years = floor((current_time('timestamp') - $first_date) / (365 * 24 * 60 * 60));
            $stats['years_writing'] = $years > 0 ? $years : 1;
        }
    }
    
    return $stats;
}

/**
 * Estimate reading time for a post
 */
function primedoc_estimate_reading_time($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $content = get_post_field('post_content', $post_id);
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // 200 words per minute
    
    return max(1, $reading_time);
}

/**
 * Get post views count
 */
function primedoc_get_post_views($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $views = get_post_meta($post_id, 'post_views_count', true);
    return $views ? intval($views) : 0;
}

/**
 * Get post likes count
 */
function primedoc_get_post_likes($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $likes = get_post_meta($post_id, 'post_likes_count', true);
    return $likes ? intval($likes) : 0;
}

/**
 * Get author categories with post counts
 */
function primedoc_get_author_categories($author_id) {
    $categories = get_categories(array(
        'hide_empty' => true,
        'object_ids' => wp_list_pluck(get_posts(array(
            'author' => $author_id,
            'numberposts' => -1,
            'post_status' => 'publish'
        )), 'ID')
    ));
    
    return $categories;
}

/**
 * Get author tags with post counts
 */
function primedoc_get_author_tags($author_id) {
    $tags = get_tags(array(
        'hide_empty' => true,
        'object_ids' => wp_list_pluck(get_posts(array(
            'author' => $author_id,
            'numberposts' => -1,
            'post_status' => 'publish'
        )), 'ID'),
        'number' => 20,
        'orderby' => 'count',
        'order' => 'DESC'
    ));
    
    return $tags;
}

/**
 * AJAX handler for filtering author posts
 */
function primedoc_filter_author_posts() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'filter_posts_nonce')) {
        wp_die('Security check failed');
    }
    
    $author_id = intval($_POST['author_id']);
    $search = sanitize_text_field($_POST['search']);
    $category = sanitize_text_field($_POST['category']);
    $sort = sanitize_text_field($_POST['sort']);
    
    $args = array(
        'author' => $author_id,
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 9
    );
    
    // Add search parameter
    if (!empty($search)) {
        $args['s'] = $search;
    }
    
    // Add category parameter
    if (!empty($category)) {
        $args['category_name'] = $category;
    }
    
    // Add sorting parameter
    switch ($sort) {
        case 'date_asc':
            $args['orderby'] = 'date';
            $args['order'] = 'ASC';
            break;
        case 'title':
            $args['orderby'] = 'title';
            $args['order'] = 'ASC';
            break;
        case 'comment_count':
            $args['orderby'] = 'comment_count';
            $args['order'] = 'DESC';
            break;
        default:
            $args['orderby'] = 'date';
            $args['order'] = 'DESC';
            break;
    }
    
    $query = new WP_Query($args);
    
    ob_start();
    
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            get_template_part('template-parts/content', 'author-post');
        endwhile;
    else :
        echo '<div class="col-span-full text-center py-16">
                <div class="max-w-md mx-auto">
                    <i class="fas fa-search text-6xl text-gray-300 mb-4"></i>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">No Articles Found</h3>
                    <p class="text-gray-600">No articles match your search criteria.</p>
                </div>
            </div>';
    endif;
    
    $posts_html = ob_get_clean();
    
    wp_reset_postdata();
    
    wp_send_json_success(array(
        'posts' => $posts_html
    ));
}
add_action('wp_ajax_filter_author_posts', 'primedoc_filter_author_posts');
add_action('wp_ajax_nopriv_filter_author_posts', 'primedoc_filter_author_posts');

/**
 * AJAX handler for loading more author posts
 */
function primedoc_load_more_author_posts() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['nonce'], 'load_more_posts_nonce')) {
        wp_die('Security check failed');
    }
    
    $author_id = intval($_POST['author_id']);
    $page = intval($_POST['page']);
    
    $args = array(
        'author' => $author_id,
        'post_type' => 'post',
        'post_status' => 'publish',
        'paged' => $page,
        'posts_per_page' => 9
    );
    
    $query = new WP_Query($args);
    
    ob_start();
    
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            get_template_part('template-parts/content', 'author-post');
        endwhile;
    endif;
    
    $posts_html = ob_get_clean();
    
    wp_reset_postdata();
    
    wp_send_json_success(array(
        'posts' => $posts_html
    ));
}
add_action('wp_ajax_load_more_author_posts', 'primedoc_load_more_author_posts');
add_action('wp_ajax_nopriv_load_more_author_posts', 'primedoc_load_more_author_posts');

/**
 * Add author social fields to user profile
 */
function primedoc_add_author_social_fields($user) {
    ?>
    <h3><?php _e('Author Social Profiles', 'primedocbilling'); ?></h3>
    
    <table class="form-table">
        <tr>
            <th><label for="facebook"><?php _e('Facebook URL', 'primedocbilling'); ?></label></th>
            <td>
                <input type="url" name="facebook" id="facebook" value="<?php echo esc_attr(get_the_author_meta('facebook', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="twitter"><?php _e('Twitter URL', 'primedocbilling'); ?></label></th>
            <td>
                <input type="url" name="twitter" id="twitter" value="<?php echo esc_attr(get_the_author_meta('twitter', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="linkedin"><?php _e('LinkedIn URL', 'primedocbilling'); ?></label></th>
            <td>
                <input type="url" name="linkedin" id="linkedin" value="<?php echo esc_attr(get_the_author_meta('linkedin', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="instagram"><?php _e('Instagram URL', 'primedocbilling'); ?></label></th>
            <td>
                <input type="url" name="instagram" id="instagram" value="<?php echo esc_attr(get_the_author_meta('instagram', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="youtube"><?php _e('YouTube URL', 'primedocbilling'); ?></label></th>
            <td>
                <input type="url" name="youtube" id="youtube" value="<?php echo esc_attr(get_the_author_meta('youtube', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
    </table>
    <?php
}
add_action('show_user_profile', 'primedoc_add_author_social_fields');
add_action('edit_user_profile', 'primedoc_add_author_social_fields');

/**
 * Save author social fields
 */
function primedoc_save_author_social_fields($user_id) {
    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }
    
    $social_fields = array('facebook', 'twitter', 'linkedin', 'instagram', 'youtube');
    
    foreach ($social_fields as $field) {
        if (isset($_POST[$field])) {
            update_user_meta($user_id, $field, esc_url_raw($_POST[$field]));
        }
    }
}
add_action('personal_options_update', 'primedoc_save_author_social_fields');
add_action('edit_user_profile_update', 'primedoc_save_author_social_fields');
