<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 07/04/2016
	 * Time: 22:41
	 */
	namespace phpHTML\UICore;

	use phpHTML\HTMLObject;

	/**
	 * Class UISpan
	 *
	 * @author Oliver Binns
	 * @package phpHTML\UICore
	 */
	class UISpan extends UIView
	{
		/**
		 * UISpan constructor.
		 *
		 * @param array|string $contents The content of this HTML division.
		 * @param string       $id       HTML ID Attribute
		 * @param array        $classes  Classes for use with CSS and Javascript
		 */
		public function __construct($contents = [], $classes = [], $id = ''){
			parent::__construct('span', $contents, $classes, $id);
		}
	}