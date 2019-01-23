<?php
/**
 * LifterLMS Add-On Testing Bootstrap
 *
 * @package LifterLMS_Blocks/Tests/Framework
 * @since   1.0.0
 * @version [version]
 */
class LLMS_Blocks_Unit_Test_Case extends LLMS_Unit_Test_Case {

	/**
	 * Enable / Disable classic editor plugin settings
	 * @param   array     $settings array of settings.
	 * @return  void
	 * @since   [version]
	 * @version [version]
	 */
	protected function update_classic_settings( $settings = array() ) {

		$settings = wp_parse_args( $settings, array(
			'editor' => 'classic',
			'allow-users' => 'disallow',
		) );

		update_option( 'classic-editor-replace', $settings['editor'] );
		update_option( 'classic-editor-allow-users', $settings['allow-users'] );

	}

}