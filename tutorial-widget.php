<?php
/**
 * Plugin Name:     Tutorial Widget
 * Description:     Display Tutorial Widget into Dashboard
 * Version:         1.0.0
 * Author:          Ippei Sumida
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     tutorial-widget
 *
 * @package         tutorial-widget
 */

if ( is_admin() ) {
	require_once( __DIR__ . '/src/class.tutorial-dashboard.php' );
	require_once( __DIR__ . '/src/class.tutorial-widget.php' );
	require_once( __DIR__ . '/src/class.tutorial-widget-factory.php' );
	$dashboard        = new \Ippey\TutorialWidget\TutorialDashboard();
	$factory          = new \Ippey\TutorialWidget\TutorialWidgetFactory();
	$config_file_path = __DIR__ . '/config/settings.json';
	$config           = json_decode( file_get_contents( $config_file_path ), true );
	foreach ( $config['widgets'] as $data ) {
		$widget = $factory->create_with_data( $data );
		$dashboard->add_widget( $widget );
	}
}
