<?php

function dqueue() {
    global $post;
    wp_dequeue_style( 'wpum-frontend' );
    if(!is_page('advertise-with-us')){
        wp_dequeue_style( 'contact-form-7' );
        wp_dequeue_script( 'google-recaptcha' );
        wp_dequeue_script( 'google-invisible-recaptcha' );
    }
}
add_action( 'wp_enqueue_scripts', 'dqueue', 99);

function childhead() {
    $template_directory = get_stylesheet_directory_uri();
    $stylever = '1.0.4';
    
    echo '<link rel="preconnect" href="//www.googletagmanager.com/" as="script">';
    echo '<link rel="preconnect" href="//imasdk.googleapis.com/" as="script">';
    echo '<link rel="preconnect" href="//www.gstatic.com/" as="script">';
    echo '<link rel="preconnect" href="//securepubads.g.doubleclick.net/" as="script">';
    echo '<link rel="preconnect" href="//cdn.onesignal.com/" as="script">';
    echo '<link rel="preconnect" href="//ssl.p.jwpcdn.com/" as="script">';
    echo '<link rel="preconnect" href="//ssl.p.jwpcdn.com/player/v/8.25.1/jwplayer.core.controls.js" as="script">';
    echo '<link rel="preconnect" href="//cdn.listrakbi.com/" as="script">';
    echo '<link rel="preconnect" href="//ads.pubmatic.com/" as="script">';
    echo '<link rel="preconnect" href="//resources.infolinks.com/js/" as="script">';
    echo '<link rel="preconnect" href="//www.doubleclickbygoogle.com/" as="script">';
    echo '<link rel="preconnect" href="//securepubads.g.doubleclick.net">';
    echo '<link rel="preconnect" href="//securepubads.g.doubleclick.net/tag/js/gpt.js" as="script">';
    echo '<link rel="preconnect" href="//cdn.ampproject.org/v0.js" as="script">';

    echo '<link rel="dns-prefetch" href="//www.googletagmanager.com/" as="script">';
    echo '<link rel="dns-prefetch" href="//imasdk.googleapis.com/" as="script">';
    echo '<link rel="dns-prefetch" href="//www.gstatic.com/" as="script">';
    echo '<link rel="dns-prefetch" href="//securepubads.g.doubleclick.net/" as="script">';
    echo '<link rel="dns-prefetch" href="//cdn.onesignal.com/" as="script">';
    echo '<link rel="dns-prefetch" href="//ssl.p.jwpcdn.com/" as="script">';
    echo '<link rel="dns-prefetch" href="//ssl.p.jwpcdn.com/player/v/8.25.1/jwplayer.core.controls.js" as="script">';
    echo '<link rel="dns-prefetch" href="//cdn.listrakbi.com/" as="script">';
    echo '<link rel="dns-prefetch" href="//ads.pubmatic.com/" as="script">';
    echo '<link rel="dns-prefetch" href="//resources.infolinks.com/js/" as="script">';
    echo '<link rel="dns-prefetch" href="//www.doubleclickbygoogle.com/" as="script">';
    echo '<link rel="dns-prefetch" href="//cdn.ampproject.org/v0.js" as="script">';
    echo '<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>';

    if(is_page('profile') || is_page('account') || is_page('log-in') || is_page('password-reset') || is_page('register')){
        echo '<link rel="preload" href="https://www.getzone.com/wp-content/plugins/wp-user-manager/assets/css/wpum.min.css" as="style"  onload="this.rel=\'stylesheet\'" >';
    }

    echo '<link rel="preload" href="'.$template_directory.'/style.css?v='.$stylever.'" as="style"  onload="this.rel=\'stylesheet\'" >';
    echo '<link rel="preload" href="'.$template_directory.'/fonts/gzicons/style.css?v='.$stylever.'" as="style"  onload="this.rel=\'stylesheet\'" >';
    
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:ital,wght@0,400;0,900;1,900&display=swap" rel="stylesheet">';

}
add_action( 'wp_enqueue_scripts', 'childhead', 0);

function childfooter(){
    
}
add_action( 'wp_footer', 'childfooter', -1);