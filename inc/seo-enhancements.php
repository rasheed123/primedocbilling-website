<?php
/**
 * SEO Enhancements for Prime Doc Billing Theme
 * 
 * Provides custom meta boxes and admin enhancements for SEO team
 * to easily manage pages and blog posts from WordPress admin.
 *
 * @package primedocbilling
 */

/**
 * Add SEO meta boxes to posts and pages.
 */
function primedocbilling_add_seo_meta_boxes() {
	$post_types = array( 'post', 'page' );
	
	foreach ( $post_types as $post_type ) {
		add_meta_box(
			'primedocbilling_seo_meta_box',
			esc_html__( 'SEO Settings', 'primedocbilling' ),
			'primedocbilling_seo_meta_box_callback',
			$post_type,
			'normal',
			'high'
		);
	}
}
add_action( 'add_meta_boxes', 'primedocbilling_add_seo_meta_boxes' );

/**
 * SEO Meta Box Callback
 */
function primedocbilling_seo_meta_box_callback( $post ) {
	// Add nonce for security
	wp_nonce_field( 'primedocbilling_seo_meta_box', 'primedocbilling_seo_meta_box_nonce' );
	
	// Get existing values
	$meta_title = get_post_meta( $post->ID, '_seo_meta_title', true );
	$meta_description = get_post_meta( $post->ID, '_seo_meta_description', true );
	$meta_keywords = get_post_meta( $post->ID, '_seo_meta_keywords', true );
	$og_title = get_post_meta( $post->ID, '_seo_og_title', true );
	$og_description = get_post_meta( $post->ID, '_seo_og_description', true );
	$og_image = get_post_meta( $post->ID, '_seo_og_image', true );
	$twitter_title = get_post_meta( $post->ID, '_seo_twitter_title', true );
	$twitter_description = get_post_meta( $post->ID, '_seo_twitter_description', true );
	$twitter_image = get_post_meta( $post->ID, '_seo_twitter_image', true );
	$canonical_url = get_post_meta( $post->ID, '_seo_canonical_url', true );
	$noindex = get_post_meta( $post->ID, '_seo_noindex', true );
	$nofollow = get_post_meta( $post->ID, '_seo_nofollow', true );
	
	?>
	<div class="primedocbilling-seo-meta-box">
		<style>
			.primedocbilling-seo-meta-box .form-table th { width: 200px; }
			.primedocbilling-seo-meta-box input[type="text"],
			.primedocbilling-seo-meta-box textarea { width: 100%; max-width: 600px; }
			.primedocbilling-seo-meta-box textarea { min-height: 80px; }
			.primedocbilling-seo-meta-box .char-count { color: #666; font-size: 12px; margin-top: 5px; }
			.primedocbilling-seo-meta-box .char-count.warning { color: #d63638; }
			.primedocbilling-seo-meta-box .image-preview { max-width: 200px; margin-top: 10px; }
		</style>
		
		<h3><?php esc_html_e( 'Meta Tags', 'primedocbilling' ); ?></h3>
		<table class="form-table">
			<tr>
				<th><label for="seo_meta_title"><?php esc_html_e( 'Meta Title', 'primedocbilling' ); ?></label></th>
				<td>
					<input type="text" id="seo_meta_title" name="seo_meta_title" value="<?php echo esc_attr( $meta_title ); ?>" placeholder="<?php esc_attr_e( 'Enter meta title (recommended: 50-60 characters)', 'primedocbilling' ); ?>" />
					<div class="char-count" id="meta_title_count"><?php echo esc_html( strlen( $meta_title ) ); ?>/60</div>
					<p class="description"><?php esc_html_e( 'The title that appears in search engine results. If left empty, the post title will be used.', 'primedocbilling' ); ?></p>
				</td>
			</tr>
			<tr>
				<th><label for="seo_meta_description"><?php esc_html_e( 'Meta Description', 'primedocbilling' ); ?></label></th>
				<td>
					<textarea id="seo_meta_description" name="seo_meta_description" placeholder="<?php esc_attr_e( 'Enter meta description (recommended: 150-160 characters)', 'primedocbilling' ); ?>"><?php echo esc_textarea( $meta_description ); ?></textarea>
					<div class="char-count" id="meta_description_count"><?php echo esc_html( strlen( $meta_description ) ); ?>/160</div>
					<p class="description"><?php esc_html_e( 'The description that appears in search engine results. If left empty, the excerpt will be used.', 'primedocbilling' ); ?></p>
				</td>
			</tr>
			<tr>
				<th><label for="seo_meta_keywords"><?php esc_html_e( 'Meta Keywords', 'primedocbilling' ); ?></label></th>
				<td>
					<input type="text" id="seo_meta_keywords" name="seo_meta_keywords" value="<?php echo esc_attr( $meta_keywords ); ?>" placeholder="<?php esc_attr_e( 'keyword1, keyword2, keyword3', 'primedocbilling' ); ?>" />
					<p class="description"><?php esc_html_e( 'Comma-separated keywords (optional - not used by major search engines but may be useful for internal tracking).', 'primedocbilling' ); ?></p>
				</td>
			</tr>
		</table>
		
		<h3><?php esc_html_e( 'Open Graph (Facebook)', 'primedocbilling' ); ?></h3>
		<table class="form-table">
			<tr>
				<th><label for="seo_og_title"><?php esc_html_e( 'OG Title', 'primedocbilling' ); ?></label></th>
				<td>
					<input type="text" id="seo_og_title" name="seo_og_title" value="<?php echo esc_attr( $og_title ); ?>" />
					<p class="description"><?php esc_html_e( 'Title for Facebook shares. If left empty, meta title will be used.', 'primedocbilling' ); ?></p>
				</td>
			</tr>
			<tr>
				<th><label for="seo_og_description"><?php esc_html_e( 'OG Description', 'primedocbilling' ); ?></label></th>
				<td>
					<textarea id="seo_og_description" name="seo_og_description"><?php echo esc_textarea( $og_description ); ?></textarea>
					<p class="description"><?php esc_html_e( 'Description for Facebook shares. If left empty, meta description will be used.', 'primedocbilling' ); ?></p>
				</td>
			</tr>
			<tr>
				<th><label for="seo_og_image"><?php esc_html_e( 'OG Image URL', 'primedocbilling' ); ?></label></th>
				<td>
					<input type="url" id="seo_og_image" name="seo_og_image" value="<?php echo esc_url( $og_image ); ?>" />
					<button type="button" class="button" id="og_image_upload_btn"><?php esc_html_e( 'Upload Image', 'primedocbilling' ); ?></button>
					<?php if ( $og_image ) : ?>
						<img src="<?php echo esc_url( $og_image ); ?>" class="image-preview" alt="OG Image Preview" />
					<?php endif; ?>
					<p class="description"><?php esc_html_e( 'Image for Facebook shares (recommended: 1200x630px). If left empty, featured image will be used.', 'primedocbilling' ); ?></p>
				</td>
			</tr>
		</table>
		
		<h3><?php esc_html_e( 'Twitter Card', 'primedocbilling' ); ?></h3>
		<table class="form-table">
			<tr>
				<th><label for="seo_twitter_title"><?php esc_html_e( 'Twitter Title', 'primedocbilling' ); ?></label></th>
				<td>
					<input type="text" id="seo_twitter_title" name="seo_twitter_title" value="<?php echo esc_attr( $twitter_title ); ?>" />
					<p class="description"><?php esc_html_e( 'Title for Twitter shares. If left empty, meta title will be used.', 'primedocbilling' ); ?></p>
				</td>
			</tr>
			<tr>
				<th><label for="seo_twitter_description"><?php esc_html_e( 'Twitter Description', 'primedocbilling' ); ?></label></th>
				<td>
					<textarea id="seo_twitter_description" name="seo_twitter_description"><?php echo esc_textarea( $twitter_description ); ?></textarea>
					<p class="description"><?php esc_html_e( 'Description for Twitter shares. If left empty, meta description will be used.', 'primedocbilling' ); ?></p>
				</td>
			</tr>
			<tr>
				<th><label for="seo_twitter_image"><?php esc_html_e( 'Twitter Image URL', 'primedocbilling' ); ?></label></th>
				<td>
					<input type="url" id="seo_twitter_image" name="seo_twitter_image" value="<?php echo esc_url( $twitter_image ); ?>" />
					<button type="button" class="button" id="twitter_image_upload_btn"><?php esc_html_e( 'Upload Image', 'primedocbilling' ); ?></button>
					<?php if ( $twitter_image ) : ?>
						<img src="<?php echo esc_url( $twitter_image ); ?>" class="image-preview" alt="Twitter Image Preview" />
					<?php endif; ?>
					<p class="description"><?php esc_html_e( 'Image for Twitter shares (recommended: 1200x675px). If left empty, featured image will be used.', 'primedocbilling' ); ?></p>
				</td>
			</tr>
		</table>
		
		<h3><?php esc_html_e( 'Advanced SEO', 'primedocbilling' ); ?></h3>
		<table class="form-table">
			<tr>
				<th><label for="seo_canonical_url"><?php esc_html_e( 'Canonical URL', 'primedocbilling' ); ?></label></th>
				<td>
					<input type="url" id="seo_canonical_url" name="seo_canonical_url" value="<?php echo esc_url( $canonical_url ); ?>" placeholder="<?php echo esc_url( get_permalink() ); ?>" />
					<p class="description"><?php esc_html_e( 'Canonical URL for this page. If left empty, the current page URL will be used.', 'primedocbilling' ); ?></p>
				</td>
			</tr>
			<tr>
				<th><?php esc_html_e( 'Robots Meta', 'primedocbilling' ); ?></th>
				<td>
					<label>
						<input type="checkbox" name="seo_noindex" value="1" <?php checked( $noindex, '1' ); ?> />
						<?php esc_html_e( 'Noindex (prevent search engines from indexing this page)', 'primedocbilling' ); ?>
					</label><br />
					<label>
						<input type="checkbox" name="seo_nofollow" value="1" <?php checked( $nofollow, '1' ); ?> />
						<?php esc_html_e( 'Nofollow (prevent search engines from following links on this page)', 'primedocbilling' ); ?>
					</label>
				</td>
			</tr>
		</table>
		
		<script>
		jQuery(document).ready(function($) {
			// Character counter for meta title
			$('#seo_meta_title').on('input', function() {
				var length = $(this).val().length;
				$('#meta_title_count').text(length + '/60');
				if (length > 60) {
					$('#meta_title_count').addClass('warning');
				} else {
					$('#meta_title_count').removeClass('warning');
				}
			});
			
			// Character counter for meta description
			$('#seo_meta_description').on('input', function() {
				var length = $(this).val().length;
				$('#meta_description_count').text(length + '/160');
				if (length > 160) {
					$('#meta_description_count').addClass('warning');
				} else {
					$('#meta_description_count').removeClass('warning');
				}
			});
			
			// Media uploader for OG image
			$('#og_image_upload_btn').on('click', function(e) {
				e.preventDefault();
				var image = wp.media({
					title: 'Select OG Image',
					multiple: false
				}).open().on('select', function() {
					var uploadedImage = image.state().get('selection').first();
					$('#seo_og_image').val(uploadedImage.toJSON().url);
					$('#seo_og_image').next('.image-preview').remove();
					$('#seo_og_image').after('<img src="' + uploadedImage.toJSON().url + '" class="image-preview" alt="OG Image Preview" />');
				});
			});
			
			// Media uploader for Twitter image
			$('#twitter_image_upload_btn').on('click', function(e) {
				e.preventDefault();
				var image = wp.media({
					title: 'Select Twitter Image',
					multiple: false
				}).open().on('select', function() {
					var uploadedImage = image.state().get('selection').first();
					$('#seo_twitter_image').val(uploadedImage.toJSON().url);
					$('#seo_twitter_image').next('.image-preview').remove();
					$('#seo_twitter_image').after('<img src="' + uploadedImage.toJSON().url + '" class="image-preview" alt="Twitter Image Preview" />');
				});
			});
		});
		</script>
	</div>
	<?php
}

/**
 * Save SEO meta box data.
 */
function primedocbilling_save_seo_meta_box( $post_id ) {
	// Check nonce
	if ( ! isset( $_POST['primedocbilling_seo_meta_box_nonce'] ) || 
		 ! wp_verify_nonce( $_POST['primedocbilling_seo_meta_box_nonce'], 'primedocbilling_seo_meta_box' ) ) {
		return;
	}
	
	// Check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	
	// Check permissions
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	
	// Save meta fields
	$fields = array(
		'seo_meta_title' => '_seo_meta_title',
		'seo_meta_description' => '_seo_meta_description',
		'seo_meta_keywords' => '_seo_meta_keywords',
		'seo_og_title' => '_seo_og_title',
		'seo_og_description' => '_seo_og_description',
		'seo_og_image' => '_seo_og_image',
		'seo_twitter_title' => '_seo_twitter_title',
		'seo_twitter_description' => '_seo_twitter_description',
		'seo_twitter_image' => '_seo_twitter_image',
		'seo_canonical_url' => '_seo_canonical_url',
	);
	
	foreach ( $fields as $field => $meta_key ) {
		if ( isset( $_POST[ $field ] ) ) {
			$value = sanitize_text_field( $_POST[ $field ] );
			if ( $field === 'seo_meta_description' || $field === 'seo_og_description' || $field === 'seo_twitter_description' ) {
				$value = sanitize_textarea_field( $_POST[ $field ] );
			} elseif ( $field === 'seo_og_image' || $field === 'seo_twitter_image' || $field === 'seo_canonical_url' ) {
				$value = esc_url_raw( $_POST[ $field ] );
			}
			update_post_meta( $post_id, $meta_key, $value );
		} else {
			delete_post_meta( $post_id, $meta_key );
		}
	}
	
	// Save checkboxes
	update_post_meta( $post_id, '_seo_noindex', isset( $_POST['seo_noindex'] ) ? '1' : '' );
	update_post_meta( $post_id, '_seo_nofollow', isset( $_POST['seo_nofollow'] ) ? '1' : '' );
}
add_action( 'save_post', 'primedocbilling_save_seo_meta_box' );

/**
 * Output SEO meta tags in head.
 */
function primedocbilling_output_seo_meta_tags() {
	if ( ! is_singular() ) {
		return;
	}
	
	global $post;
	if ( ! $post ) {
		return;
	}
	
	// Get meta values
	$meta_title = get_post_meta( $post->ID, '_seo_meta_title', true );
	$meta_description = get_post_meta( $post->ID, '_seo_meta_description', true );
	$meta_keywords = get_post_meta( $post->ID, '_seo_meta_keywords', true );
	$og_title = get_post_meta( $post->ID, '_seo_og_title', true );
	$og_description = get_post_meta( $post->ID, '_seo_og_description', true );
	$og_image = get_post_meta( $post->ID, '_seo_og_image', true );
	$twitter_title = get_post_meta( $post->ID, '_seo_twitter_title', true );
	$twitter_description = get_post_meta( $post->ID, '_seo_twitter_description', true );
	$twitter_image = get_post_meta( $post->ID, '_seo_twitter_image', true );
	$canonical_url = get_post_meta( $post->ID, '_seo_canonical_url', true );
	$noindex = get_post_meta( $post->ID, '_seo_noindex', true );
	$nofollow = get_post_meta( $post->ID, '_seo_nofollow', true );
	
	// Fallbacks
	if ( empty( $meta_title ) ) {
		$meta_title = get_the_title();
	}
	if ( empty( $meta_description ) ) {
		$meta_description = get_the_excerpt() ? get_the_excerpt() : wp_trim_words( get_the_content(), 30 );
	}
	if ( empty( $og_title ) ) {
		$og_title = $meta_title;
	}
	if ( empty( $og_description ) ) {
		$og_description = $meta_description;
	}
	if ( empty( $og_image ) && has_post_thumbnail() ) {
		$og_image = get_the_post_thumbnail_url( $post->ID, 'large' );
	}
	if ( empty( $twitter_title ) ) {
		$twitter_title = $meta_title;
	}
	if ( empty( $twitter_description ) ) {
		$twitter_description = $meta_description;
	}
	if ( empty( $twitter_image ) && has_post_thumbnail() ) {
		$twitter_image = get_the_post_thumbnail_url( $post->ID, 'large' );
	}
	if ( empty( $canonical_url ) ) {
		$canonical_url = get_permalink();
	}
	
	// Output meta tags
	echo "\n<!-- Prime Doc Billing SEO Meta Tags -->\n";
	
	// Meta description
	if ( ! empty( $meta_description ) ) {
		echo '<meta name="description" content="' . esc_attr( $meta_description ) . '" />' . "\n";
	}
	
	// Meta keywords (optional)
	if ( ! empty( $meta_keywords ) ) {
		echo '<meta name="keywords" content="' . esc_attr( $meta_keywords ) . '" />' . "\n";
	}
	
	// Robots meta
	$robots = array();
	if ( $noindex ) {
		$robots[] = 'noindex';
	}
	if ( $nofollow ) {
		$robots[] = 'nofollow';
	}
	if ( ! empty( $robots ) ) {
		echo '<meta name="robots" content="' . esc_attr( implode( ', ', $robots ) ) . '" />' . "\n";
	}
	
	// Canonical URL
	echo '<link rel="canonical" href="' . esc_url( $canonical_url ) . '" />' . "\n";
	
	// Open Graph tags
	echo '<meta property="og:title" content="' . esc_attr( $og_title ) . '" />' . "\n";
	echo '<meta property="og:description" content="' . esc_attr( $og_description ) . '" />' . "\n";
	echo '<meta property="og:url" content="' . esc_url( get_permalink() ) . '" />' . "\n";
	echo '<meta property="og:type" content="' . ( is_single() ? 'article' : 'website' ) . '" />' . "\n";
	if ( ! empty( $og_image ) ) {
		echo '<meta property="og:image" content="' . esc_url( $og_image ) . '" />' . "\n";
	}
	
	// Twitter Card tags
	echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
	echo '<meta name="twitter:title" content="' . esc_attr( $twitter_title ) . '" />' . "\n";
	echo '<meta name="twitter:description" content="' . esc_attr( $twitter_description ) . '" />' . "\n";
	if ( ! empty( $twitter_image ) ) {
		echo '<meta name="twitter:image" content="' . esc_url( $twitter_image ) . '" />' . "\n";
	}
	
	echo "<!-- End Prime Doc Billing SEO Meta Tags -->\n\n";
}
add_action( 'wp_head', 'primedocbilling_output_seo_meta_tags', 1 );

/**
 * Add custom columns to posts/pages list for SEO visibility.
 */
function primedocbilling_add_seo_columns( $columns ) {
	$new_columns = array();
	foreach ( $columns as $key => $value ) {
		$new_columns[ $key ] = $value;
		if ( $key === 'title' ) {
			$new_columns['seo_title'] = esc_html__( 'SEO Title', 'primedocbilling' );
			$new_columns['seo_description'] = esc_html__( 'SEO Description', 'primedocbilling' );
		}
	}
	return $new_columns;
}
add_filter( 'manage_posts_columns', 'primedocbilling_add_seo_columns' );
add_filter( 'manage_pages_columns', 'primedocbilling_add_seo_columns' );

/**
 * Populate SEO columns in posts/pages list.
 */
function primedocbilling_populate_seo_columns( $column, $post_id ) {
	switch ( $column ) {
		case 'seo_title':
			$seo_title = get_post_meta( $post_id, '_seo_meta_title', true );
			if ( ! empty( $seo_title ) ) {
				echo esc_html( $seo_title );
			} else {
				echo '<span style="color: #999;">' . esc_html__( 'Not set', 'primedocbilling' ) . '</span>';
			}
			break;
		case 'seo_description':
			$seo_description = get_post_meta( $post_id, '_seo_meta_description', true );
			if ( ! empty( $seo_description ) ) {
				echo esc_html( wp_trim_words( $seo_description, 10 ) );
			} else {
				echo '<span style="color: #999;">' . esc_html__( 'Not set', 'primedocbilling' ) . '</span>';
			}
			break;
	}
}
add_action( 'manage_posts_custom_column', 'primedocbilling_populate_seo_columns', 10, 2 );
add_action( 'manage_pages_custom_column', 'primedocbilling_populate_seo_columns', 10, 2 );

/**
 * Make SEO columns sortable (optional enhancement).
 */
function primedocbilling_make_seo_columns_sortable( $columns ) {
	$columns['seo_title'] = 'seo_title';
	return $columns;
}
add_filter( 'manage_edit-post_sortable_columns', 'primedocbilling_make_seo_columns_sortable' );
add_filter( 'manage_edit-page_sortable_columns', 'primedocbilling_make_seo_columns_sortable' );

