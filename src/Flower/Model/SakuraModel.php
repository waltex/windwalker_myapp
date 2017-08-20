<?php
/**
 * Part of Flower project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Flower\Model;

use Flower\Record\SakuraRecord;
use Phoenix\Model\AdminModel;
use Windwalker\Data\DataInterface;
use Windwalker\Record\Record;

/**
 * The SakuraModel class.
 * 
 * @since  1.0
 */
class SakuraModel extends AdminModel
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'Sakura';

	/**
	 * Property record.
	 *
	 * @var  string
	 */
	protected $record = 'Sakura';

	/**
	 * Property mapper.
	 *
	 * @var  string
	 */
	protected $mapper = 'Sakura';

	/**
	 * Property reorderConditions.
	 *
	 * @var  array
	 */
	protected $reorderConditions = [];

	/**
	 * Property reorderPosition.
	 *
	 * @var  string
	 */
	protected $reorderPosition = self::ORDER_POSITION_LAST;

	/**
	 * postGetItem
	 *
	 * @param DataInterface|SakuraRecord $item
	 *
	 * @return  void
	 */
	protected function postGetItem(DataInterface $item)
	{
		// Do some stuff
	}

	/**
	 * prepareRecord
	 *
	 * @param Record|SakuraRecord $record
	 *
	 * @return  void
	 */
	protected function prepareRecord(Record $record)
	{
		parent::prepareRecord($record);
	}

	/**
	 * postSaveHook
	 *
	 * @param Record|SakuraRecord $record
	 *
	 * @return  void
	 */
	protected function postSaveHook(Record $record)
	{
		parent::postSaveHook($record);
	}

	/**
	 * getReorderConditions
	 *
	 * @param Record|SakuraRecord $record
	 *
	 * @return  array  An array of conditions to add to ordering queries.
	 */
	public function getReorderConditions(Record $record)
	{
		return parent::getReorderConditions($record);
	}

	/**
	 * Method to set new item ordering as first or last.
	 *
	 * @param   Record|SakuraRecord $record   Item table to save.
	 * @param   string              $position `first` or other are `last`.
	 *
	 * @return  void
	 */
	public function setOrderPosition(Record $record, $position = self::ORDER_POSITION_LAST)
	{
		parent::setOrderPosition($record, $position);
	}
}
