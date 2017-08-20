<?php
/**
 * Part of Flower project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

namespace Flower;

use Phoenix\Language\TranslatorHelper;
use Phoenix\Script\BootstrapScript;
use Windwalker\Core\Asset\Asset;
use Windwalker\Core\Package\AbstractPackage;
use Windwalker\Core\Router\MainRouter;
use Windwalker\Debugger\Helper\DebuggerHelper;
use Windwalker\Filesystem\Folder;
use Windwalker\Router\Exception\RouteNotFoundException;

if (!defined('PACKAGE_FLOWER_ROOT'))
{
	define('PACKAGE_FLOWER_ROOT', __DIR__);
}

/**
 * The FlowerPackage class.
 *
 * @since  1.0
 */
class FlowerPackage extends AbstractPackage
{
	/**
	 * initialise
	 *
	 * @throws  \LogicException
	 * @return  void
	 */
	public function boot()
	{
		parent::boot();

		// Add your own boot logic
	}

	/**
	 * prepareExecute
	 *
	 * @return  void
	 */
	protected function prepareExecute()
	{
		$this->checkAccess();

		// Assets
		BootstrapScript::css();
		BootstrapScript::script();
		BootstrapScript::fontAwesome();
		Asset::addCSS($this->name . '/css/flower.css');

		// Language
		TranslatorHelper::loadAll($this, 'ini');
	}

	/**
	 * checkAccess
	 *
	 * @return  void
	 *
	 * @throws  RouteNotFoundException
	 * @throws  \Exception
	 */
	protected function checkAccess()
	{
		// Add your access checking
	}

	/**
	 * postExecute
	 *
	 * @param string $result
	 *
	 * @return  string
	 */
	protected function postExecute($result = null)
	{
		if (WINDWALKER_DEBUG)
		{
			if (class_exists(DebuggerHelper::class))
			{
				DebuggerHelper::addCustomData('Language Orphans', '<pre>' . TranslatorHelper::getFormattedOrphans() . '</pre>');
			}
		}

		return $result;
	}

	/**
	 * loadRouting
	 *
	 * @param MainRouter $router
	 * @param string     $group
	 *
	 * @return MainRouter
	 */
	public function loadRouting(MainRouter $router, $group = null)
	{
		$router = parent::loadRouting($router, $group);

		$router->group($group, function (MainRouter $router)
		{
			$router->addRouteFromFiles(Folder::files(__DIR__ . '/Resources/routing'), $this->getName());

			// Merge other routes here...
		});

		return $router;
	}
}
