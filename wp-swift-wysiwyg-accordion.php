<?php
/*
Plugin Name:       WP Swift: WYSIWYG Accordion
Description:       Output zurb foundation accordion content with wysiwyg shortcodes
Version:           1.0.0
Author:            Gary Swift
License:           GPL-2.0+
Plugin URI:        https://github.com/GarySwift/wp-swift-wysiwyg-accordion
Text Domain:       wp-swift-wysiwyg-accordion
*/

class WP_Swift_Wysiwyg_Accordion_Plugin {

    /*
     * Initializes the plugin.
     */
    public function __construct() { 
        # A shortcode for rendering the accordian
        add_shortcode( 'accordion', array( $this, 'render_accordion' ) );  
         # A shortcode for rendering accordian sections
        add_shortcode( 'accordion-item', array( $this, 'render_accordion_item' ) );
    }

    /**
     * A shortcode for rendering the login form.
     *
     * @param  array   $atts        Shortcode attributes.
     * @param  string  $content     The text content for shortcode. Not used.
     *
     * @return string  The shortcode output
     */
    public function render_accordion( $atts, $content = null ) {
        extract( shortcode_atts( array(
           'section' => ''
        ), $atts ) );
        ob_start();
        ?>
        <ul class="accordion wp-swift" id="accordion-<?php echo $section ?>" data-accordion>
            <?php do_shortcode($content); ?>
        </ul>
        <?php 
        $html = ob_get_contents();
        ob_end_clean();
        return $html;
    }    


    /**
     * A shortcode for rendering the login form.
     *
     * @param  array   $atts        Shortcode attributes.
     * @param  string  $content     The text content for shortcode. Not used.
     *
     * @return string  The shortcode output
     */
    public function render_accordion_item( $atts, $content = null ) {
        extract( shortcode_atts( array(
            'title' => 'Accordion Section',
            'id' => '',
            'section' => '',
            'status' => '',
        ), $atts ) );
        ?>
          <li class="accordion-navigation">
            <a href="#panel<?php echo $id.$section ?>"><?php echo $title ?><span class="read-more">Read More <i class="fa fa-plus" aria-hidden="true"></i></span></a>
            <div id="panel<?php echo $id.$section ?>" class="content <?php echo $status ?>"><?php echo $content ?></div>
          </li>
        <?php
        return $html;
    }    
}
// Initialize the plugin
$wysiwyg_accordion_plugin = new WP_Swift_Wysiwyg_Accordion_Plugin();