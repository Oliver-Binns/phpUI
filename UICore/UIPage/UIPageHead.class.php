<?php
	/**
	 * Created by PhpStorm.
	 * User: oliver.binns
	 * Date: 06/04/2016
	 * Time: 10:20 AM
	 */
	
	namespace phpHTML\UICore\UIPage;

	use phpHTML\CSSCore\CSSObject;
	use phpHTML\HTMLObject;

	class UIPageHead extends HTMLObject{
		/** @var string $title The title of this page to be displayed in the page's tab on the browser. */
		private $title;
		/** @var array $css_links An array of CSS links to load. These must be in the correct order. */
		private $css_links;
		/** @var array|string $contents Any additional contents, such as meta data or favicons */
		private $contents;

		/**
		 * UIPageHead constructor.
		 *
		 * @param string       $title     The title of this page to be displayed in the page's tab on the browser.
		 * @param array        $css_links An array of CSS links to load. These must be in the correct order.
		 * @param array|string $contents  Any additional contents, such as meta data or favicons
		 * @param array        $classes   Classes for use with CSS and Javascript
		 * @param string       $id        HTML ID Attribute
		 */
		public function __construct($title = '', $css_links = [], $contents = [], $classes = [], $id = ''){
			parent::__construct($classes, $id);
			$this->title = $title;
			$this->css_links = $css_links;
			if(!is_array($contents)){
				$this->contents = [$contents];
			}
			$this->contents = $contents;
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = '<head'.parent::__toString().'>';
			if(!empty($this->title)){
				$html .= '<title>'.$this->title.'</title>';
			}
			foreach($this->css_links as $css_link){
				$html .= new CSSObject('', $css_link);
			}
			foreach($this->contents as $content){
				$html .= $content;
			}
			$html .= '</head>';
			return $html;
		}
	}