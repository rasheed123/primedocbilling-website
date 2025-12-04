<?php
/**
 * primedocbilling functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package primedocbilling
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function primedocbilling_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on primedocbilling, use a find and replace
		* to change 'primedocbilling' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'primedocbilling', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'primedocbilling' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'primedocbilling_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'primedocbilling_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function primedocbilling_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'primedocbilling_content_width', 640 );
}
add_action( 'after_setup_theme', 'primedocbilling_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function primedocbilling_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'primedocbilling' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'primedocbilling' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'primedocbilling_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function primedocbilling_scripts() {
	
	// Load stylesheets
	wp_enqueue_style( 'primedocbilling-tailwind-style', get_template_directory_uri(). '/assets/css/tailwind.prod.min.css', array(), NULL );
	//wp_enqueue_style( 'primedocbilling-aos-style', '//cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css', array(), NULL );
	wp_enqueue_style( 'primedocbilling-aos-style', get_template_directory_uri(). '/assets/css/aos.css', array(), NULL );
	wp_enqueue_style( 'primedocbilling-slick-style', get_template_directory_uri().'/assets/css/plugins/slick.1.8.1.min.css', array(), NULL );
	wp_enqueue_style( 'primedocbilling-main-style', get_stylesheet_uri(), array(), NULL );
	wp_enqueue_style( 'primedocbilling-offer-card-enhancements', get_template_directory_uri() . '/offer-card-enhancements.css', array(), NULL );
	wp_enqueue_style( 'primedocbilling-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), NULL );
	//wp_enqueue_style( 'primedocbilling-fontawesome', get_template_directory_uri(). '/assets/css/all.min.css', array(), NULL );
	wp_enqueue_style( 'primedocbilling-googlefonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&amp;display=swap', array(), NULL );
	//wp_enqueue_style( 'primedocbilling-fontawesome', get_template_directory_uri(). '/assets/css/css2.css', array(), NULL );
	// Load scripts 
	wp_enqueue_script( 'primedocbilling-jquery-js', get_template_directory_uri() . '/assets/js/vendors/jquery-3.7.0.min.js', array(), NULL, true );
	wp_enqueue_script( 'primedocbilling-slick-js', get_template_directory_uri() . '/assets/js/plugins/slick.1.8.1.min.js', array(), NULL, true );
	wp_enqueue_script( 'primedocbilling-aos-js', '//cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), NULL, true );
	wp_enqueue_script( 'primedocbilling-twelements-js', '//cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js', array(), NULL, true );
	wp_enqueue_script( 'primedocbilling-tailwind-js', get_template_directory_uri() . '/assets/js/bundle.js', array(), NULL, false );
	wp_enqueue_script( 'primedocbilling-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), NULL, true );
	wp_enqueue_script( 'primedocbilling-tailwind-script', '//cdn.tailwindcss.com', array(), NULL, true);

}
add_action( 'wp_enqueue_scripts', 'primedocbilling_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load author page functions
 */
require get_template_directory() . '/inc/author-functions.php';

/**
 * Use standard WordPress category structure
 * No custom category base - use default /category/
 */

/**
 * Flush rewrite rules to reset to standard WordPress structure
 */
function flush_rewrite_rules_on_activation() {
    global $wp_rewrite;
    $wp_rewrite->set_category_base('category');
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'flush_rewrite_rules_on_activation');

/**
 * Reset category base to default on theme switch
 */
function reset_category_base() {
    global $wp_rewrite;
    $wp_rewrite->set_category_base('category');
    flush_rewrite_rules();
}
add_action('init', 'reset_category_base', 99);

