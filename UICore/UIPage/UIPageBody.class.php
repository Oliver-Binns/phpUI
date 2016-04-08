<?php
	/**
	 * Created by PhpStorm.
	 * User: oliver.binns
	 * Date: 06/04/2016
	 * Time: 10:50 AM
	 */
	
	namespace phpHTML\UICore\UIPage;
	
	
	use phpHTML\HTMLObject;
	use phpHTML\JSCore\JSObject;

	class UIPageBody extends HTMLObject{
		/** @var array|string $contents Any content, such as divisions to be contained within the body of this page. */
		private $contents;
		/** @var array $js_links An array of JS links to load. These must be in the correct order. */
		private $js_links;

		/**
		 * UIPageBody constructor.
		 *
		 * @param array|string $contents Any additional contents, such as meta data or favicons
		 * @param array        $js_links An array of JS links to load. These must be in the correct order.
		 * @param array        $classes  Classes for use with CSS and Javascript
		 * @param string       $id       HTML ID Attribute
		 */
		public function __construct($contents = [], $js_links = [], $classes = [], $id = ''){
			parent::__construct($classes, $id);
			$this->js_links = $js_links;
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
			$html = '<body'.parent::__toString().'>';
			foreach($this->contents as $content){
				$html .= $content;
			}
			foreach($this->js_links as $js_link){
				$html .= new JSObject('', $js_link);
			}
			$html .= '</body>';
			return $html;
		}
	}