<?php
/**
 * Part of Flower project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Flower\Form\Sakura;

use Flower\Field\Sakura\SakuraListField;
use Flower\Field\Sakura\SakuraModalField;
use Phoenix\Form\PhoenixFieldTrait;
use Windwalker\Core\Form\AbstractFieldDefinition;
use Windwalker\Core\Language\Translator;
use Windwalker\Form\Form;
use Windwalker\Validator\Rule;

/**
 * The SakuraEditDefinition class.
 *
 * @since  1.0
 */
class EditDefinition extends AbstractFieldDefinition
{
	use PhoenixFieldTrait;

	/**
	 * Define the form fields.
	 *
	 * @param Form $form The Windwalker form object.
	 *
	 * @return  void
	 *
	 * @throws \InvalidArgumentException
	 */
	public function doDefine(Form $form)
	{
		// Basic fieldset
		$this->fieldset('basic', function(Form $form)
		{
			// ID
			$this->hidden('id');

			// Title
			$this->text('title')
				->label(Translator::translate('flower.sakura.field.title'))
				->addFilter('trim')
				->required(true);

			// Alias
			$this->text('alias')
				->label(Translator::translate('flower.sakura.field.alias'));

			// Image
			$this->text('image')
				->label(Translator::translate('flower.sakura.field.image'));

			// URL
			$this->text('url')
				->label(Translator::translate('flower.sakura.field.url'))
				->addValidator(Rule\UrlValidator::class)
				->set('class', 'validate-url');

			// Example: Sakura List
			$this->add('sakura_list', SakuraListField::class)
				->label('List Example')
				->addClass('hasChosen');

			// Example: Sakura Modal
			$this->add('sakura_modal', SakuraModalField::class)
				->label('Modal Example');
		});

		// Text Fieldset
		$this->fieldset('text', function(Form $form)
		{
			// Introtext
			$this->textarea('introtext')
				->label(Translator::translate('flower.sakura.field.introtext'))
				->rows(10);

			// Fulltext
			$this->textarea('fulltext')
				->label(Translator::translate('flower.sakura.field.fulltext'))
				->rows(10);
		});

		// Created fieldset
		$this->fieldset('created', function(Form $form)
		{
			// State
			$this->radio('state')
				->label(Translator::translate('flower.sakura.field.state'))
				->addClass('btn-group hasChosen')
				->defaultValue(1)
				->option(Translator::translate('phoenix.grid.state.published'), '1')
				->option(Translator::translate('phoenix.grid.state.unpublished'), '0');

			// Created
			$this->calendar('created')
				->label(Translator::translate('flower.sakura.field.created'));

			// Modified
			$this->calendar('modified')
				->label(Translator::translate('flower.sakura.field.modified'))
				->disabled();

			// Author
			$this->text('created_by')
				->label(Translator::translate('flower.sakura.field.author'));

			// Modified User
			$this->text('modified_by')
				->label(Translator::translate('flower.sakura.field.modifiedby'))
				->disabled();
		});
	}
}
