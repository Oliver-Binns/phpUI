<?php
	/**
	 * Created by PhpStorm.
	 * User: oliver.binns
	 * Date: 08/04/2016
	 * Time: 3:33 PM
	 */
	
	namespace phpHTML\UICore;
	
	
	use phpHTML\HTMLObject;

	/**
	 * Class UILink
	 * Generates HTML for a standard <a> link tag
	 *
	 * @author  Oliver Binns
	 * @package phpHTML\UICore
	 */
	class UILink extends HTMLObject{
		/** @var string $text Text to display, that should be linked. */
		private $text;
		/** @var string $link The target URL for the link (where we are linking to) */
		private $link;
		/** @var string $target Specifies where to open the linked document, i.e. blank, parent */
		private $target;

		/**
		 * UILink constructor.
		 *
		 * @param string $text     Text to display, that should be linked.
		 * @param string $link     The target URL for the link (where we are linking to)
		 * @param string $on_click Javascript function to be run when the object is clicked
		 * @param string $target   Specifies where to open the linked document, i.e. blank, parent
		 * @param array  $classes  Classes for use with CSS and Javascript
		 * @param string $id       HTML ID Attribute
		 */
		public function __construct($text, $link = '/', $on_click = '', $target = '', $classes = [], $id = ''){
			parent::__construct($classes, $id, $on_click);
			$this->text = $text;
			$this->link = $link;
			$this->target = $target;
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$html = '<a' . parent::__toString();
			if(!empty($this->target)){
				$html .= " target='{$this->target}'";
			}
			if(!empty($this->link)){
				$html .= " href='{$this->link}'";
			}
			$html .= '>' . $this->text . '</a>';
			return $html;
		}
	}