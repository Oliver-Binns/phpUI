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
	 * @author  Oliver Binns
	 * @package phpHTML
	 */
	abstract class HTMLObject{
		/** @var array $ids_used IDs must be unique, this array keeps track of which IDs have been printed already */
		protected static $ids_used = [];
		/** @var string $id HTML ID Attribute */
		private $id;
		/** @var array $classes Classes for use with CSS and Javascript */
		private $classes;
		/** @var string $on_click Javascript function to be run when the object is clicked */
		private $on_click;
		
		/**
		 * HTMLObject constructor.
		 *
		 * @param string       $id       HTML ID Attribute
		 * @param array|string $classes  Classes for use with CSS and Javascript
		 * @param string       $on_click Javascript function to be run when the object is clicked
		 */
		public function __construct($classes = [], $id = '', $on_click = ''){
			$this->setId($id);
			
			if(!is_array($classes)){
				$classes = explode(' ', $classes);
			}
			$this->classes = $classes;

			$this->on_click = $on_click;
		}
		
		/**
		 * Accessor
		 * @return string HTML ID Attribute
		 */
		public function getId(){
			return $this->id;
		}
		
		/**
		 * Mutator
		 *
		 * @param string $id HTML ID Attribute
		 */
		public function setId($id){
			$this->id = $id;
		}
		
		/**
		 * Accessor
		 * @return string Javascript function to be run when the object is clicked
		 */
		public function getOnClick(){
			return $this->on_click;
		}
		
		/**
		 * Mutator
		 *
		 * @param string $on_click Javascript function to be run when the object is clicked
		 */
		public function setOnClick($on_click){
			//Escape single quotes in HTML string- on click function will be echoed inside single quotes
			$this->on_click = str_replace("'", "\\'", $on_click);
		}
		
		/**
		 * Add a new class to this object
		 *
		 * @param string $class New class for use with CSS and Javascript
		 * @return HTMLObject Returns this object so that this can be chained
		 */
		public function addClass($class){
			if(!in_array($class, $this->classes)){
				array_push($this->classes, $class);
			}
			return $this;
		}
		
		/**
		 * Remove a class from this object
		 *
		 * @param string $class Class to remove
		 *
		 * @return bool Whether the object had the class originally
		 */
		public function removeClass($class){
			if(($key = array_search($class, $this->classes)) !== false){
				unset($this->classes[$key]);
				return true;
			}
			return false;
		}
		
		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$id = $this->getId();
			if(empty($id) || in_array($id, static::$ids_used)){   //ID has already been used.
				$i = $this->generateRandomId();
				while(in_array($id.$i, static::$ids_used)){
					$i = $this->generateRandomId();
				}
				$this->setId($id.$i);
			}
			
			$html = " id='{$this->getId()}'";
			if(!empty($this->on_click)){
				$html .= " onclick='{$this->getOnClick()}'";
			}
			if(!empty($this->classes)){
				$html .= ' class=\'';
				foreach($this->classes as $class){
					$html .= $class.' ';
				}
				$html .= '\'';
			}
			
			array_push(static::$ids_used, $this->getId());  //Log ID use
			
			return $html;
		}
		
		/**
		 * Generates a random ID for this object if it's empty or has already been used.
		 * @return string Randomly generated ID
		 */
		private static function generateRandomId(){
			return substr(md5(microtime()), rand(0, 26), 5);
		}
	}