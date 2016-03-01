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
	 * @author Oliver Binns
	 * @package phpHTML\UICore\UIInput
	 */
	abstract class UIInput extends HTMLObject
	{
		/** @var string $name The name of the input element- needed for submitting a form */
		private $name;
		/** @var bool $disabled True if this input should not be editable by the user */
		private $disabled;

		/**
		 * UIInput constructor.
		 * Initialise a new HTML Input object
		 *
		 * @param string $name The name of the input element- needed for submitting a form
		 * @param bool $disabled True if this input should not be editable by the user
		 * @param string $id HTML ID Attribute
		 */
		public function __construct($name = '', $disabled = false, $id = '')
		{
			parent::__construct($id);
			$this->setName($name);
			$this->setDisabled($disabled);
		}

		/**
		 * Accessor
		 * @return string The name of the input element- needed for submitting a form
		 */
		public function getName()
		{
			return $this->name;
		}

		/**
		 * Mutator
		 * @param string $name The name of the input element- needed for submitting a form
		 */
		public function setName($name)
		{
			$this->name = $name;
		}

		/**
		 * Accessor
		 * @return bool True if this input should not be editable by the user
		 */
		public function getDisabled()
		{
			return $this->disabled;
		}

		/**
		 * Mutator
		 * @param bool $disabled True if this input should not be editable by the user
		 */
		public function setDisabled($disabled)
		{
			$this->disabled = $disabled;
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString()
		{
			$html = parent::__toString();
			if(!empty($this->name)){
				$html.= " name='{$this->name}'";
			}
			if($this->disabled){
				$html .= ' disabled';
			}
			return $html;
		}
	}