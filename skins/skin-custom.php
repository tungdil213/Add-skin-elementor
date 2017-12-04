<?php
namespace CS_Posts\Skins;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Skin_Custom extends Skin_Base {

	public function get_id() {
		return 'custom';
	}

	public function get_title() {
		return __( 'custom', 'elementor-pro' );
	}

	public function render_amp() {

	}

	protected function render_row_header() {
		?>
		<div class="elementor-post__text row">
		<?php
	}

	protected function render_row_footer() {
		?>
		</div>
		<?php
	}

	protected function render_custom_content() {
		?>
		Custom_content
		<?php
	}

	protected function render_post() {
		$this->render_post_header();
		$this->render_thumbnail();
		$this->render_row_header();
		$this->render_custom_content();
		$this->render_row_footer();
		$this->render_post_footer();
	}
}
