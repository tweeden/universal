<?php

/**
 * Theme functions. Initializes the Vamtam Framework.
 *
 * @package  wpv
 */

$GLOBALS['wpv_theme_tested_up_to'] = '3.9.x';

require_once('vamtam/classes/framework.php');

new WpvFramework(array(
	'name' => 'church-event',
	'slug' => 'church-event'
));

// TODO remove next line when the editor is fully functional, to be packaged as a standalone module with no dependencies to the theme
define ('VAMTAM_EDITOR_IN_THEME', true); include_once THEME_DIR.'vamtam-editor/editor.php';

