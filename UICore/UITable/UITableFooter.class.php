<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 23/03/2016
	 * Time: 09:24
	 */

	namespace phpHTML\UICore\UITable;


	use phpHTML\HTMLObject;

	/**
	 * Class UITableHeader
	 *
	 * @author Oliver Binns
	 * @package phpHTML\UICore\UITable
	 */
	class UITableFooter extends HTMLObject{
		/** @var UITableRow $row The row of headings */
		private $row;

		/**
		 * UITableHeader constructor.
		 *
		 * @param UITableRow $row An array of headings to be present in this table.
		 * @param array $classes Classes for use with CSS and Javascript
		 * @param string $id HTML ID Attribute
		 * @param string $on_click Javascript function to be run when the object is clicked
		 */
		public function __construct($row = null, $classes = [], $id = '', $on_click = ''){
			parent::__construct($classes, $id, $on_click);
			if($row instanceof UITableRow){
				$this->row = $row;
			}else if(is_array($row)){
				$this->row = new UITableRow($row);
			}
		}

		/**
		 * Returns the HTML string for this object
		 *
		 * @throws \Exception
		 * @return string HTML string
		 */
		public function __toString(){
			$html = '<thead' . parent::__toString() . '>';
			if($this->row instanceof UITableCell){
				$html .= $this->row;
			}else{
				throw new \Exception("");
			}
			$html .= '</thead>';
			return $html;
		}
	}