<?php
/**
 * Cue�����޸İ�
 *
 * @package Cue
 * @author Brady Vercher
 * @copyright Copyright (c) 2014, AudioTheme, LLC
 * @license GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Cue�����޸İ�
 * Plugin URI: https://www.wichie.com
 * Description: ����Ư���ģ���ȫ��Ӧ����Ƶ�����б�
 * Version: 9.9.9
 * Author: Wichie��zhw-island,Audio theme
 * Author URI: https://www.wichie.com
 * License: GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: Cue�����޸İ�
 * Domain Path: /languages
 */

/**
 * Template loader.
 *
 * @package Cue
 * @since 1.0.0
 */
class Cue_Template_Loader extends Gamajo_Template_Loader {
	/**
	 * Prefix for filter names.
	 *
	 * @var string
	 */
	protected $filter_prefix = 'cue';

	/**
	 * Directory name where custom templates for this plugin should be found in the theme.
	 *
	 * @var string
	 */
	protected $theme_template_directory = 'cue';

	/**
	 * Reference to the root directory path of this plugin.
	 *
	 * @var string
	 */
	protected $plugin_directory = CUE_DIR;
}
