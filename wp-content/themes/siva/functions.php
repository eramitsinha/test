<?php
// Hook
function custom_excerpt_length($length)
{
	return 20;
}
add_filter('excerpt_length','custom_excerpt_length');

// Create "Footer" Widget Box
register_sidebar( array(
	'name'          => __( 'Footer', 'twentyfourteen' ),
	'id'            => 'sidebar-4',
	'description'   => __( 'Appears in the footer section of the site.', 'twentyfourteen' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h1 class="widget-title">',
	'after_title'   => '</h1>',
) );



// Create "Logo" Widget Box
register_sidebar( array(
	'name'          => __( 'Logo', 'twentyfourteen' ),
	'id'            => 'sidebar-5',
	'description'   => __( 'Appears in the footer section of the site.', 'twentyfourteen' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget'  => '</aside>',
	'before_title'  => '<h1 class="widget-title">',
	'after_title'   => '</h1>',
) );


// Action Hook - Remove Tools Link from Dashboard/Backend
function remove_tool_link()
{
	remove_menu_page("tools.php"); // Action Hook - Built-in Function
}
add_action("admin_menu","remove_tool_link"); // Action Hook 

// Filter Hook - >> Show pages/posts title Capital Letters

function title_capital($text)
{
	return strtoupper($text);
}
add_filter('the_title','title_capital'); // Filter Hook

// Dynamic Menu
function mytheme_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_register_menus');

// Adding CSS class to menu
add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

function wpse156165_menu_add_class( $atts, $item, $args ) {
    $class = 'nav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}


// Dynamic Logo using Customizer Option
function mytheme_customize_register( $wp_customize ) { 
 
    //    Add a Section in the Customizer 
    $wp_customize->add_section( 'mytheme_logo_section', array( 
        'title'       => __( 'Site Logo', 'mytheme' ), 
        'priority'    => 30, 
        'description' => 'Upload a logo for your website.', 
    )); 
 
    //    Add a Setting to Store the Logo 
    $wp_customize->add_setting( 'mytheme_logo' ); 
 
    //    Add a Control to Upload Image 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 
'mytheme_logo', array( 
        'label'    => __( 'Upload Logo', 'mytheme' ), 
        'section'  => 'mytheme_logo_section', 
        'settings' => 'mytheme_logo', 
    ))); 
} 
add_action( 'customize_register', 'mytheme_customize_register' );