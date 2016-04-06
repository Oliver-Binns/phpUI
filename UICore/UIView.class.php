<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 01/03/2016
	 * Time: 19:09
	 */
	namespace phpHTML\UICore;

	use phpHTML\HTMLObject;

	/**
	 * Class UIView
	 *
	 * @author Oliver Binns
	 * @package phpHTML\UICore
	 */
	class UIView extends HTMLObject
	{
		/** @var array $contents Array of strings or HTMLObjects */
		private $contents;

		/**
		 * UIView constructor.
		 * @param array|string $contents The content of this HTML division.
		 * @param string $id HTML ID Attribute
		 * @param array $classes Classes for use with CSS and Javascript
		 */
		public function __construct($contents = [], $classes = [], $id = '')
		{
			parent::__construct($classes, $id);
			
			if(!is_array($contents)){
				$this->contents = [$contents];
			}
			$this->contents = $contents;
		}

		/**
		 * Clear the contents of this division
		 */
		public function clear(){
			$this->contents = [];
		}

		/**
		 * Add new content into the view
		 * @param string|HTMLObject $object HTMLObject or string to add inside the div
		 */
		public function addContent($object){
			array_push($this->contents, $object);
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString()
		{
			$html = '<div'. parent::__toString() .'>';
			foreach($this->contents as $content){
				$html .= $content;
			}
			$html .= '</div>';
			return $html;
		}
	}