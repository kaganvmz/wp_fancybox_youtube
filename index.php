<?php

/*
Plugin Name: Fancybox youtube
*/


function pluginprefix_setup_post_types()
{
    // register the "book" custom post type
    register_post_type( 'book', ['public' => 'true'] );
}
add_action( 'init', 'pluginprefix_setup_post_type' );
 
function pluginprefix_install()
{
    // trigger our function that registers the custom post type
    pluginprefix_setup_post_types();
 
    // clear the permalinks after the post type has been registered
    flush_rewrite_rules();
}

register_activation_hook( __FILE__, 'pluginprefix_install' );
var_dump(__FILE__);
function pluginprefix_deactivation()
{
    // our post type will be automatically removed, so no need to unregister it
 
    // clear the permalinks to remove our post type's rules
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'pluginprefix_deactivation' );
