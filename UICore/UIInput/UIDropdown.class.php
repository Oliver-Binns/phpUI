<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 09/04/2016
	 * Time: 11:21
	 */
	
	namespace phpHTML\UICore\UIInput;
	
	
	class UIDropdown extends UIInput{
		/** @var array $dropdown_data The data (values and text) that should appear in the dropdown. */
		private $dropdown_data;

		/**
		 * UIDropdown constructor.
		 * @param array  $dropdown_data The data (values and text) that should appear in the dropdown.
		 * @param string $selected      The value that the dropdown should show on page load
		 * @param string $name          The name of the input element- needed for submitting a form
		 * @param string $on_change     Javascript function to be run when the input is changed
		 * @param bool   $disabled      True if this input should not be editable by the user
		 * @param array  $classes       Classes for use with CSS and Javascript
		 * @param string $id            HTML ID Attribute
		 */
		public function __construct($dropdown_data = [], $selected = '', $name = '', $on_change = '', $disabled = false, $classes = [], $id = ''){
			parent::__construct('select', $selected, $name, $on_change, $disabled, $classes, $id);
			$this->dropdown_data = $dropdown_data;
			$this->addClass('form-control');
			$this->addClass('input-sm');
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = '<select';
			$html .= substr(parent::__toString(), 6);

			foreach($this->dropdown_data as $dropdown_item){
				$selected = '';
				if(isset($dropdown_item['selected'])?$dropdown_item['selected']:false || $dropdown_item['value'] === $this->getValue()){
					$selected = 'selected';
				}

				$html .= "<option value='{$dropdown_item['value']}' {$selected}>";
				$html .= $dropdown_item['text'];
				$html .= '</option>';
			}

			$html .= '</select>';
			return $html;
		}
	}