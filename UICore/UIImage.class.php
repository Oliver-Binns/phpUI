<?php
	/**
	 * Created by PhpStorm.
	 * User: oliver.binns
	 * Date: 07/04/2016
	 * Time: 5:36 PM
	 */
	
	namespace phpHTML\UICore;
	
	
	use phpHTML\HTMLObject;

	/**
	 * Class UIImage
	 * Used for generating an image <img>
	 *
	 * @author  Oliver Binns
	 * @package phpHTML\UICore
	 */
	class UIImage extends HTMLObject{
		/** @var string $src The URL where we can find the image we want to display */
		private $src;

		/**
		 * UIView constructor.
		 *
		 * @param string $src     The URL where we can find the image we want to display
		 * @param string $id      HTML ID Attribute
		 * @param array  $classes Classes for use with CSS and Javascript
		 */
		public function __construct($src = '/img/not-found.png', $classes = [], $id = ''){
			parent::__construct($classes, $id);
			$this->src = $src;
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = '<img'.parent::__toString();
			if(!empty($this->src)){
				$html .= "src='{$this->src}'";
			}
			$html .= '>';
			return $html;
		}
	}