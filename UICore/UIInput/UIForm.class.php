<?php
	/**
	 * Created by PhpStorm.
	 * User: oliver.binns
	 * Date: 14/04/2016
	 * Time: 3:11 PM
	 */
	
	namespace phpHTML\UICore\UIInput;

	use phpHTML\HTMLObject;

	/**
	 * Class UIForm
	 * An input form
	 *
	 * @author Oliver Binns
	 * @package phpHTML\UICore\UIInput
	 */
	class UIForm extends HTMLObject{
		private $method;
		private $action;
		private $input_objects;
		private $enc_type;

		public function __construct($input_objects = [], $action = '', $method = 'POST', $classes = [], $id = '', $on_click = '', $enc_type = 'application/x-www-form-urlencoded'){
			parent::__construct($classes, $id, $on_click);
			$this->method = $method;
			$this->action = $action;
			$this->input_objects = $input_objects;
			$this->enc_type = $enc_type;
		}

		public function __toString(){
			$html = '<form';
			$html .= parent::__toString();
			if(!empty($this->method)){
				$html .= " method='{$this->method}'";
			}
			if(!empty($this->action)){
				$html .= " action='{$this->action}'";
			}
			if(!empty($this->enc_type) && $this->method === 'POST'){
				$html .= " enctype='{$this->enc_type}'";
			}
			$html .= '>';
			foreach($this->input_objects as $input_object){
				$html .= $input_object;
			}
			$html .= '</form>';

			return $html;
		}
	}