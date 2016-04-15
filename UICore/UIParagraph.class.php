<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 15/04/2016
	 * Time: 23:25
	 */
	
	namespace phpHTML\UICore;
	
	/**
	 * Class UIParagraph
	 *
	 * @author  Oliver Binns
	 * @package phpHTML\UICore
	 */
	class UIParagraph extends UIView{
		/**
		 * UIParagraph constructor.
		 * @param array|string $contents The content of this HTML division.
		 * @param string       $id       HTML ID Attribute
		 * @param array        $classes  Classes for use with CSS and Javascript
		 */
		public function __construct($contents = [], $classes = [], $id = ''){
			parent::__construct('p', $contents, $classes, $id);
		}
	}