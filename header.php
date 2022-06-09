<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */

//Your access to and use of BrightEdge AutoPilot - Self Connecting Pages is governed by the
//Infrastructure Product Terms located at: www.brightedge.com/infrastructure-product-terms.
//Customer acknowledges and agrees it has read, understands and agrees to be bound by the
//Infrastructure Product Terms.

//BE Config: save the be_ixf_client.php file to your server, then use "require" to include it in your template.
require 'be_ixf_client.php';
use BrightEdge\BEIXFClient;

//BE IXF: the following array and constructor must be placed before any HTML is written to the page.
$be_ixf_config = array(
    BEIXFClient::$CAPSULE_MODE_CONFIG => BEIXFClient::$REMOTE_PROD_CAPSULE_MODE,
    BEIXFClient::$ACCOUNT_ID_CONFIG => "f00000000051380",

    //BEIXFClient::$API_ENDPOINT_CONFIG => "https://ixfd1-api.bc0a.com",
	//BEIXFClient::$CANONICAL_HOST_CONFIG => "www.domain.com",
	//BEIXFClient::$CANONICAL_PROTOCOL_CONFIG  => "https",
	//BEIXFClient::$ALLOW_DEBUG_MODE = false;

	// BE IXF: By default, all URL parameters are ignored. If you have URL parameters that add value to
	// page content.  Add them to this config value, separated by the pipe character (|).
    BEIXFClient::$WHITELIST_PARAMETER_LIST_CONFIG => "ixf",

);

global $be_ixf;
$be_ixf = new BEIXFClient($be_ixf_config);
//BE Config: End
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php
        if(!is_page_template('search.php')){ 
            echo '<meta name="robots" content="index, follow">';
        }else{
            echo '<meta name="robots" content="noindex, follow"/>';
        }
    ?>
    <title><?php echo wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
    <noscript><style>body { opacity:1 }</style></noscript>
    <script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="https://schema.org/WebPage" style="opacity:0">
<script>0</script>
    <div class="site-wrapper">
        <?php
            if(is_active_sidebar('headeradslot') && !is_single()){ dynamic_sidebar('headeradslot'); }
            get_template_part( 'parts/mobheader' );
            get_template_part( 'parts/categorynav' );
            get_template_part( 'parts/sidebarmenu' );
        ?>