<?php


namespace Ippey\TutorialWidget;

/**
 * Class TutorialWidgetFactory
 * @package Ippey\TutorialWidget
 */
class TutorialWidgetFactory {
	/**
	 * create with data
	 *
	 * @param array $data
	 *
	 * @return TutorialWidget
	 */
	public function create_with_data( $data = [] ): TutorialWidget {
		$widget          = new TutorialWidget();
		$widget->title   = $data['title'] ?? '';
		$widget->id      = $data['id'] ?? '';
		$widget->content = $this->read_html( $data['filename'] );

		return $widget;
	}

	/**
	 * read html from filename
	 *
	 * @param $html_filename
	 *
	 * @return string|null
	 */
	public function read_html( $html_filename ): ?string {
		$dir       = plugin_dir_path( dirname( __FILE__ ) );
		$file_path = $dir . 'assets/' . $html_filename;

		return is_file( $file_path ) ? file_get_contents( $file_path ) : null;
	}

}
