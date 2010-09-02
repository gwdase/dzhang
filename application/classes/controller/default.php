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
		$this->template->sidebar = View::factory(i18n::$lang.'/business/sidebar');
		$this->template->content = View::factory(i18n::$lang.'/business/content');
	}

	public function action_grid()
	{
		$responce->rows[0] = array(
	        'id' => 1,
	        'cell' => array(1,'2010-1-1','发卡','个','2','20.00','40.00','是','')
	    );
		$responce->rows[1] = array(
	        'id' => 2,
	        'cell' => array(2,'2010-2-22','戒指','个','4','4.00','16.00','否','')
	    );
        echo json_encode($responce);
		exit;
	}
}
