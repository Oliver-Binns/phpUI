<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 01/03/2016
	 * Time: 19:09
	 */
	namespace phpHTML\UICore;

	use phpHTML\HTMLObject;

	/**
	 * Class UIListItem
	 *
	 * @author Oliver Binns
	 * @package phpHTML\UICore
	 */
	class UIListItem extends UIView
	{
		/**
		 * UIListItem constructor.
		 *
		 * @param array|string $contents The content of this HTML division.
		 * @param string       $id       HTML ID Attribute
		 * @param array        $classes  Classes for use with CSS and Javascript
		 */
		public function __construct($contents = [], $classes = [], $id = ''){
			parent::__construct('li', $contents, $classes, $id);
		}
	}