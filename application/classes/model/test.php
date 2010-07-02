<?php defined('SYSPATH') or die('No direct script access.');

class Model_Test extends ORM
{
    private $test_table = 'test';
	protected $sorting = array('id' => 'desc');

    public function save()
    {
	    /*$demo = ORM::factory('demo');
      $demo->title = 'Joe';
			$demo->save();*/
	  $posts = ORM::factory('test');
	  //$tag = ORM::factory('tag');
	  //$tag = $posts->tag->find_all();
	  //var_dump($posts->has('tags', $tag));
      //$posts->select('*')->where('category_id','=',2)->find_all(10,0);
	  //$posts->add('tag', $tag);
      /*$posts = DB::select()
	      ->from('posts')
             //->where('id','=', $this->request->param('id'))
		  ->as_object()
		  ->execute();*/
	   return $posts;
		
   }
}