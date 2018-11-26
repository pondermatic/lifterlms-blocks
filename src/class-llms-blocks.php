<?php
/**
 * Serverside block compononent registration
 *
 * @package  LifterLMS_Blocks/Classes
 * @since    [version]
 * @version  [version]
 */

defined( 'ABSPATH' ) || exit;

/**
 * LLMS_Blocks class
 */
class LLMS_Blocks {

	/**
	 * Constructor.
	 *
	 * @since    [version]
	 * @version  [version]
	 */
	public function __construct() {

		add_action( 'init', array( $this, 'init' ) );

	}

	/**
	 * Register all blocks & components.
	 *
	 * @return  void
	 * @since   [version]
	 * @version [version]
	 */
	public function init() {

		// Visibility Component.
		require_once 'visibility/class-llms-blocks-visibility.php';

		// Dynamic Blocks.
		require_once 'blocks/course-information/class-llms-blocks-course-information-block.php';
		require_once 'blocks/course-syllabus/class-llms-blocks-course-syllabus-block.php';
		require_once 'blocks/pricing-table/class-llms-blocks-pricing-table-block.php';

	}

}

return new LLMS_Blocks();