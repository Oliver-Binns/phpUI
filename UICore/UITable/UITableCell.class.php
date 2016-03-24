<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 24/03/2016
	 * Time: 10:22
	 */

	namespace phpHTML\UICore\UITable;

	use phpHTML\HTMLObject;

	/**
	 * Class UITableCell
	 * An individual cell for use as part of a UITable.
	 *
	 * @author  Oliver Binns
	 * @package phpHTML\UICore\UITable
	 */
	class UITableCell extends HTMLObject{
		/** @var array $contents Contents of this cell */
		private $contents;

		/**
		 * UITableCell constructor.
		 *
		 * @param array  $contents Contents of this cell
		 * @param array  $classes  Classes for use with CSS and Javascript
		 * @param string $id       HTML ID Attribute
		 * @param string $on_click Javascript function to be run when the object is clicked
		 */
		public function __construct($contents = [], $classes = [], $id = '', $on_click = ''){
			parent::__construct($classes, $id, $on_click);
			if(!is_array($this->contents)){
				$contents = [$contents];
			}
			$this->contents = $contents;
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = '<td>';
			echo $html .= '</td>';
			return $html;
		}
	}