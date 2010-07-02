<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Default extends Controller_Website {

    public function before()
    {
		parent::before();
		//$this->test_model = new Model_test;
	}

	public function action_index()
	{
		/*$result = DB::select()
			 ->from('test')
             //->where('id','=', $this->request->param('id'))
		     ->as_object()
			 ->execute();
			 //->current();
			 //->as_array();
		//var_dump($result);*/
		//$result =	$this->test_model->save();
		//var_dump($result);

		$this->template->meta_title = __('taoE管理平台v1.0');
		$this->template->meta_keywords = __('taoE管理平台v1.0');
		$this->template->meta_description = __('taoE管理平台v1.0');
		$this->template->content = View::factory(i18n::$lang.'/content');
	}

}
