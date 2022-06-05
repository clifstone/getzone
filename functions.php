<?php

function childhead() {
    $template_directory = get_stylesheet_directory_uri();
    $stylever = '0';
    

}
add_action( 'wp_enqueue_scripts', 'childhead', 0);

function childfooter(){
    
}
add_action( 'wp_footer', 'childfooter', -1);