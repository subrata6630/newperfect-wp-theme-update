<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "themesbazar";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'themesbazar/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Themes Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => 10,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'redux-framework-demo' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'redux-framework-demo' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/sbtechbd',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/i2sbtechbd/',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://twitter.com/subrata6630',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.linkedin.com/company/sbtechbd-technology',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     ////////////////////////// */

    

 // -> ----------------------START Header Option----------------------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Header Options', 'redux-framework-demo' ),
        'id'               => 'header',
        'icon'             => 'el el-home',
       'fields'           => array(
            array(
                'id'       => 'logo_upload',
                'type'     => 'media',
                'title'    => __( 'Logo Uploader', 'redux-framework-demo' ),
                'subtitle' => __( 'Upload Your Logo', 'redux-framework-demo' ),
                'default'  => '',
                'compiler'  => true,
                'default'  => array(
                    'url' => get_template_directory_uri().'/images/logo.gif',
                )
            ),
            array(
                'id'        => 'bannar_upload',
                'type'      => 'media',
                'title'     => __( 'Bannar Uploader', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Upload Your Bannar', 'redux-framework-demo' ),
                'default'   => '',
                'compiler'   => true,
                'default'  => array(
                    'url' => get_template_directory_uri().'/images/bannar.gif',
                )

            ),
            array(
			    'title' => __('Bannar Link', 'redux-framework-demo'),
				'id' => 'bannar-link',
				'type' => 'text',
				'options' => array(
					'bannar-url' => 'Bannar Url',
					),
					'default' => array(
						'bannar-url' => 'https://sbtechbd.github.io/',
			       )
				
			  ),
           array(
			    'title' => __('Social Profiles', 'redux-framework-demo'),
				'id' => 'social-link',
				'type' => 'text',
				'options' => array(
					'facebook-url' => 'Facebook Link',
					'twitter-url' => 'Twitter Link',
					'googleplus-url' => 'Googleplus Link',
					'youtube-url' => 'Youtube Link',
					'android-url' => 'Android Link',
					'rss-url' => 'Rss Link',
					),
					'default' => array(
						'facebook-url' => 'https://www.facebook.com/themesbazar/',
						'twitter-url' => 'https://twitter.com/helalprogrammer',
						'googleplus-url' => 'https://plus.google.com/u/0/102123215346349058833',
						'youtube-url' => 'https://www.youtube.com/channel/UCRlLFyoM0sbiugx6Ez-UXzw',
						'android-url' => '#',
						'rss-url' => 'https://www.linkedin.com/company/sbtechbd-technology',
			       )
				
			  ),
            array(
			    'title' => __('Time and Date option', 'redux-framework-demo'),
				'id' => 'time-date',
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'Bnagla date', 
                  '2' => 'English date', 
                 
                      ),
				  'default' => '2'
					  
			  ),
           
        )


    
    ) );


 // -> ----------------------START footer Option----------------------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Footer Options', 'redux-framework-demo' ),
        'id'               => 'footer',
        'icon'             => 'el el-th',
       'fields'           => array(
            array(
                'id'       => 'footer-logo',
                'type'     => 'media',
                'title'    => __( 'Footer Logo Uploader', 'redux-framework-demo' ),
                'subtitle' => __( 'Upload Your Logo', 'redux-framework-demo' ),
                'default'  => '',
                'compiler'  => true,
                'default'  => array(
                    'url' => get_template_directory_uri().'/images/logo.gif',
                )
            ),
           array(
                'id'       => 'editorial',
                'type'     => 'editor',
                'title'    => __( 'Editorial Text', 'redux-framework-demo' ),
                'default'  => 'Sbtechbd Technology, Office : Room No : 394, Muktobangla Shopping Complex (3rd floor), Mirpur-1, Dhaka-1216, Mobile : 01736-023940, ',
            ),
           array(
                'id'       => 'editorial-tow',
                'type'     => 'editor',
                'title'    => __( 'Address Text', 'redux-framework-demo' ),
                'default'  => 'Sbtechbd Technology, Office : Room No : 394, Muktobangla Shopping Complex (3rd floor), Mirpur-1, Dhaka-1216, Mobile : 01736-023940, ',
            ),
           array(
                'id'       => 'copyright',
                'type'     => 'editor',
                'title'    => __( 'Copyright Text', 'redux-framework-demo' ),
                'default'  => '&copy; All rights reserved &copy; 2021 Sbtechbd Technology',
            ),
            array(
                'id'        => 'desing_developed',
                'type'      => 'editor',
                'title'     => __( 'Desing and Developed Text', 'redux-framework-demo' ),
                'default'   => 'Developed By Sbtechbd Technology',

            ),

        )


    
    ) );

