<?php
/**
 * Service Page Custom Fields
 * 
 * Provides custom meta boxes for managing service page content from WordPress admin.
 * This allows content to be managed through the dashboard instead of hardcoding in templates.
 *
 * @package primedocbilling
 */

/**
 * Add Service Page meta boxes to pages.
 */
function primedocbilling_add_service_page_meta_boxes() {
	add_meta_box(
		'primedocbilling_service_page_meta_box',
		esc_html__( 'Service Page Content', 'primedocbilling' ),
		'primedocbilling_service_page_meta_box_callback',
		'page',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'primedocbilling_add_service_page_meta_boxes' );

/**
 * Service Page Meta Box Callback
 */
function primedocbilling_service_page_meta_box_callback( $post ) {
	// Add nonce for security
	wp_nonce_field( 'primedocbilling_service_page_meta_box', 'primedocbilling_service_page_meta_box_nonce' );
	
	// Get existing values
	$hero_title = get_post_meta( $post->ID, '_service_hero_title', true );
	$hero_description = get_post_meta( $post->ID, '_service_hero_description', true );
	$hero_image = get_post_meta( $post->ID, '_service_hero_image', true );
	$hero_button_text = get_post_meta( $post->ID, '_service_hero_button_text', true );
	$hero_button_url = get_post_meta( $post->ID, '_service_hero_button_url', true );
	$breadcrumb_text = get_post_meta( $post->ID, '_service_breadcrumb_text', true );
	$breadcrumb_url = get_post_meta( $post->ID, '_service_breadcrumb_url', true );
	
	// Sections (stored as JSON)
	$sections = get_post_meta( $post->ID, '_service_sections', true );
	if ( empty( $sections ) ) {
		$sections = array();
	} else {
		$sections = json_decode( $sections, true );
	}
	
	?>
	<div class="primedocbilling-service-page-meta-box">
		<style>
			.primedocbilling-service-page-meta-box .field-group {
				margin-bottom: 20px;
			}
			.primedocbilling-service-page-meta-box label {
				display: block;
				font-weight: 600;
				margin-bottom: 5px;
			}
			.primedocbilling-service-page-meta-box input[type="text"],
			.primedocbilling-service-page-meta-box input[type="url"],
			.primedocbilling-service-page-meta-box textarea {
				width: 100%;
				padding: 8px;
			}
			.primedocbilling-service-page-meta-box textarea {
				height: 100px;
			}
			.section-item {
				border: 1px solid #ddd;
				padding: 15px;
				margin-bottom: 15px;
				background: #f9f9f9;
			}
			.section-item h4 {
				margin-top: 0;
			}
		</style>
		
		<h3>Hero Section</h3>
		
		<div class="field-group">
			<label for="service_hero_title">Hero Title</label>
			<input type="text" id="service_hero_title" name="service_hero_title" value="<?php echo esc_attr( $hero_title ); ?>" placeholder="Get Professional [Service Name] in New York" />
		</div>
		
		<div class="field-group">
			<label for="service_hero_description">Hero Description</label>
			<textarea id="service_hero_description" name="service_hero_description" placeholder="Enter hero section description..."><?php echo esc_textarea( $hero_description ); ?></textarea>
		</div>
		
		<div class="field-group">
			<label for="service_hero_image">Hero Image URL</label>
			<input type="url" id="service_hero_image" name="service_hero_image" value="<?php echo esc_url( $hero_image ); ?>" placeholder="https://example.com/image.jpg" />
			<button type="button" class="button" id="service_hero_image_button">Select Image</button>
		</div>
		
		<div class="field-group">
			<label for="service_hero_button_text">Hero Button Text</label>
			<input type="text" id="service_hero_button_text" name="service_hero_button_text" value="<?php echo esc_attr( $hero_button_text ); ?>" placeholder="Book a Demo" />
		</div>
		
		<div class="field-group">
			<label for="service_hero_button_url">Hero Button URL</label>
			<input type="url" id="service_hero_button_url" name="service_hero_button_url" value="<?php echo esc_url( $hero_button_url ); ?>" placeholder="https://primedocbilling.com/schedule-demo/" />
		</div>
		
		<div class="field-group">
			<label for="service_breadcrumb_text">Breadcrumb Text (optional)</label>
			<input type="text" id="service_breadcrumb_text" name="service_breadcrumb_text" value="<?php echo esc_attr( $breadcrumb_text ); ?>" placeholder="New York" />
		</div>
		
		<div class="field-group">
			<label for="service_breadcrumb_url">Breadcrumb URL (optional)</label>
			<input type="url" id="service_breadcrumb_url" name="service_breadcrumb_url" value="<?php echo esc_url( $breadcrumb_url ); ?>" placeholder="/newyork/" />
		</div>
		
		<h3>Content Sections</h3>
		<p>Add multiple content sections. Each section can have a title, description, and optional items/features.</p>
		
		<div id="service-sections-container">
			<?php if ( ! empty( $sections ) && is_array( $sections ) ) : ?>
				<?php foreach ( $sections as $index => $section ) : ?>
					<div class="section-item" data-section-index="<?php echo $index; ?>">
						<h4>Section <?php echo $index + 1; ?></h4>
						<div class="field-group">
							<label>Section Title</label>
							<input type="text" name="service_sections[<?php echo $index; ?>][title]" value="<?php echo esc_attr( $section['title'] ?? '' ); ?>" />
						</div>
						<div class="field-group">
							<label>Section Description</label>
							<textarea name="service_sections[<?php echo $index; ?>][description]"><?php echo esc_textarea( $section['description'] ?? '' ); ?></textarea>
						</div>
						<div class="field-group">
							<label>Section Items (one per line)</label>
							<textarea name="service_sections[<?php echo $index; ?>][items]" placeholder="Item 1&#10;Item 2&#10;Item 3"><?php echo esc_textarea( isset( $section['items'] ) ? implode( "\n", $section['items'] ) : '' ); ?></textarea>
						</div>
						<button type="button" class="button remove-section">Remove Section</button>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
		
		<button type="button" class="button button-primary" id="add-section">Add Section</button>
		
		<script>
		jQuery(document).ready(function($) {
			var sectionIndex = <?php echo ! empty( $sections ) ? count( $sections ) : 0; ?>;
			
			$('#add-section').on('click', function() {
				var sectionHtml = '<div class="section-item" data-section-index="' + sectionIndex + '">' +
					'<h4>Section ' + (sectionIndex + 1) + '</h4>' +
					'<div class="field-group">' +
					'<label>Section Title</label>' +
					'<input type="text" name="service_sections[' + sectionIndex + '][title]" />' +
					'</div>' +
					'<div class="field-group">' +
					'<label>Section Description</label>' +
					'<textarea name="service_sections[' + sectionIndex + '][description]"></textarea>' +
					'</div>' +
					'<div class="field-group">' +
					'<label>Section Items (one per line)</label>' +
					'<textarea name="service_sections[' + sectionIndex + '][items]" placeholder="Item 1&#10;Item 2&#10;Item 3"></textarea>' +
					'</div>' +
					'<button type="button" class="button remove-section">Remove Section</button>' +
					'</div>';
				
				$('#service-sections-container').append(sectionHtml);
				sectionIndex++;
			});
			
			$(document).on('click', '.remove-section', function() {
				$(this).closest('.section-item').remove();
			});
		});
		</script>
	</div>
	<?php
}

/**
 * Save Service Page meta box data.
 */
function primedocbilling_save_service_page_meta_box( $post_id ) {
	// Check nonce
	if ( ! isset( $_POST['primedocbilling_service_page_meta_box_nonce'] ) ||
		 ! wp_verify_nonce( $_POST['primedocbilling_service_page_meta_box_nonce'], 'primedocbilling_service_page_meta_box' ) ) {
		return;
	}
	
	// Check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	
	// Check permissions
	if ( ! current_user_can( 'edit_page', $post_id ) ) {
		return;
	}
	
	// Save hero fields
	if ( isset( $_POST['service_hero_title'] ) ) {
		update_post_meta( $post_id, '_service_hero_title', sanitize_text_field( $_POST['service_hero_title'] ) );
	}
	
	if ( isset( $_POST['service_hero_description'] ) ) {
		update_post_meta( $post_id, '_service_hero_description', sanitize_textarea_field( $_POST['service_hero_description'] ) );
	}
	
	if ( isset( $_POST['service_hero_image'] ) ) {
		update_post_meta( $post_id, '_service_hero_image', esc_url_raw( $_POST['service_hero_image'] ) );
	}
	
	if ( isset( $_POST['service_hero_button_text'] ) ) {
		update_post_meta( $post_id, '_service_hero_button_text', sanitize_text_field( $_POST['service_hero_button_text'] ) );
	}
	
	if ( isset( $_POST['service_hero_button_url'] ) ) {
		update_post_meta( $post_id, '_service_hero_button_url', esc_url_raw( $_POST['service_hero_button_url'] ) );
	}
	
	if ( isset( $_POST['service_breadcrumb_text'] ) ) {
		update_post_meta( $post_id, '_service_breadcrumb_text', sanitize_text_field( $_POST['service_breadcrumb_text'] ) );
	}
	
	if ( isset( $_POST['service_breadcrumb_url'] ) ) {
		update_post_meta( $post_id, '_service_breadcrumb_url', esc_url_raw( $_POST['service_breadcrumb_url'] ) );
	}
	
	// Save sections
	if ( isset( $_POST['service_sections'] ) && is_array( $_POST['service_sections'] ) ) {
		$sections = array();
		foreach ( $_POST['service_sections'] as $section ) {
			$processed_section = array(
				'title' => sanitize_text_field( $section['title'] ?? '' ),
				'description' => sanitize_textarea_field( $section['description'] ?? '' ),
			);
			
			// Process items (split by newlines)
			if ( ! empty( $section['items'] ) ) {
				$items = explode( "\n", $section['items'] );
				$processed_section['items'] = array_map( 'trim', array_filter( $items ) );
			} else {
				$processed_section['items'] = array();
			}
			
			$sections[] = $processed_section;
		}
		update_post_meta( $post_id, '_service_sections', wp_json_encode( $sections ) );
	} else {
		delete_post_meta( $post_id, '_service_sections' );
	}
}
add_action( 'save_post', 'primedocbilling_save_service_page_meta_box' );

