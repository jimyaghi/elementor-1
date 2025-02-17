<?php
namespace Elementor\Tests\Phpunit\Elementor\Core\Admin\Menu\Mock;

use Elementor\Core\Admin\Menu\Interfaces\Admin_Menu_Item;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Hidden_Menu_Item implements Admin_Menu_Item {
	public function get_capability() {
		return 'edit_posts';
	}

	public function get_label() {
		return 'hidden-item-label';
	}

	public function get_parent_slug() {
		return 'top-level-menu-item';
	}

	public function get_position() {
		return null;
	}

	public function is_visible() {
		return false;
	}
}
