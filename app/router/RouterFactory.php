<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;


class RouterFactory
{

	/**
	 * @return Nette\Application\IRouter
	 */
	public static function createRouter()
	{
		$router = new RouteList;
		$router[] = new Route('[<locale=cs cs|en>/]admin/<action>', 'Admin:Homepage:default');
		$router[] = new Route('[<locale=cs cs|en>/]<presenter>/<action>', "Front:Homepage:default");
		return $router;
	}

}
