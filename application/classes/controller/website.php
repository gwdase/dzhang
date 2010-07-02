<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Website extends Controller_Template
{
	public $template = 'layout';

	public function before()
	{
		parent::before();

		i18n::$lang = Request::instance()->param( 'lang' );

		if ($this->auto_render)
		{
			$this->template->meta_title = '';
			$this->template->meta_keywords = '';
			$this->template->meta_description = '';
			$this->template->content = '';
		
			$this->template->styles = array();
			$this->template->scripts = array();
		}
	}

	public function after()
	{
		if ($this->auto_render)
		{
			$styles = array(
				'media/css/screen.css' => 'screen, projection',
				'media/css/print.css' => 'print',
				'media/css/style.css' => 'screen',
			);
  
			$scripts = array(
				'media/js/jquery-core-min.js',
			);
		
			$this->template->styles = array_merge($this->template->styles, $styles);
			$this->template->scripts = array_merge($this->template->scripts, $scripts);
		}
		parent::after();
	}
}
