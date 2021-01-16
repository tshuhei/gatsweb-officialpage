<?php
function gatsweb_scripts(){
    wp_enqueue_style("gatsweb-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts","gatsweb_scripts");

function setup_my_theme(){
    add_theme_support("title-tag");
}

add_action("after_setup_theme","setup_my_theme");