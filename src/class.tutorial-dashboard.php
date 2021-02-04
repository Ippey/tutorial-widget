<?php

namespace Ippey\TutorialWidget;

/**
 * Class TutorialDashboard
 * @package Ippey\TutorialWidget
 */
class TutorialDashboard {
	/**
	 * TutorialDashboard constructor.
	 *
	 * @param array $options
	 */
	public function __construct( $options = array() ) {
		$this->options = $options;
	}

	/**
	 * @param TutorialWidget $widget
	 */
	public function add_widget( TutorialWidget $widget ) {
		add_action( 'wp_dashboard_setup', function () use ( $widget ) {
			wp_add_dashboard_widget(
				$widget->get_widget_name(),
				$widget->title,
				[ $widget, 'print_content' ]
			);
		} );
	}
}
