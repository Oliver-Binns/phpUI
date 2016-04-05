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
	class UITextBox extends UIInput{
		/**
		 * @var string $placeholder A placeholder text string to be displayed in the text box
		 */
		private $placeholder;

		/**
		 * UITextBox constructor.
		 *
		 * @param string $value       The value that the input should start with on page load
		 * @param string $name        The name of the input element- needed for submitting a form
		 * @param string $placeholder A placeholder text string to be displayed in the text box
		 * @param bool   $disabled    True if this input should not be editable by the user
		 * @param string $id          HTML ID Attribute
		 */
		public function __construct($value = '', $name = '', $placeholder = '', $disabled = false, $id = ''){
			parent::__construct('text', $value, $name, $disabled, $id);
		}

		/**
		 * Accessor
		 *
		 * @return string A placeholder text string to be displayed in the text box
		 */
		public function getPlaceholder(){
			return $this->placeholder;
		}

		/**
		 * Mutator
		 *
		 * @param string $placeholder A placeholder text string to be displayed in the text box
		 */
		public function setPlaceholder($placeholder){
			$this->placeholder = $placeholder;
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = substr(parent::__toString(), 0, -1);
			if(!empty($this->placeholder)){
				$html .= " placeholder='{$this->placeholder}'";
			}
			$html .= '>';

			return $html;
		}
	}