function add_custom_schema_markup() {
    if ( is_page('medical-billing') ) {
        ?>
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["MedicalBusiness", "Organization"],
      "@id": "https://primedocbilling.com/#organization",
      "name": "Prime Doc Billing LLC",
      "url": "https://primedocbilling.com",
      "logo": "https://primedocbilling.com/wp-content/uploads/2025/02/Untitled.webp",
      "image": "https://primedocbilling.com/wp-content/uploads/2025/02/Untitled.webp",
      "description": "Prime Doc Billing LLC is a trusted medical billing partner serving healthcare providers across the USA. We provide complete revenue cycle management solutions including credentialing, prior authorization, coding, claim submission, denial management, and practice management support. Our goal is to simplify billing workflows and improve collections through secure, compliant outsourcing services.",
      "telephone": "+1 347-650-2656",
      "email": "info@primedocbilling.com",
      "address": {
        "@type": "PostalAddress",
        "addressCountry": "US"
      },
      "areaServed": "USA",
      "sameAs": [
        "https://www.facebook.com/Primedocbilling",
        "https://x.com/PrimeDocBilling",
        "https://www.linkedin.com/company/prime-doc-billing-llc/",
        "https://www.instagram.com/primedocbillingllc/",
        "https://www.pinterest.com/primedocbillingllc"
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Prime Doc Billing Services",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Credentialing", "description": "Provider credentialing and payer enrollment services for healthcare organizations." }},
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Verification of Benefits", "description": "Insurance eligibility and benefits verification before patient visits." }},
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Prior Authorization", "description": "Handling pre-authorization requests for procedures, treatments, and imaging." }},
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Medical Coding", "description": "Accurate ICD-10 and CPT coding to ensure compliance and minimize claim denials." }},
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Medical Scribing", "description": "Virtual scribing services for real-time documentation and patient charting." }},
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Medical Billing", "description": "Comprehensive billing, claim submission, and payment posting services." }},
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Account Receivables", "description": "A/R management and claim follow-up to recover outstanding balances." }},
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Denial Management", "description": "Systematic analysis and resubmission of denied claims to maximize revenue." }},
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Practice Management", "description": "Operational and financial management support for medical practices." }},
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Revenue Cycle Management", "description": "End-to-end RCM services from patient registration to payment posting." }},
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Virtual Assistant", "description": "Remote administrative support for healthcare providers and billing tasks." }},
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Workers Compensation", "description": "Billing and claims processing for workers' compensation and accident-related cases." }}
        ]
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "Customer Support",
        "telephone": "+1 347-650-2656",
        "email": "info@primedocbilling.com",
        "areaServed": "USA",
        "availableLanguage": ["English"]
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://primedocbilling.com/#website",
      "url": "https://primedocbilling.com/",
      "name": "Prime Doc Billing LLC",
      "publisher": { "@id": "https://primedocbilling.com/#organization" },
      "inLanguage": "en-US"
    },
    {
      "@type": "WebPage",
      "@id": "https://primedocbilling.com/what-to-know-before-outsourcing-medical-billing-services/#webpage",
      "url": "https://primedocbilling.com/what-to-know-before-outsourcing-medical-billing-services/",
      "name": "What to Know Before Outsourcing Medical Billing Services",
      "description": "Learn key considerations before outsourcing your medical billing — including partner selection, compliance, and financial efficiency for healthcare practices.",
      "isPartOf": { "@id": "https://primedocbilling.com/#website" },
      "inLanguage": "en-US",
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://primedocbilling.com/" },
          { "@type": "ListItem", "position": 2, "name": "What to Know Before Outsourcing Medical Billing Services", "item": "https://primedocbilling.com/what-to-know-before-outsourcing-medical-billing-services/" }
        ]
      },
      "mainEntity": {
        "@type": "Article",
        "headline": "What to Know Before Outsourcing Medical Billing Services",
        "description": "An in-depth guide explaining what healthcare providers should know before outsourcing medical billing, including cost benefits, compliance considerations, and choosing the right partner.",
        "author": {
          "@type": "Organization",
          "name": "Prime Doc Billing LLC"
        },
        "publisher": {
          "@type": "Organization",
          "name": "Prime Doc Billing LLC",
          "logo": {
            "@type": "ImageObject",
            "url": "https://primedocbilling.com/wp-content/uploads/2025/02/Untitled.webp"
          }
        },
        "datePublished": "2025-11-07",
        "inLanguage": "en-US"
      }
    }
  ]
}
</script>
        <?php
    }
}
add_action('wp_head', 'add_custom_schema_markup');


