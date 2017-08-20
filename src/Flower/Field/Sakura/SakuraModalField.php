<?php
/**
 * Part of Flower project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Flower\Field\Sakura;

use Flower\Table\Table;
use Phoenix\Field\ModalField;

/**
 * The SakuraModalField class.
 *
 * @since  1.0
 */
class SakuraModalField extends ModalField
{
	/**
	 * Property table.
	 *
	 * @var  string
	 */
	protected $table = Table::SAKURAS;

	/**
	 * Property view.
	 *
	 * @var  string
	 */
	protected $view = 'sakuras';

	/**
	 * Property package.
	 *
	 * @var  string
	 */
	protected $package = 'flower';

	/**
	 * Property titleField.
	 *
	 * @var  string
	 */
	protected $titleField = 'title';

	/**
	 * Property keyField.
	 *
	 * @var  string
	 */
	protected $keyField = 'id';
}
