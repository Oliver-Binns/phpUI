<?php
	/**
	 * Created by PhpStorm.
	 * User: oliver.binns
	 * Date: 06/04/2016
	 * Time: 10:08 AM
	 */
	namespace phpHTML\CSSCore;

	use phpHTML\HTMLObject;

	/**
	 * Class CSSObject
	 * This class allows you to easily generate HTML for displaying CSS style tags.
	 *
	 * @author Oliver Binns
	 * @package phpHTML\CSSCore
	 */
	class CSSObject extends HTMLObject{
		/** @var string $url The url where we can find an external CSS file */
		private $url;
		/** @var string $javascript Any javascript code to be run */
		private $css;
		/** @var string $type The type of Javascript code that is being used */
		private $type;

		/**
		 * CSSObject constructor.
		 * @param string $css Any javascript code to be run
		 * @param string $url The url where we can find a Javascript file
		 * @param string $type HTML ID Attribute
		 * @param array $classes Classes for use with CSS and Javascript
		 * @param string $id HTML ID Attribute
		 */
		public function __construct($css = '', $url = '', $type = 'text/css', $classes = [], $id = '')
		{
			parent::__construct($classes, $id);
			$this->css = $css;
			$this->url = $url;
			$this->type = $type;
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString()
		{
			if(!empty($this->url)){
				$html = "<link rel='stylesheet'".parent::__toString();
				$html .= " type='{$this->type}'";
				if(!empty($this->url)){
					$html .= " href='{$this->url}'";
				}
				$html .= '>';
			}else if(!empty($this->css)){
				$html = '<style'.parent::__toString().'>' . $this->css . '</style>';
			}else{
				$html = '';
			}
			return $html;
		}
	}