<?php
	/**
	 * Created by PhpStorm.
	 * User: oliver.binns
	 * Date: 08/04/2016
	 * Time: 2:10 PM
	 */
	
	namespace phpHTML\UICore\UIInput;
	
	/**
	 * Class UITextBox
	 *
	 * @author  Oliver Binns
	 * @package phpHTML\UICore\UIInput
	 */
	class UITextInput extends UIInput{
		/**
		 * @var string $placeholder A placeholder text string to be displayed in the text box
		 */
		private $placeholder;
		
		/**
		 * UITextBox constructor.
		 *
		 * @param string $type        The type of input, i.e. text
		 * @param string $value       The value that the input should start with on page load
		 * @param string $name        The name of the input element- needed for submitting a form
		 * @param string $placeholder A placeholder text string to be displayed in the text box
		 * @param string $on_change   Javascript function to be run when the input is changed
		 * @param bool   $disabled    True if this input should not be editable by the user
		 * @param array  $classes     Classes for use with CSS and Javascript
		 * @param string $id          HTML ID Attribute
		 */
		public function __construct($type = 'text', $value = '', $name = '', $placeholder = '', $on_change = '', $disabled = false, $classes = ['form-control'], $id = ''){
			parent::__construct($type, $value, $name, $on_change, $disabled, $classes, $id);
			$this->placeholder = $placeholder;
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