<?php
/*
Plugin Name:       WP Swift: WYSIWYG Accordion
Description:       Output zurb foundation accordion content with wysiwyg shortcodes
Version:           1.0.0
Author:            Gary Swift
License:           GPL-2.0+
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
        <ul class="accordion" id="accordion-<?php echo $section ?>" data-accordion>
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
           'id' => '',
           'section' => ''
        ), $atts ) );
        ?>
          <li class="accordion-navigation">
            <a href="#panel<?php echo $id.$section ?>">Accordion <?php echo $id ?></a>
            <div id="panel<?php echo $id.$section ?>" class="content active"><?php echo $content ?></div>
          </li>
        <?php
        return $html;
    }    
}
// Initialize the plugin
$wysiwyg_accordion_plugin = new WP_Swift_Wysiwyg_Accordion_Plugin();