<?php
	/**
	 * Created by PhpStorm.
	 * User: oliver.binns
	 * Date: 08/04/2016
	 * Time: 9:43 AM
	 */
	
	namespace phpHTML\UICore\UIPage;
	
	
	use phpHTML\HTMLObject;
	use phpHTML\UICore\UIList;
	use phpHTML\UICore\UIDiv;

	/**
	 * Class UINav
	 * This class is used for generating a standard bootstrap navigation bar.
	 *
	 * @author  Oliver Binns
	 * @package phpHTML\UICore\UIPage
	 */
	class UINav extends HTMLObject{
		/** @var bool $inverse Determines whether the navigation bar colours are inversed (i.e. black instead of white) */
		private $inverse;
		/** @var int $fixed Determines whether the navigation bar is fixed, and whether this is to the top or the bottom of the screen */
		private $fixed;
		/** @var string $brand_name The name of the website, to be displayed in the navigation bar */
		private $brand_name;
		/** @var array $left_links The links to show on the left hand side of the navigation bar, next to branding */
		private $left_links;
		/** @var bool Whether the navigation bar should automatically collapse for smaller screens */
		private $collapse;

		const FIXED_NONE = 0;
		const FIXED_TOP = 1;
		const FIXED_BOTTOM = 2;


		/**
		 * UINav constructor.
		 *
		 * @param string       $brand_name The name of the website, to be displayed in the navigation bar
		 * @param array        $left_links The links to show on the left hand side of the navigation bar, next to branding
		 * @param array|string $classes    Classes for use with CSS and Javascript
		 * @param int          $fixed      Determines whether the navigation bar is fixed, and whether this is to the top or the bottom of the screen
		 * @param bool         $collapse   Whether the navigation bar should automatically collapse for smaller screens
		 * @param bool         $inverse    Determines whether the navigation bar colours are inversed (i.e. black instead of white)
		 * @param string       $id         HTML ID Attribute
		 * @param string       $on_click   Javascript function to be run when the object is clicked
		 */
		public function __construct($brand_name, $left_links = [], $classes = [], $fixed = UINav::FIXED_NONE, $collapse = true, $inverse = false, $id = '', $on_click = ''){
			parent::__construct($classes, $id, $on_click);
			$this->brand_name = $brand_name;
			$this->left_links = $left_links;
			$this->fixed = $fixed;
			$this->inverse = $inverse;
			$this->collapse = $collapse;
			$this->addClasses();
		}

		/**
		 * Returns the HTML string for this object
		 * @return string HTML string
		 */
		public function __toString(){
			$this->addClasses();

			$list = new UIList($this->left_links, ['nav', 'navbar-nav']);
			if($this->collapse){
				$list = new UIDiv($list, ['collapse navbar-collapse']);
			}

			$html = '<nav'.parent::__toString().'>';
			$html .= new UIDiv([new UIDiv([$this->brand_name], 'navbar-header'), $list], 'container-fluid');
			$html .= '</nav>';
			return $html;
		}

		/**
		 * Adds the classes needed for the attributes of this object that have been set- i.e. whether to inverse the
		 * navigation bar.
		 */
		private function addClasses(){
			$this->addClass('navbar');
			$this->removeClass('navbar-default');
			$this->removeClass('navbar-inverse');
			if($this->inverse){
				$this->addClass('navbar-inverse');
			}
			else{
				$this->addClass('navbar-default');
			}

			$this->removeClass('navbar-fixed-top');
			$this->removeClass('navbar-fixed-bottom');
			if($this->fixed === UINav::FIXED_TOP){
				$this->addClass('navbar-fixed-top');
			}
			else{
				if($this->fixed === UINav::FIXED_BOTTOM){
					$this->addClass('navbar-fixed-bottom');
				}
			}
		}
	}