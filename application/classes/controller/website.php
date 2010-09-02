<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Website extends Controller_Template
{
	public $template = 'layout';

	public function before()
	{
		parent::before();

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
				//'media/css/screen.css' => 'screen, projection',
				//'media/css/print.css' => 'print',
				'media/css/style.css' => 'screen',
				'media/js/smoothness/jquery-ui.css' => 'screen',
                                'media/js/jqgrid/css/ui.jqgrid.css' => 'screen',
			);
  
			$scripts = array(
				'media/js/jquery-core-min.js',
			    	'media/js/jquery-custom-nc.js',
				'media/js/jquery-ui-min.js',
				'media/js/jqgrid/js/i18n/grid.locale-cn.js',
				'media/js/jqgrid/js/jquery.jqGrid.min.js',
			);
		
			$this->template->styles = array_merge($this->template->styles, $styles);
			$this->template->scripts = array_merge($this->template->scripts, $scripts);
		}
		parent::after();
	}
}
