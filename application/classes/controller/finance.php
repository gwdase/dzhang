<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Finance extends Controller_Website {

    public function before()
    {
	parent::before();
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
		$this->template->sidebar = View::factory(i18n::$lang.'/finance/sidebar');
		$this->template->content = View::factory(i18n::$lang.'/finance/content');
	}

	public function action_grid()
	{
		$responce->rows[0] = array(
	        'id' => 1,
	        'cell' => array(1,'title1','title2','title3','title4','title5','title6')
	    );
		$responce->rows[1] = array(
	        'id' => 2,
	        'cell' => array(2,'title11','title22','title33','title44','title55','title66')
	    );
        echo json_encode($responce);
		exit;
	}
}
