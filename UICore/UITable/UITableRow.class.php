<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 24/03/2016
	 * Time: 10:26
	 */

	namespace phpHTML\UICore\UITable;

	use phpHTML\HTMLObject;

	/**
	 * Class UITableRow
	 *
	 * @author  Oliver Binns
	 * @package phpHTML\UICore\UITable
	 */
	class UITableRow extends HTMLObject{
		/** @var array $columns An array of headings to be present in this table. */
		private $columns;

		/**
		 * UITableHeader constructor.
		 *
		 * @param array  $columns  An array of headings to be present in this table.
		 * @param array  $classes  Classes for use with CSS and Javascript
		 * @param string $id       HTML ID Attribute
		 * @param string $on_click Javascript function to be run when the object is clicked
		 */
		public function __construct($columns = [], $classes = [], $id = '', $on_click = ''){
			parent::__construct($classes, $id, $on_click);
			$this->columns = $columns;
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = '<tr' . parent::__toString() . '>';
			foreach($this->columns as $column){
				if($column instanceof UITableCell){
					$html .= $column;
				}else{
					$html .= new UITableCell($column);
				}
			}
			$html .= '</tr>';
			return $html;
		}
	}