function add_custom_schema_markup_for_medical_billing_process() {
    if ( is_page('process') ) {
        ?>
      <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://primedocbilling.com/medical-billing/process/#webpage",
      "url": "https://primedocbilling.com/medical-billing/process/",
      "name": "What is the medical billing process?",
      "description": "Discover how the medical billing process works from start to finish, ensuring accurate claims, reduced denials, and improved practice profitability.",
      "isPartOf": { "@id": "https://primedocbilling.com/#website" },
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://primedocbilling.com/" },
          { "@type": "ListItem", "position": 2, "name": "Medical Billing", "item": "https://primedocbilling.com/medical-billing/" },
          { "@type": "ListItem", "position": 3, "name": "Medical Billing Process", "item": "https://primedocbilling.com/medical-billing/process/" }
        ]
      },
      "inLanguage": "en-US",
      "mainEntity": {
        "@type": "Article",
        "@id": "https://primedocbilling.com/medical-billing/process/#article",
        "headline": "What is the medical billing process?",
        "description": "A complete explanation of the medical billing process covering each key step, ensuring accurate reimbursements, fewer denials, and a smooth revenue cycle.",
        "image": "https://primedocbilling.com/wpstaging/wp-content/uploads/2025/11/Medical-billing-process-.webp",
        "datePublished": "2025-11-17T08:00:00-05:00",
        "dateModified": "2025-11-17T08:00:00-05:00",
        "author": {
          "@type": "Organization",
          "@id": "https://primedocbilling.com/#organization",
          "name": "Prime Doc Billing LLC",
          "url": "https://primedocbilling.com/"
        },
        "publisher": {
          "@type": "Organization",
          "@id": "https://primedocbilling.com/#organization",
          "name": "Prime Doc Billing LLC",
          "url": "https://primedocbilling.com/",
          "logo": {
            "@type": "ImageObject",
            "url": "https://primedocbilling.com/wp-content/uploads/2025/02/Untitled.webp"
          }
        },
        "inLanguage": "en-US"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://primedocbilling.com/medical-billing/process/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What are the steps of the billing cycle?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The billing cycle generally includes eight steps: Patient Registration, Insurance Verification, Medical Coding, Charge Entry, Claim Creation and Submission, Payment Posting, Denial Management and Accounts Receivable Follow-up, and Reporting and Analysis."
          }
        },
        {
          "@type": "Question",
          "name": "Who handles medical billing in hospitals?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "In hospitals, the medical billing process is handled by the revenue cycle management (RCM) team. This includes medical billers, coders, insurance specialists, and billing professionals."
          }
        },
        {
          "@type": "Question",
          "name": "What delays claim processing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Common causes of claim processing delays include incorrect patient information, missing documentation, coding errors, mismatches, and other clerical issues."
          }
        },
        {
          "@type": "Question",
          "name": "What are clearinghouses?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Clearinghouses act as intermediaries between providers and payers. They receive claims, perform error checks, ensure accuracy, and forward them to the appropriate insurance companies."
          }
        }
      ]
    }
  ]
}
</script>
        <?php
    }
}
add_action('wp_head', 'add_custom_schema_markup_for_medical_billing_process');

function add_custom_schema_markup_for_medical_billing_outsourcing() {
    if ( is_page('outsourcing') ) {
        ?>
		<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://primedocbilling.com/medical-billing/outsourcing/#webpage",
      "url": "https://primedocbilling.com/medical-billing/outsourcing/",
      "name": "Medical billing outsourcing: What it means and how it works?",
      "description": "Learn what medical billing outsourcing means, how the outsourcing process works, and the key factors that determine whether it’s the right choice for your practice.",
      "isPartOf": { "@id": "https://primedocbilling.com/#website" },
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://primedocbilling.com/" },
          { "@type": "ListItem", "position": 2, "name": "Medical Billing", "item": "https://primedocbilling.com/medical-billing/" },
          { "@type": "ListItem", "position": 3, "name": "Medical Billing Outsourcing", "item": "https://primedocbilling.com/medical-billing/outsourcing/" }
        ]
      },
      "inLanguage": "en-US",
      "mainEntity": {
        "@type": "Article",
        "@id": "https://primedocbilling.com/medical-billing/outsourcing/#article",
        "headline": "Medical billing outsourcing: What it means and how it works?",
        "description": "A complete guide explaining what medical billing outsourcing means, how outsourcing works, what it costs, and how healthcare providers can decide if outsourcing is the right option for improving revenue cycle efficiency.",
        "image": "https://primedocbilling.com/wp-content/uploads/2025/11/outsourced-medical-billing.webp",
        "datePublished": "2025-11-17T08:00:00-05:00",
        "dateModified": "2025-11-17T08:00:00-05:00",
        "author": {
          "@type": "Organization",
          "@id": "https://primedocbilling.com/#organization",
          "name": "Prime Doc Billing LLC",
          "url": "https://primedocbilling.com/"
        },
        "publisher": {
          "@type": "Organization",
          "@id": "https://primedocbilling.com/#organization",
          "name": "Prime Doc Billing LLC",
          "url": "https://primedocbilling.com/",
          "logo": {
            "@type": "ImageObject",
            "url": "https://primedocbilling.com/wp-content/uploads/2025/02/Untitled.webp"
          }
        },
        "inLanguage": "en-US"
      }
    },
    {
      "@type": "FAQPage",
      "@id": "https://primedocbilling.com/medical-billing/outsourcing/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Why should you hire a medical billing outsourcing company?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hiring a medical billing outsourcing company can significantly reduce administrative burden while improving the financial performance of a healthcare practice. With the right billing partner, providers benefit from faster reimbursements, fewer errors, improved compliance, and more time to focus on patient care."
          }
        },
        {
          "@type": "Question",
          "name": "Should I outsource my medical billing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, outsourcing medical billing can be a strategic move for healthcare facilities seeking reduced administrative workload and improved cash flow. The decision depends on available resources, staff expertise, and desired control. A reliable billing partner brings efficiency, accuracy, and long-term financial stability to the practice."
          }
        }
      ]
    }
  ]
}
</script>
        <?php
    }
}
add_action('wp_head', 'add_custom_schema_markup_for_medical_billing_outsourcing');