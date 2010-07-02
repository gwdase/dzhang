<?php defined('SYSPATH') or die('No direct script access.');

//-- Environment setup --------------------------------------------------------

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('Asia/Shanghai');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

//-- Configuration and initialization -----------------------------------------

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */
Kohana::init(array(
	'base_url'   => '/phpcode/dzhang/',
	'index_file' => FALSE,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Kohana_Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Kohana_Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	// 'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	// 'database'   => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	// 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'pagination' => MODPATH.'pagination', // Paging of results
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	));

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */
/*Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'index',
	));*/
if (! Route::cache())
{
	/*Route::set('examples', '(<lang>/)examples(/<controller>(/<action>(/<id>)))')
		->defaults(array(
		  'lang' => 'zh-cn', 
			'directory' => 'examples',
		));*/
  Route::set('default', '(<lang>/)(<controller>(/<action>(/<id>)))', array('lang' => '(en-us|zh-cn)','id' => '.+'))
	  ->defaults(array(
        'lang' => 'zh-cn', 
		'controller' => 'default',
		'action'     => 'index',
	  ));
  Route::set('catch_all', '<path>', array('path' => '.+'))
	  ->defaults(array(
		'controller' => 'errors',
		'action'     => '404',
	  ));
  Route::cache(TRUE);
}


/**
 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
 * If no source is specified, the URI will be automatically detected.
 */
$request = Request::instance();

try
{
	$request->execute()
		->send_headers();
}
catch (Exception $e)
{
	if ($request->status == 404 OR $e instanceof Kohana_Request_Exception)
	{
		$meta_title = 'Dzhang - Page Not Found';
		$view = View::factory('errors/404');
	}		
	else
	{
		$meta_title = 'Dzhang - Page Error';
		$view = View::factory('errors/500');
		Kohana::$log->add('500', $e);
	}		
		
	$request->response = View::factory('layout')
		->set('meta_title', $meta_title)
		->set('meta_keywords', '')
		->set('meta_description', '')
		->set('styles', array('media/css/style.css' => 'screen', 'media/css/errors.css' => 'screen'))
		->set('scripts', array())
		->set('content', $view);
}

echo $request->response;
/*echo Request::instance()
	->execute()
	->send_headers()
	->response;*/
