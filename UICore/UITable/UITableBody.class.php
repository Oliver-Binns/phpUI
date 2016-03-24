<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 24/03/2016
	 * Time: 10:25
	 */

	namespace phpHTML\UICore\UITable;


	use phpHTML\HTMLObject;

	/**
	 * Class UITableBody
	 * The main body <tbody> section of a HTML table.
	 *
	 * @package phpHTML\UICore\UITable
	 */
	class UITableBody extends HTMLObject{
		/** @var array $rows Array of UITableRow objects that form this table body. */
		private $rows;

		/**
		 * UITableBody constructor.
		 *
		 * @param array  $rows Array of UITableRow objects that form this table body
		 * @param array  $classes Classes for use with CSS and Javascript
		 * @param string $id HTML ID Attribute
		 * @param string $on_click Javascript function to be run when the object is clicked
		 */
		public function __construct($rows = [], $classes = [], $id = '', $on_click = ''){
			parent::__construct($classes, $id, $on_click);
			if(!is_array($rows)){
				$rows = [$rows];
			}
			$this->rows = $rows;
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = '<tbody>';
			foreach($this->rows as $row){
				if($row instanceof UITableRow){
					$html .= $row;
				}else if(is_array($row)){
					$html .= new UITableRow($row);
				}
			}
			$html .= '</tbody>';
			return $html;
		}
	}