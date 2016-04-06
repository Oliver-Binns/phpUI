<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 28/03/2016
	 * Time: 18:23
	 */
	namespace phpHTML\JSCore;

	use phpHTML\HTMLObject;

	/**
	 * Class JSObject
	 *
	 * @author Oliver Binns
	 * @package phpHTML\JSCore
	 */
	class JSObject extends HTMLObject
	{
		/** @var string $url The url where we can find a Javascript file */
		private $url;
		/** @var string $javascript Any javascript code to be run */
		private $javascript;
		/** @var string $type The type of Javascript code that is being used */
		private $type;

		/**
		 * JSObject constructor.
		 * @param string $javascript Any javascript code to be run
		 * @param string $url The url where we can find a Javascript file
		 * @param string $type HTML ID Attribute
		 * @param array $classes Classes for use with CSS and Javascript
		 * @param string $id HTML ID Attribute
		 */
		public function __construct($javascript = '', $url = '', $type = 'text/javascript', $classes = [], $id = '')
		{
			parent::__construct($classes, $id);
			$this->javascript = $javascript;
			$this->url = $url;
			$this->type = $type;
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString()
		{
			$html = "<script" . parent::__toString();
			$html .= " type='{$this->type}'";
			if(!empty($this->url)){
				$html .= " src='{$this->url}'";
			}
			$html .= '>';
			$html .= $this->javascript;
			$html .= '</script>';
			return $html;
		}

		/**
		 * Gets the link to a particular version of an open source library.
		 * CDNJS is used for all libraries.
		 * This currently works for jQuery, Twitter Bootstrap, Moment.js and Bootstrap Datepicker
		 * @param string $library A javascript libary, i.e. bootstrap, jQuery, etc.
		 * @param $version
		 *
		 * @throws \Exception Throws an exception if the given library is unknown.
		 *
		 * @return string Link to minified JS of library
		 */
		public static function libraryLink($library, $version){
			$library = strtolower($library);
			if(strpos($library, 'jquery') !== false){
				return "https://cdnjs.cloudflare.com/ajax/libs/jquery/{$version}/jquery.min.js";
			}else if(strpos($library, 'moment') !== false){
				return "https://cdnjs.cloudflare.com/ajax/libs/moment.js/{$version}/moment.min.js";
			}else if(strpos($library, 'bootstrap') !== false){
				if(strpos($library, 'datepicker') !== false){
					return "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/{$version}/js/bootstrap-datepicker.min.js";
				}else{
					return "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/{$version}/js/bootstrap.min.js";
				}
			}else{
				throw new \Exception('Link requested for unknown JS library.');
			}
		}
	}