<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 15/02/2016
	 * Time: 09:25
	 */
	namespace phpHTML\UICore\UIInput;
	
	use phpHTML\HTMLObject;
	
	/**
	 * Class UIInput
	 * Top of HTML Input hierarchy every input element inherits from this (i.e. textbox, dropdown)
	 *
	 * @author  Oliver Binns
	 * @package phpHTML\UICore\UIInput
	 */
	abstract class UIInteractable extends HTMLObject{
		/** @var string $name The name of the input element- needed for submitting a form */
		private $name;
		/** @var string $value The value that the input should start with on page load */
		private $value;
		/** @var string $type The type of input, i.e. text */
		private $type;
		/** @var bool $disabled True if this input should not be editable by the user */
		private $disabled;
		
		/**
		 * UIInteractable constructor.
		 * Initialise a new HTML Input object
		 *
		 * @param string $type      The type of input, i.e. text
		 * @param string $value     The value that the input should start with on page load
		 * @param string $name      The name of the input element- needed for submitting a form
		 * @param bool   $disabled  True if this input should not be editable by the user
		 * @param array  $classes   Classes for use with CSS and Javascript
		 * @param string $id        HTML ID Attribute
		 */
		public function __construct($type = '', $value = '', $name = '', $disabled = false, $classes = [], $id = ''){
			$this->type = $type;
			parent::__construct($classes, $id);
			$this->setValue($value);
			$this->setName($name);
			$this->setDisabled($disabled);
		}
		
		/**
		 * Accessor
		 * @return string The value that the input should start with on page load
		 */
		public function getValue(){
			return $this->value;
		}
		
		/**
		 * Mutator
		 *
		 * @param string $value The value that the input should start with on page load
		 */
		public function setValue($value){
			$this->value = $value;
		}
		
		/**
		 * Accessor
		 * @return string The name of the input element- needed for submitting a form
		 */
		public function getName(){
			return $this->name;
		}
		
		/**
		 * Mutator
		 *
		 * @param string $name The name of the input element- needed for submitting a form
		 */
		public function setName($name){
			$this->name = $name;
		}
		
		/**
		 * Accessor
		 * @return bool True if this input should not be editable by the user
		 */
		public function getDisabled(){
			return $this->disabled;
		}
		
		/**
		 * Mutator
		 *
		 * @param bool $disabled True if this input should not be editable by the user
		 */
		public function setDisabled($disabled = true){
			$this->disabled = $disabled;
		}
		
		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = parent::__toString();
			$html .= " type='{$this->type}'";
			if(!empty($this->value)){
				$html .= " value='{$this->value}'";
			}
			if(!empty($this->name)){
				$html .= " name='{$this->name}'";
			}
			if($this->disabled){
				$html .= ' disabled';
			}
			return $html;
		}
	}