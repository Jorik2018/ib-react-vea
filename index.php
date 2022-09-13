<?php
/**
* Plugin Name: wp_vea
* Plugin URI: https://www.your-site.com/
* Description: Test.
* Version: 0.1
* Author: your-name
* Author URI: https://www.your-site.com/
**/

/*
function wpdocs_register_my_custom_menu_page() {
    add_menu_page(
        __( 'Custom Menu Title', 'textdomain' ),
        'custom menu',
        'manage_options',
        'myplugin/myplugin-admin.php',
        '',
        plugins_url( 'myplugin/images/icon.png' ),
    );
}

*/
function p_vea_admin_menu() {
    add_menu_page( 
        'My Top Level Menu Example', //page titlee
    'Top Level Menu', 
    'manage_options',//Capabiliy
     'example', //url
     'p_vea_display_text', 
     'need a uri to your image here!!', 6  );
 }
 

 function p_vea_display_text(){
    //echo plugins_url(__FILE__ );
    $path=__DIR__;
    $js = glob($path."/build/static/js/main*.js");
    $css = glob($path."/build/static/css/main*.css");
    $path="/wp-content/plugins/ib-vea";
    /*
    function unhook_parent_style() {

  wp_dequeue_style( 'wp-bootstrap-starter-style' );
  wp_deregister_style( 'wp-bootstrap-starter-style' );

}
add_action( 'wp_enqueue_scripts', 'unhook_parent_style', 20 );
    */
    //wp_enqueue_style( 'wpbs-child-css', $path."/build/static/css/".basename($css[0]));
    ?>
    
    <h1 class="wp-heading-inline">Veas</h1>
    <script defer="defer" src="<?=$path?>/build/static/js/<?=basename($js[0])?>"></script>
    <link href="<?=$path?>/build/static/css/<?=basename($css[0])?>" rel="stylesheet">
    <div id="root"></div>
    <?php
    //require_once 'pathtofile.php'; //--> make sure you read up on paths and require to find your file.
 }
 add_action( 'admin_menu', 'p_vea_admin_menu' );


?>
