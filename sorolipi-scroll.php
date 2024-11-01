<?php  

/**
 * Plugin Name:       Sorolipi Scroll
 * Plugin URI:        https://wordpress.org/plugins/sorolipi-scroll/
 * Description:       Simple Scroll to Top plugin easy to setup and scroll animation.
 * Version:           1.0
 * Requires at least: 6.1
 * Requires PHP:      7.2
 * Author:            Iman Ali
 * Author URI:        https://sorolipi.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       sorolipi
 * Domain Path:       /languages
 */


// Where Calling

function sorolipi_scroll_plugin_functions(){?>

  <div class="scroll-to-top">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
  </div>

<?php }
add_action('wp_footer', 'sorolipi_scroll_plugin_functions');

// Add enqueue script
function sorolipi_scroll_plugin_style_functions(){

  wp_enqueue_style('fontawesome-custom', plugin_dir_url(__FILE__ ). 'css/all.min.css') ;
  wp_enqueue_style('plugin-custom-style', plugin_dir_url( __FILE__ ).'css/custom.css') ;


  wp_enqueue_script( 'plugin-custom-fontawesome', plugin_dir_url( __FILE__ ) .'js/all.min.js', array('jquery'), '1.0.0', false );
  wp_enqueue_script( 'basics-custom-script', plugin_dir_url( __FILE__ ) .'js/script.js', array('jquery'), '1.0.0', false );

}
add_action('wp_enqueue_scripts', 'sorolipi_scroll_plugin_style_functions');


?>



