<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 01/03/2016
	 * Time: 21:44
	 */

	namespace phpHTML\UICore\UITable;

	use phpHTML\HTMLObject;

	/**
	 * Class UITable
	 *
	 * @author Oliver Binns
	 * @package phpHTML\UICore\UITable
	 */
	class UITable extends HTMLObject{
		/**
		 * @var UITableHeader $header The header object for this table.
		 */
		private $header;

		/**
		 * @var UITableBody $body The body object for this table.
		 */
		private $body;

		/**
		 * @var UITableFooter $footer The footer object for this table.
		 */
		private $footer;

		/**
		 * UITable constructor.
		 *
		 * @param UITableHeader $header The header object for this table.
		 * @param UITableBody $body The body object for this table.
		 * @param UITableFooter $footer The footer object for this table.
		 * @param array $classes Classes for use with CSS and Javascript
		 * @param string $id HTML ID Attribute
		 * @param string $on_click Javascript function to be run when the object is clicked
		 */
		public function __construct($header = null, $body = null, $footer = null, $classes = [], $id = '', $on_click = ''){
			parent::__construct($classes, $id, $on_click);
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = '<table ' . parent::__toString() . '>';
			$sections = [$this->header, $this->body, $this->footer];
			foreach($sections as $section){
				if(!empty($section)){
					$html .= $section;
				}
			}
			$html .= '</table>';
			return $html;
		}

		/**
		 * Accessor
		 * @return UITableHeader The header object for this table.
		 */
		public function getHeader(){
			return $this->header;
		}

		/**
		 * Accessor
		 * @return UITableBody The body object for this table.
		 */
		public function getBody(){
			return $this->body;
		}

		/**
		 * Accessor
		 * @return UITableFooter The footer object for this table.
		 */
		public function getFooter(){
			return $this->footer;
		}

		/**
		 * Mutator
		 * @param UITableHeader $header The header object for this table.
		 */
		public function setHeader($header){
			$this->header = $header;
		}

		/**
		 * Mutator
		 * @param UITableBody $body The body object for this table.
		 */
		public function setBody($body){
			$this->body = $body;
		}

		/**
		 * Mutator
		 * @param UITableFooter $footer The footer object for this table.
		 */
		public function setFooter($footer){
			$this->footer = $footer;
		}
	}