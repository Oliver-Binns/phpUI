<?php
	/**
	 * Created by PhpStorm.
	 * User: oliver.binns
	 * Date: 06/04/2016
	 * Time: 10:18 AM
	 */
	
	namespace phpHTML\UICore\UIPage;
	
	use phpHTML\HTMLObject;

	class UIPage extends HTMLObject{
		/** @var UIPageHead $header Page Head HTMLObject */
		private $header;
		/** @var UIPageBody UIPageBody $body Page Body HTMLObject */
		private $body;
		/** @var string $lang ISO 639-1 Language Code. Assists search engines and browsers. */
		private $lang;
		
		/**
		 * UIView constructor.
		 *
		 * @param UIPageHead $header  Page Head HTMLObject
		 * @param UIPageBody $body    Page Body HTMLObject
		 * @param array      $classes Classes for use with CSS and Javascript
		 * @param string     $id      HTML ID Attribute
		 * @param string     $lang    ISO 639-1 Language Code. Assists search engines and browsers.
		 */
		public function __construct($header, $body, $classes = [], $id = '', $lang = 'en-GB'){
			parent::__construct($classes, $id);
			$this->header = $header;
			$this->body = $body;
			$this->lang = $lang;
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = '<!doctype html><html'.parent::__toString().'lang="'.$this->lang.'">';
			if(!empty($this->header)){
				$html .= $this->header;
			}
			if(!empty($this->body)){
				$html .= $this->body;
			}
			$html .= '</html>';
			return $html;
		}
	}