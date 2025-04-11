<?php  


function alpha_bootstraping(){
    load_theme_textdomain("alpha");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
	register_nav_menu("topmenu", __( "Top Menu", "alpha") );
	register_nav_menu("footermenu", __( "Footer Menu", "alpha") );

}

add_action("after_setup_theme", "alpha_bootstraping");


function alpha_enqueue_script(){
    wp_enqueue_style("main", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css");
}

add_action( "wp_enqueue_scripts", "alpha_enqueue_script" );


function alpha_sidebar(){
    register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'textdomain' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Left', 'textdomain' ),
		'id'            => 'footer-left',
		'description'   => __( 'Widgetized area On The Left Side ', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '>',
		'after_title'   => '',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Right', 'textdomain' ),
		'id'            => 'footer-right',
		'description'   => __( 'Widgetized area On The Right Side ', 'textdomain' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}

add_action("widgets_init", "alpha_sidebar");

function alpha_menu_item_class( $classes , $item ){
	$classes[] = "list-inline-item";
	return $classes;
}

add_filter( 'nav_menu_css_class', 'alpha_menu_item_class', 10, 2 );