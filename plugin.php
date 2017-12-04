<?php
namespace CS_Posts;

use CS_Posts\Skins;


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Plugin {
  public function __construct() {
        $this->add_actions();
  }
  private function add_actions() {
    add_action( 'elementor/widget/posts/skins_init', function( $widget ) {
       $widget->add_skin( new Skins\Skin_Custom($widget) );
    } );
  }
}
new Plugin();
