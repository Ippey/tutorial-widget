<?php


namespace Ippey\TutorialWidget;


/**
 * Class TutorialWidget
 * @package Ippey\TutorialDashboard
 * @property $id
 * @property $title
 * @property $content
 */
class TutorialWidget
{
	public int $id;
	public string $title;
	public string $content;

	/**
	 * @return string
	 */
	public function get_widget_name(): string
	{
		return 'tutorial_widget_' . $this->id;
	}

	public function print_content():void
	{
		echo $this->content;
	}
}
