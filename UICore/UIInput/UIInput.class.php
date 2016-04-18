<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 15/02/2016
	 * Time: 09:25
	 */
	namespace phpHTML\UICore\UIInput;

	/**
	 * Class UIInput
	 * Top of HTML Input hierarchy every input element inherits from this (i.e. textbox, dropdown)
	 *
	 * @author  Oliver Binns
	 * @package phpHTML\UICore\UIInput
	 */
	abstract class UIInput extends UIInteractable{
		/** @var string $on_change Javascript function to be run when the input is changed */
		private $on_change;

		/**
		 * UIInput constructor.
		 * Initialise a new HTML Input object
		 *
		 * @param string $type      The type of input, i.e. text
		 * @param string $value     The value that the input should start with on page load
		 * @param string $name      The name of the input element- needed for submitting a form
		 * @param string $on_change Javascript function to be run when the input is changed
		 * @param bool   $disabled  True if this input should not be editable by the user
		 * @param array  $classes   Classes for use with CSS and Javascript
		 * @param string $id        HTML ID Attribute
		 */
		public function __construct($type = '', $value = '', $name = '', $on_change = '', $disabled = false, $classes = [], $id = ''){
			parent::__construct($type, $value, $name, $disabled, $classes, $id);
			$this->on_change = $on_change;
		}

		/**
		 * Accessor
		 * @return string Javascript function to be run when the input is changed
		 */
		public function getOnChange(){
			return $this->on_change;
		}

		/**
		 * Mutator
		 *
		 * @param string $on_change Javascript function to be run when the input is changed
		 */
		public function setOnChange($on_change){
			//Escape single quotes in HTML string- on click function will be echoed inside single quotes
			$this->on_change = str_replace("'", "\\'", $on_change);
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = '<input';
			$html .= parent::__toString();
			if(!empty($this->on_change)){
				$html .= " onchange='{$this->on_change}'";
			}
			$html .= '>';
			return $html;
		}
	}