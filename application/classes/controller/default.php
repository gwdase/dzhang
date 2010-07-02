<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Default extends Controller_Website {

	public function action_index()
	{
		$this->template->meta_title = __('taoE管理平台v1.0');
		$this->template->meta_keywords = __('taoE管理平台v1.0');
		$this->template->meta_description = __('taoE管理平台v1.0');
		$this->template->content = View::factory(i18n::$lang.'/content');
	}

}
