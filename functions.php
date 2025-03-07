<?php  


function alpha_bootstraping(){
    load_theme_textdomain("alpha");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");

}

add_action("after_setup_theme", "alpha_bootstraping");


function alpha_enqueue_script(){
    wp_enqueue_style("main", get_stylesheet_uri());
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css");
}

add_action( "wp_enqueue_scripts", "alpha_enqueue_script" );