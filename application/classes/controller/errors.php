<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Errors extends Controller_Website
{
	public function action_404()
	{
		$this->template->meta_title .= 'Dzhang - Page Not Found';
		$this->template->meta_keywords .= '';
		$this->template->meta_description .= '';
		
		$this->template->styles = array('media/css/errors.css' => 'screen');

		$this->template->content = View::factory('errors/404');
	}
}
