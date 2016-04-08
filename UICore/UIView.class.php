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
	 * @author  Oliver Binns
	 * @package phpHTML\UICore
	 */
	abstract class UIView extends HTMLObject{
		/** @var array $contents Array of strings or HTMLObjects */
		private $contents;
		/** @var string $tag The HTML tag that should be used here, i.e. div, span, etc. */
		private $tag;

		/**
		 * UIView constructor.
		 *
		 * @param string       $tag      The HTML tag that should be used here, i.e. div, span, etc.
		 * @param array|string $contents The content of this HTML division.
		 * @param string       $id       HTML ID Attribute
		 * @param array        $classes  Classes for use with CSS and Javascript
		 */
		public function __construct($tag = '', $contents = [], $classes = [], $id = ''){
			parent::__construct($classes, $id);
			$this->tag = $tag;
			if(!is_array($contents)){
				$contents = [$contents];
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
		 *
		 * @param string|HTMLObject $object HTMLObject or string to add inside the div
		 */
		public function addContent($object){
			array_push($this->contents, $object);
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = '<' . $this->tag .parent::__toString().'>';
			foreach($this->contents as $content){
				$html .= $content;
			}
			$html .= "</{$this->tag}>";
			return $html;
		}
	}