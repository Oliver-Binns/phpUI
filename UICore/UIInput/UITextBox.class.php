<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 01/03/2016
	 * Time: 19:32
	 */

	namespace phpHTML\UICore\UIInput;

	/**
	 * Class UITextBox
	 *
	 * @author  Oliver Binns
	 * @package phpHTML\UICore\UIInput
	 */
	class UITextBox extends UITextInput{
		/**
		 * UITextBox constructor.
		 *
		 * @param string $value       The value that the input should start with on page load
		 * @param string $name        The name of the input element- needed for submitting a form
		 * @param string $placeholder A placeholder text string to be displayed in the text box
		 * @param string $on_change Javascript function to be run when the input is changed
		 * @param bool   $disabled    True if this input should not be editable by the user
		 * @param array  $classes   Classes for use with CSS and Javascript
		 * @param string $id          HTML ID Attribute
		 */
		public function __construct($value = '', $name = '', $placeholder = '',  $on_change = '', $disabled = false, $classes = ['form-control'], $id = ''){
			parent::__construct('text', $value, $name, $placeholder, $on_change, $disabled, $classes, $id);
		}
	}