<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 28/03/2016
	 * Time: 18:02
	 */

	namespace phpHTML\UICore\UIInput;
	use phpHTML\JSCore\JSObject;

	/**
	 * Class UIDatePicker
	 * Creates an instance of the Bootstrap Datepicker
	 * @link https://bootstrap-datepicker.readthedocs.org/en/latest/
	 *
	 * If using the Bootstrap textbox, please ensure you have added jQuery, Bootstrap and Bootstrap Datepicker javascript tags in the page head.
	 *
	 * @author Oliver Binns
	 * @package phpHTML\UICore\UIInput
	 */
	class UIDatePicker extends UITextBox{

		public function __toString(){
			$html = parent::__toString();
			$html .= new JSObject("$(document).ready(function(){\$(\"#{$this->getId()}\").datetimepicker();});");
			return $html;
		}
	}