// -> ----------------------START Category Option----------------------------------------------#

Redux::setSection( $opt_name, array(
        'title'            => __( 'Category Settings', 'redux-framework-demo' ),
        'id'               => 'category',
        'icon'             => 'el el-cog',
       'fields'           => array(

           array(
                'id'       => 'slider',
                'type'     => 'select',
                'title'    => __( 'Slider', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-slider',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 6,
            ), 
			array(
                'id'       => 'cat-one',
                'type'     => 'select',
                'title'    => __( '1st Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-one',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 9,
            ),
           array(
                'id'       => 'cat-two',
                'type'     => 'select',
                'title'    => __( '2nd Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'cat-three',
                'type'     => 'select',
                'title'    => __( '3rd Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'cat-four',
                'type'     => 'select',
                'title'    => __( '4th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-four',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 3,
            ),
            array(
                'id'       => 'cat-five',
                'type'     => 'select',
                'title'    => __( '5th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-five',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 3,
            ),
            array(
                'id'       => 'cat-six',
                'type'     => 'select',
                'title'    => __( '6th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
			
           array(
                'id'       => 'how-cat-six',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 4,
            ),
           array(
                'id'       => 'cat-seven',
                'type'     => 'select',
                'title'    => __( '7th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-seven',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 4,
            ),
           array(
                'id'       => 'cat-eight',
                'type'     => 'select',
                'title'    => __( '8th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-eight',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 4,
            ),
            
            array(
                'id'       => 'cat-nine',
                'type'     => 'select',
                'title'    => __( '9th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
			
           array(
                'id'       => 'how-cat-nine',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 4,
            ),
           array(
                'id'       => 'cat-ten',
                'type'     => 'select',
                'title'    => __( '10th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-ten',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 3,
            ),
           array(
                'id'       => 'cat-eleven',
                'type'     => 'select',
                'title'    => __( '11th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-eleven',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 3,
            ),
            array(
                'id'       => 'cat-twelve',
                'type'     => 'select',
                'title'    => __( '12th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-twelve',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 3,
            ),
            array(
                'id'       => 'cat-thirteen',
                'type'     => 'select',
                'title'    => __( '13th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-thirteen',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 3,
            ),
           array(
                'id'       => 'cat-fourteen',
                'type'     => 'select',
                'title'    => __( '14th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-fourteen',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 4,
            ),
            array(
                'id'       => 'cat-fifthteen',
                'type'     => 'select',
                'title'    => __( '15th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
			
           array(
                'id'       => 'how-cat-fifthteen',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 4,
            ),
           array(
                'id'       => 'cat-sixteen',
                'type'     => 'select',
                'title'    => __( '16th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-sixteen',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 4,
            ),
           array(
                'id'       => 'cat-seventeen',
                'type'     => 'select',
                'title'    => __( '17th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-seventeen',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 4,
            ),
           array(
                'id'       => 'cat-eightteen',
                'type'     => 'select',
                'title'    => __( '18th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
			
           array(
                'id'       => 'how-cat-eightteen',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 3,
            ),
           array(
                'id'       => 'cat-nineteen',
                'type'     => 'select',
                'title'    => __( '19th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-nineteen',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 3,
            ),
           array(
                'id'       => 'cat-twenty',
                'type'     => 'select',
                'title'    => __( '20th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-twenty',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 4,
            ),
           array(
                'id'       => 'cat-twentyone',
                'type'     => 'select',
                'title'    => __( '21th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-twentyone',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 4,
            ),
			array(
                'id'       => 'cat-twentytwo',
                'type'     => 'select',
                'title'    => __( '21th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-twentytwo',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 4,
            ), 
			array(
                'id'       => 'cat-twentythree',
                'type'     => 'select',
                'title'    => __( '21th Category', 'redux-framework-demo' ),
                'subtitle'  => __( 'Please Select Your Category', 'redux-framework-demo' ),
                'desc'      => __( '1st Create Category From Posts-> Category, Then Select Here.', 'redux-framework-demo' ),
                'default'  => '1',
                'data'  => 'category',
            ),
           array(
                'id'       => 'how-cat-twentythree',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 4,
            ), 
          
           
            
            

        )


    
    ) );




// -> ----------------------START Layout Option----------------------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Layout', 'redux-framework-demo' ),
        'id'               => 'layout',
        'icon'             => 'el el-qrcode',
       'fields'           => array(
            array(
                'id'       => 'scrool',
                'type'     => 'text',
                'title'    => __( 'Scroll Title', 'redux-framework-demo' ),
                'default'  => 'Headline :',
            ),
           array(
                'id'       => 'howscrool',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 10,
            ),
           array(
                'id'       => 'last',
                'type'     => 'text',
                'title'    => __( 'Last Update Title', 'redux-framework-demo' ),
                'default'  => 'Last Update',
            ),
           array(
                'id'       => 'lastpost',
                'type'     => 'text',
                'title'    => __( 'How Many Post', 'redux-framework-demo' ),
                'default'  => 10,
            ),
           array(
                'id'       => 'popular',
                'type'     => 'text',
                'title'    => __( 'PopularPost Title', 'redux-framework-demo' ),
                'default'  => 'Popular Post',
            ),
           array(
                'id'       => 'more_news',
                'type'     => 'text',
                'title'    => __( 'More Category Text', 'redux-framework-demo' ),
                'default'  => 'More News..',
            ),
           array(
                'id'       => 'photo',
                'type'     => 'text',
                'title'    => __( 'Photo Gallary Text', 'redux-framework-demo' ),
                'default'  => 'Photo Gallary',
            ),
           array(
                'id'       => 'video',
                'type'     => 'text',
                'title'    => __( 'Video Gallary Text', 'redux-framework-demo' ),
                'default'  => 'Video Gallary',
            ),
            array(
			    'title' => __('Facebook', 'redux-framework-demo'),
				'id' => 'facebook',
				'type' => 'button_set',
				   'options' => array(
                  '1' => 'Facebook Show', 
                  '2' => 'Facebook Hide', 
                 
                      ),
				  'default' => '1'
					  
			  ),
			  array(
                'id'       => 'facebook-title',
                'type'     => 'text',
                'title'    => __( 'Facebook Title', 'redux-framework-demo' ),
                'default'  => 'Our Like Page',
            ),
			  array(
			    'title' => __('Facebook Link', 'redux-framework-demo'),
				'id' => 'facebook-link',
				'type' => 'text',
				'options' => array(
					'face-url' => 'Facebook Url',
					),
					'default' => array(
						'face-url' => 'https://www.facebook.com/i2sbtechbd/',
			       )
				
			  ),
			  array(
                'id'       => 'facebook-width',
                'type'     => 'text',
                'title'    => __( 'Facebook width', 'redux-framework-demo' ),
                'default'  => '350',
            ),
            array(
                'id'       => 'facebook-height',
                'type'     => 'text',
                'title'    => __( 'Facebook Height', 'redux-framework-demo' ),
                'default'  => '300',
            ),


        )


    
    ) );


// -> ----------------------START Style Option----------------------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Style', 'redux-framework-demo' ),
        'id'               => 'style',
        'icon'             => 'el el-adjust',
       'fields'           => array(
            array(
                    'id'       => 'body-color',
                    'type'     => 'color',
                    'title'    => __('Body Background Color', 'redux-framework-demo'),
                    'subtitle' => __('Pick a background color for the theme (default: #fff).', 'redux-framework-demo'),
                    'default'  => '#F3F1F1',
                    'validate' => 'color',
                ),
           array(
                    'id'       => 'body-font',
                    'type'     => 'typography',
                    'title'    => __('Body Font Size', 'redux-framework-demo'),
                    'subtitle' => __('Please Set Here Body Font Size.', 'redux-framework-demo'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'line-height' => false,
                    'color' => false,
                    'default'     => array(
                         'font-size'   => '16px', 
                )
                    
                ),
           array(
                    'id'       => 'footer-color',
                    'type'     => 'color',
                    'title'    => __('Footer Background Color', 'redux-framework-demo'),
                    'subtitle' => __('Pick a background color for the theme (default: #fff).', 'redux-framework-demo'),
                    'default'  => '#EEEEEE',
                    'validate' => 'color',
                ),
           array(
                    'id'       => 'footer-font',
                    'type'     => 'typography',
                    'title'    => __('Footer Font Size', 'redux-framework-demo'),
                    'subtitle' => __('Please Set Here Body Font Size.', 'redux-framework-demo'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => false,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'font-size'   => '16px', 
                         'color'   => '#423C3C', 
                )
                    
                ),
           array(
                    'id'       => 'website-bag',
                    'type'     => 'color',
                    'title'    => __('Main Website Background Color', 'redux-framework-demo'),
                    'subtitle' => __('Pick a background color for the theme (default: #fff).', 'redux-framework-demo'),
                    'default'  => '#FFFFFF',
                    'validate' => 'color',
                ),
           
           array(
                    'id'       => 'scrool-background',
                    'type'     => 'color',
                    'title'    => __('Scrool Title Background', 'redux-framework-demo'),
                    'subtitle' => __('Pick a background color for the theme (default: #fff).', 'redux-framework-demo'),
                    'default'  => '#7C7D7A',
                    'validate' => 'color',
                ),
           array(
                    'id'       => 'scrool-font',
                    'type'     => 'typography',
                    'title'    => __('Scrool Title font color and Font Size', 'redux-framework-demo'),
                    'subtitle' => __('Please Set Here Body Background Font Size.', 'redux-framework-demo'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'font-size'   => '16px', 
                         'text-align'   => 'left', 
                         'color'   => '#FFFFFF', 
                )
                    
                ),
           array(
                    'id'       => 'category-background',
                    'type'     => 'color',
                    'title'    => __('Category Title Background', 'redux-framework-demo'),
                    'subtitle' => __('Pick a background color for the theme (default: #fff).', 'redux-framework-demo'),
                    'default'  => '#7D0101',
                    'validate' => 'color',
                ),
           array(
                    'id'       => 'category-font',
                    'type'     => 'typography',
                    'title'    => __('Category Title Background, Text Align and Font Size', 'redux-framework-demo'),
                    'subtitle' => __('Please Set Here Body Background Font Size.', 'redux-framework-demo'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'font-size'   => '18px', 
                         'text-align'   => 'left', 
                         'color'   => '#FFFFFF', 
                )
                    
                ),
           array(
                    'id'       => 'large-title',
                    'type'     => 'typography',
                    'title'    => __('Large Headline Color, Text Align and Font Size', 'redux-framework-demo'),
                    'subtitle' => __('Please Set Here Large Headline Color Font Size.', 'redux-framework-demo'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => true,
                    'line-height' => true,
                    'color' => true,
                    'default'     => array(
                         'font-size'   => '19px', 
                         'line-height'   => '22px', 
                         'text-align'   => 'left', 
                         'color'   => '#2F4E68', 
                )
                    
                ),
          
           array(
                    'id'       => 'midium-title',
                    'type'     => 'typography',
                    'title'    => __('Midium Headline Color, Text Align and Font Size', 'redux-framework-demo'),
                    'subtitle' => __('Please Set Here Small Headline Color Font Size.', 'redux-framework-demo'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => true,
                    'line-height' => true,
                    'color' => true,
                    'default'     => array(
                         'font-size'   => '17px', 
                         'line-height'   => '20px', 
                         'text-align'   => 'left', 
                         'color'   => '#000000', 
                )
                    
                ),
            array(
                    'id'       => 'small-title',
                    'type'     => 'typography',
                    'title'    => __('Small Headline Color, Text Align and Font Size', 'redux-framework-demo'),
                    'subtitle' => __('Please Set Here Small Headline Color Font Size.', 'redux-framework-demo'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => true,
                    'line-height' => true,
                    'color' => true,
                    'default'     => array(
                         'font-size'   => '16px', 
                         'line-height'   => '20px', 
                         'text-align'   => 'left', 
                         'color'   => '#000000', 
                )
                    
                ),
           array(
                    'id'       => 'widget-background',
                    'type'     => 'color',
                    'title'    => __('Widget Title Background', 'redux-framework-demo'),
                    'subtitle' => __('Pick a background color for the theme (default: #fff).', 'redux-framework-demo'),
                    'default'  => '#628DB1',
                    'validate' => 'color',
                ),
           array(
                    'id'       => 'widget-font',
                    'type'     => 'typography',
                    'title'    => __('Widget Color, Text Align and Font Size', 'redux-framework-demo'),
                    'subtitle' => __('Please Set Here Small Headline Color Font Size.', 'redux-framework-demo'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'font-size'   => '16px', 
                         'line-height'   => '20px', 
                         'text-align'   => 'left', 
                         'color'   => '#000000', 
                )
                    
                ),
           array(
                    'id'       => 'menu-background',
                    'type'     => 'color',
                    'title'    => __('Menu Background', 'redux-framework-demo'),
                    'subtitle' => __('Pick a background color for the theme (default: #fff).', 'redux-framework-demo'),
                    'default'  => '#48014B',
                    'validate' => 'color',
                ),
           array(
                    'id'       => 'menu-font',
                    'type'     => 'typography',
                    'title'    => __('Menu Color and Font Size', 'redux-framework-demo'),
                    'subtitle' => __('Please Set Here Menu Color and Font Size.', 'redux-framework-demo'),
                    'font-family' => false,
                    'font-weight' => false,
                    'font-style' => false,
                    'font-backup' => false,
                    'text-align' => true,
                    'line-height' => false,
                    'color' => true,
                    'default'     => array(
                         'font-size'   => '16px', 
                         'line-height'   => '20px', 
                         'text-align'   => 'left', 
                         'color'   => '#FFFFFF', 
                )
                    
                ),
           
       )

    ) );


// -> ----------------------START Single Page Option----------------------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Single Post Options', 'redux-framework-demo' ),
        'id'               => 'single',
        'icon'             => 'el el-list',
       'fields'           => array(
            array(
                'id'       => 'update',
                'type'     => 'text',
                'title'    => __( 'Update Time Text', 'redux-framework-demo' ),
                'default'  => 'Update Time :',
            ),
           array(
                'id'       => 'count',
                'type'     => 'text',
                'title'    => __( 'Post Count Text', 'redux-framework-demo' ),
                'default'  => 'View',
            ),
            array(
                'id'        => 'more-news-category',
                'type'      => 'text',
                'title'     => __( 'More News Category Text', 'redux-framework-demo' ),
                'default'   => 'More News Of This Category',

            ),

        )


    
    ) );

// -> ----------------------START Archive Page Option----------------------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Category Post Options', 'redux-framework-demo' ),
        'id'               => 'archive',
        'icon'             => 'el el-indent-right',
       'fields'           => array(
            array(
                'id'       => 'word-archive',
                'type'     => 'text',
                'title'    => __( 'How Many Word Show in Content', 'redux-framework-demo' ),
                'default'  => 30,
            ),
            array(
                'id'        => 'read-more-archive',
                'type'      => 'text',
                'title'     => __( 'Read More Text', 'redux-framework-demo' ),
                'default'   => 'read more',

            ),

        )


    
    ) );
   
    // -> ----------------------START Support Option----------------------------------------------#





    Redux::setSection( $opt_name, array(
        'title'            => __( 'Support', 'redux-framework-demo' ),
        'id'               => 'support',
        'desc'       => __( '
        <b> Sbtechbd Technology</b> <br/>
        Website : <a href="https://sbtechbd.github.io/" target="_blank">Sbtechbd Technology/a> <br/>
        Facebook : <a href="http://www.facebook.com/themesbazar" target="_blank">https://www.facebook.com/i2sbtechbd/</a> <br/>
        Email : <a href="mailto:Subrata6630@gmail.com" target="_blank">subrata6630@gmail.com</a> <br/>
        Mobile : +8801736-023940, <br/>', 'redux-framework-demo' ),
        'icon'             => 'el el-phone',
       


    
    ) );
     // -> ----------------------START More Themes Option----------------------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Our More Themes', 'redux-framework-demo' ),
        'id'               => 'more-themes',
        'icon'             => 'el el-website',
        'desc'       => __( '
        Please Download Our free themes and Buy Our Premium Wordpress Themes From <a href="https://sbtechbd.github.io/" target="_blank">Sbtechbd Technology</a> Or Call : +8801736-023940,<br/>', 'redux-framework-demo' ),
    


    
    ) );
      // -> ----------------------START Documentation Option----------------------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Setup Tutorial', 'redux-framework-demo' ),
        'id'               => 'tutorial',
        'icon'             => 'el el-facetime-video',
        'desc'       => __( '
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/jpGDSiHI61c" frameborder="0" allowfullscreen></iframe>
        ', 'redux-framework-demo' ),
      


    
    ) );
       

// -> ----------------------START Documentation Option----------------------------------------------#

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Documentation', 'redux-framework-demo' ),
        'id'               => 'documentation',
        'icon'             => 'el el-question',
        'desc'       => __( '
        Please Read Our Wordpress themes Documentation <a href="https://sbtechbd.github.io/" target="_blank">Sbtechbd Technology</a> Or Call : +8801736-023940 <br/>', 'redux-framework-demo' ),



    
    ) );
    








  
   

    /*
     * <--- END SECTIONS --------------------------------------------------------#
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }


