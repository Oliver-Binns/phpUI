<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 15/04/2016
	 * Time: 23:28
	 */
	
	namespace phpHTML\UICore;
	
	/**
	 * Class UIHeading
	 * Generates a <h1> - <h5> tag.
	 *
	 * @author  Oliver Binns
	 * @package phpHTML\UICore
	 */
	class UIHeading extends UIView{
		/**
		 * UIHeading constructor.
		 *
		 * @param int          $size     The size of the heading, from 1 - 5.
		 * @param array|string $contents The content of this HTML division.
		 * @param string       $id       HTML ID Attribute
		 * @param array        $classes  Classes for use with CSS and Javascript
		 */
		public function __construct($size = 1, $contents = [], $classes = [], $id = ''){
			parent::__construct('h'.$size, $contents, $classes, $id);
		}
	}