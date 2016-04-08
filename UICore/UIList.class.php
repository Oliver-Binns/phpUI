<?php
	/**
	 * Created by PhpStorm.
	 * User: oliver.binns
	 * Date: 08/04/2016
	 * Time: 10:06 AM
	 */
	
	namespace phpHTML\UICore;

	use phpHTML\HTMLObject;

	class UIList extends HTMLObject{
		/** @var array $list_items Items present in the UI List. */
		private $list_items;
		/** @var int $list_type Whether this is an ordered list */
		private $list_type;

		const UNORDERED_LIST = 0;
		const ORDERED_LIST = 1;
		
		/**
		 * UIList constructor.
		 *
		 * @param array  $list_items Items present in the UI List
		 * @param array  $classes    Classes for use with CSS and Javascript
		 * @param int    $list_type  Whether this is an ordered list
		 * @param string $id         HTML ID Attribute
		 * @param string $on_click   Javascript function to be run when the object is clicked
		 */
		public function __construct($list_items = [], $classes = [], $list_type = UIList::UNORDERED_LIST, $id = '', $on_click = ''){
			parent::__construct($classes, $id, $on_click);

			$this->list_items = $list_items;
		}
		
		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			if($this->list_type === UIList::ORDERED_LIST){
				$html = '<ol';
			}
			else{
				$html = '<ul';
			}
			$html .= parent::__toString().'>';

			foreach($this->list_items as $list_item){
				if($list_item instanceof UIListItem){
					$html .= $list_item;
				}
				else{
					$html .= new UIListItem($list_item);
				}
			}

			if($this->list_type === UIList::ORDERED_LIST){
				$html .= '</ol>';
			}
			else{
				$html .= '</ul>';
			}
			return $html;
		}
	}