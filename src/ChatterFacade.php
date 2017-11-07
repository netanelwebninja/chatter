<?php
/**
 * Created by PhpStorm.
 * User: netaneledri
 * Date: 08/11/2017
 * Time: 0:13
 */

namespace WEBNinja\Chatter;


use Illuminate\Support\Facades\Facade;

class ChatterFacade extends Facade
{
	public static function getFacadeAccessor()
	{
		return 'chatter';
	}
}