<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 05/04/2016
	 * Time: 21:29
	 */

	namespace phpHTML\UICore\UIInput;

	/**
	 * Class UICheckbox
	 * A simple HTML checkbox input class
	 *
	 * @author  Oliver Binns
	 * @package phpHTML\UICore\UIInput
	 */
	class UICheckbox extends UIInput{
		/** @var bool $checked Whether this checkbox is selected or not */
		private $checked;

		/**
		 * UICheckbox constructor.
		 *
		 * @param bool   $selected    Whether this checkbox is selected or not
		 * @param string $name        The name of the input element- needed for submitting a form
		 * @param string $placeholder A placeholder text string to be displayed in the text box
		 * @param bool   $disabled    True if this input should not be editable by the user
		 * @param string $value       The value that the input should start with on page load
		 * @param string $id          HTML ID Attribute
		 */
		public function __construct($selected = false, $name = '', $placeholder = '', $disabled = false, $value = '', $id = ''){
			parent::__construct('checkbox', $value, $name, $disabled, $id);
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = substr(parent::__toString(), 0, -1);
			if($this->checked){
				$html .= " checked";
			}
			$html .= '>';

			return $html;
		}
	}