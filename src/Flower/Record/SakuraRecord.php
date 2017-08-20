<?php
/**
 * Part of Flower project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Flower\Record;

use Flower\Record\Traits\SakuraDataTrait;
use Flower\Table\Table;
use Windwalker\Event\Event;
use Windwalker\Record\Record;

/**
 * The SakuraRecord class.
 *
 * @since  1.0
 */
class SakuraRecord extends Record
{
	use SakuraDataTrait;

	/**
	 * Property table.
	 *
	 * @var  string
	 */
	protected $table = Table::SAKURAS;

	/**
	 * Property keys.
	 *
	 * @var  string
	 */
	protected $keys = 'id';

	/**
	 * onAfterLoad
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterLoad(Event $event)
	{
		// Add your logic
	}

	/**
	 * onAfterStore
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterStore(Event $event)
	{
		// Add your logic
	}

	/**
	 * onAfterDelete
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterDelete(Event $event)
	{
		// Add your logic
	}
}
