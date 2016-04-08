<?php
	/**
	 * Created by PhpStorm.
	 * User: oliver.binns
	 * Date: 08/04/2016
	 * Time: 11:55 AM
	 */
	
	namespace phpHTML\UICore;
	
	/**
	 * Class UIDiv
	 * Generates a new <div> tag
	 *
	 * @author  Oliver Binns
	 * @package phpHTML\UICore
	 */
	class UIDiv extends UIView{
		/**
		 * UIDiv constructor.
		 *
		 * @param array|string $contents The content of this HTML division.
		 * @param string       $id       HTML ID Attribute
		 * @param array        $classes  Classes for use with CSS and Javascript
		 */
		public function __construct($contents = [], $classes = [], $id = ''){
			parent::__construct('div', $contents, $classes, $id);
		}
	}