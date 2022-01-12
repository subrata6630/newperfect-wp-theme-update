<?php
global $themesbazar;
load_theme_textdomain( 'sunflower', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

/* --------------Post Thumbnails Add-------------- */
    
add_theme_support( 'post-thumbnails');
set_post_thumbnail_size( 400, 225, true );
add_image_size( 'single-thumbnail', 400, 225, true );




/* --------------ReadMore----------------- */

function excerpt($num) {
$limit = $num+1;
$excerpt = explode(' ', get_the_excerpt(), $limit);
array_pop($excerpt);
$excerpt = implode(" ",$excerpt)." <a href='" .get_permalink($post->ID) ." ' class='".readmore."'></a>";
echo $excerpt;
}


/* ----------------StyleSheet and Javascript Add --------------*/

function newsstar_css_and_js() {
   wp_register_style('bootstrap',get_template_directory_uri() .'/css/bootstrap.min.css');
   wp_register_style('font-awesome',get_template_directory_uri() .'/css/font-awesome.min.css');
   wp_register_style('responsive',get_template_directory_uri() .'/css/responsive.css');
   wp_register_style('menu',get_template_directory_uri() .'/css/menu.css');
   wp_register_style('stylesheet',get_template_directory_uri() .'/css/stylesheet.css');
   wp_register_style('style',get_stylesheet_uri() );
    
    wp_register_script('js_min', get_template_directory_uri() .'/js/bootstrap.min.js', array(
    jquery
    ));


    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('responsive');
    wp_enqueue_style('menu');
    wp_enqueue_style('stylesheet');
    wp_enqueue_style('css-themes');
    wp_enqueue_style('style');
    
    wp_enqueue_script('jquery');    
    wp_enqueue_script('js_min');
    
}
add_action( 'wp_enqueue_scripts', 'newsstar_css_and_js' );




/* --------------Post View Count----------------- */
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 Views";
    }
    return $count;
}



function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

/* --------------Post Pagination----------------- */

function wp_bootstrap_pagination( $args = array() ) {

    $defaults = array(
        'range'           => 4,
        'custom_query'    => FALSE,
        'previous_string' => __( '<i class="fa fa-backward" aria-hidden="true"></i>
', 'text-domain' ),
        'next_string'     => __( '<i class="fa fa-forward" aria-hidden="true"></i>
', 'text-domain' ),
        'before_output'   => '<div class="post-nav"><ul class="pager">',
        'after_output'    => '</ul></div>'
    );
    
    $args = wp_parse_args( 
        $args, 
        apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
    );
    
    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );
    
    if ( $count <= 1 )
        return FALSE;
    
    if ( !$page )
        $page = 1;
    
    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }
    
    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );
    
    $firstpage = esc_attr( get_pagenum_link(1) );
    if ( $firstpage && (1 != $page) )
        $echo .= '<li class="previous"><a href="' . $firstpage . '">' . __( '<i class="fa fa-fast-backward" aria-hidden="true"></i>
', 'text-domain' ) . '</a></li>';
    if ( $previous && (1 != $page) )
        $echo .= '<li><a href="' . $previous . '" title="' . __( 'previous', 'text-domain') . '">' . $args['previous_string'] . '</a></li>';
    
    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<li class="active"><span class="active">' . str_pad( (int)$i, 2, '0', STR_PAD_LEFT ) . '</span></li>';
            } else {
                $echo .= sprintf( '<li><a href="%s">%002d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }
    
    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    if ($next && ($count != $page) )
        $echo .= '<li><a href="' . $next . '" title="' . __( 'next', 'text-domain') . '">' . $args['next_string'] . '</a></li>';
    
    $lastpage = esc_attr( get_pagenum_link($count) );
    if ( $lastpage ) {
        $echo .= '<li class="next"><a href="' . $lastpage . '">' . __( '<i class="fa fa-fast-forward" aria-hidden="true"></i>
', 'text-domain' ) . '</a></li>';
    }
    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}


/* --------------Photo Gallary Customs Post Register----------------- */

if(function_exists('register_post_type')) {
		register_post_type('news-photo', array(
			'labels' => array(
				'name' => __('Photo', 'news'),
				'menu_name' => __('Photo Gallary', 'news'),
				'add_new' => __('Add New Photo', 'news'),
				'add_new_item' => __('Add New Photo', 'news'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array('title','thumbnail')
		   ));
	    }

/* --------------Video Gallary  Customs Post Register----------------- */

if(function_exists('register_post_type')) {
		register_post_type('news-video', array(
			'labels' => array(
				'name' => __('Video', 'news'),
				'menu_name' => __('Video Gallary', 'news'),
				'add_new' => __('Add New Video', 'news'),
				'add_new_item' => __('Add New Video', 'news'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array('title','editor')
		   ));
	    }


/* --------------Page Title----------------- */

add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );
 
/**
 * Customize the title for the home page, if one is not set.
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
function wpdocs_hack_wp_title_for_home( $title )
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = __( 'Home', 'textdomain' ) . ' | ' . get_bloginfo( 'name' ). ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}







include('lib/ReduxCore/framework.php');
include('lib/sample/config.php');
include('lib/ReduxCore/templates/panel/config.php');
include('include/widget.php');
include('include/menu.php');
include('include/wp-bootstrap-navwalker.php');




?>