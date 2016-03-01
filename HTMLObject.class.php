<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 15/02/2016
	 * Time: 09:17
	 */
	namespace phpHTML;

	/**
	 * Class HTMLObject
	 * Top of the phpUI Hierarchy - every HTML UI object inherits from this.
	 *
	 * Contains basic html attributes:
	 * -id
	 * -class
	 *
	 * @abstract
	 * @author Oliver Binns
	 * @package phpHTML
	 */
	abstract class HTMLObject
	{
		/** @var string $id HTML ID Attribute */
		private $id;
		/** @var array $classes Classes for use with CSS and Javascript */
		private $classes;

		/**
		 * HTMLObject constructor.
		 * @param string $id HTML ID Attribute
		 * @param array $classes Classes for use with CSS and Javascript
		 */
		public function __construct($classes = [], $id = '')
		{
			$this->setId($id);
			$this->classes = $classes;
		}

		/**
		 * Accessor
		 * @return string HTML ID Attribute
		 */
		public function getId()
		{
			return $this->id;
		}

		/**
		 * Mutator
		 * @param string $id HTML ID Attribute
		 */
		public function setId($id)
		{
			$this->id = $id;
		}

		/**
		 * Add a new class to this object
		 * @param string $class New class for use with CSS and Javascript
		 */
		public function addClass($class){
			if(!in_array($class, $this->classes)){
				array_push($this->classes, $class);
			}
		}

		/**
		 * Remove a class from this object
		 * @param string $class Class to remove
		 * @return bool Whether the object had the class originally
		 */
		public function removeClass($class){
			if (($key = array_search($class, $this->classes)) !== false) {
				unset($this->classes[$key]);
				return true;
			}
			return false;
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString()
		{
			$html = "";
			if(!empty($this->id)) {
				$html = " id='{$this->getId()}'";
			}
			if(!empty($this->classes)){
				$html = ' class=\'';
				foreach($this->classes as $class){
					$html.= $class . ' ';
				}
				$html.= '\'';
			}
			return $html;
		}
	}