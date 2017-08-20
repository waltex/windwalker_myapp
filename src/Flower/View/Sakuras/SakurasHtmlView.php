<?php
/**
 * Part of Flower project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Flower\View\Sakuras;

use Phoenix\Script\BootstrapScript;
use Phoenix\Script\PhoenixScript;
use Phoenix\View\GridView;
use Phoenix\View\ListView;

/**
 * The SakurasHtmlView class.
 * 
 * @since  1.0
 */
class SakurasHtmlView extends GridView
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'Sakuras';

	/**
	 * The fields mapper.
	 *
	 * @var  array
	 */
	protected $fields = [
		'pk'          => 'id',
		'title'       => 'title',
		'alias'       => 'alias',
		'state'       => 'state',
		'ordering'    => 'ordering',
		'author'      => 'created_by',
		'author_name' => 'user_name',
		'created'     => 'created',
		'language'    => 'language',
		'lang_title'  => 'lang_title'
	];

	/**
	 * The grid config.
	 *
	 * @var  array
	 */
	protected $gridConfig = [
		'order_column' => 'sakura.ordering'
	];

	/**
	 * Property simplePagination.
	 *
	 * @var  boolean
	 */
	protected $simplePagination = false;

	/**
	 * prepareData
	 *
	 * @param \Windwalker\Data\Data $data
	 *
	 * @see ListView
	 * ------------------------------------------------------
	 * @var  $data->state          \Windwalker\Registry\Registry
	 * @var  $data->items          \Windwalker\Data\DataSet
	 * @var  $data->pagination     \Windwalker\Core\Pagination\Pagination
	 * @var  $data->total          integer
	 * @var  $data->limit          integer
	 * @var  $data->start          integer
	 * @var  $data->page           integer
	 * 
	 * @see GridView
	 * ------------------------------------------------------
	 * @var  $data->filterForm     \Windwalker\Form\Form
	 * @var  $data->batchForm      \Windwalker\Form\Form
	 * @var  $data->filterBar      \Windwalker\Core\Widget\Widget
	 * @var  $data->showFilterBar  boolean
	 * @var  $data->grid           \Phoenix\View\Helper\GridHelper
	 *
	 * @return  void
	 */
	protected function prepareData($data)
	{
		parent::prepareData($data);

		$this->prepareScripts();
		$this->prepareMetadata();
	}

	/**
	 * prepareDocument
	 *
	 * @return  void
	 */
	protected function prepareScripts()
	{
		PhoenixScript::core();
		PhoenixScript::grid();
		PhoenixScript::chosen('select.hasChosen');
		PhoenixScript::multiSelect('#admin-form table', ['duration' => 100]);
		BootstrapScript::checkbox(BootstrapScript::FONTAWESOME);
		BootstrapScript::tooltip();
	}

	/**
	 * prepareMetadata
	 *
	 * @return  void
	 */
	protected function prepareMetadata()
	{
		$this->setTitle();
	}
}
