<?php
function gatsweb_scripts(){
    wp_enqueue_style("gatsweb-style", get_stylesheet_uri());
}
add_action("wp_enqueue_scripts","gatsweb_scripts");
