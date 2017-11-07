<?php
/**
 * Created by PhpStorm.
 * User: netaneledri
 * Date: 08/11/2017
 * Time: 0:32
 */

namespace WEBNinja\Chatter;

use Illuminate\Contracts\Routing\Registrar as Router;

class RouteRegistrar
{
	/**
	 * The router implementation.
	 *
	 * @var \Illuminate\Contracts\Routing\Registrar
	 */
	protected $router;

	/**
	 * Create a new route registrar instance.
	 *
	 * @param  \Illuminate\Contracts\Routing\Registrar  $router
	 * @return void
	 */
	public function __construct(Router $router)
	{
		$this->router = $router;
	}

	/**
	 * Register routes for transient tokens, clients, and personal access tokens.
	 *
	 * @return void
	 */
	public function all()
	{
		$this->router->get('/index', function(){
			return 'welcome to Chatter';
		});
	}
}