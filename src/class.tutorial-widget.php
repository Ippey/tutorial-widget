<?php


namespace Ippey\TutorialWidget;


/**
 * Class TutorialWidget
 * @package Ippey\TutorialDashboard
 * @property $id
 * @property $title
 * @property $content
 */
class TutorialWidget {
	public int $id;
	public string $title;
	public string $content;

	/**
	 * get widget name
	 * @return string
	 */
	public function get_widget_name(): string {
		return 'tutorial_widget_' . $this->id;
	}

	/**
	 * print content
	 */
	public function print_content(): void {
		echo $this->content;
	}
}
