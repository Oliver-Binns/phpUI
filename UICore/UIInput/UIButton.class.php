<?php
	/**
	 * Created by PhpStorm.
	 * User: oliver.binns
	 * Date: 06/04/2016
	 * Time: 1:42 PM
	 */
	
	namespace phpHTML\UICore\UIInput;

	class UIButton extends UIInteractable{
		/** @var string $text The text to display on the button, i.e. 'Click Here' */
		private $text;

		/**
		 * UIButton constructor.
		 * Initialise a new HTML Input object
		 *
		 * @param string $text     The text to display on the button, i.e. 'Click Here'
		 * @param string $type     The type of button, i.e. button, submit, reset
		 * @param string $value    The value that the input should start with on page load
		 * @param string $name     The name of the input element- needed for submitting a form
		 * @param bool   $disabled True if this input should not be editable by the user
		 * @param array  $classes  Classes for use with CSS and Javascript
		 * @param string $id       HTML ID Attribute
		 */
		public function __construct($text = '', $value = '', $name = '', $disabled = false, $classes = ['btn', 'btn-sm', 'btn-primary'], $type = 'button', $id = ''){
			parent::__construct($type, $value, $name, $disabled, $classes, $id);
			$this->text = $text;
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = '<button'.parent::__toString().'>';
			$html .= $this->text;
			$html .= '</button>';
			return $html;
		}
	}