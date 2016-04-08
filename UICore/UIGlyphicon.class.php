<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 07/04/2016
	 * Time: 18:13
	 */
	
	namespace phpHTML\UICore;

	class UIGlyphicon extends UISpan{
		const ASTERISK = ['glyphicon', 'glyphicon-asterisk'];
		const PLUS = ['glyphicon', 'glyphicon-plus'];
		const EURO = ['glyphicon', 'glyphicon-euro'];
		const EUR = ['glyphicon', 'glyphicon-eur'];
		const MINUS = ['glyphicon', 'glyphicon-minus'];
		const CLOUD = ['glyphicon', 'glyphicon-cloud'];
		const ENVELOPE = ['glyphicon', 'glyphicon-envelope'];
		const PENCIL = ['glyphicon', 'glyphicon-pencil'];
		const GLASS = ['glyphicon', 'glyphicon-glass'];
		const MUSIC = ['glyphicon', 'glyphicon-music'];
		const SEARCH = ['glyphicon', 'glyphicon-search'];
		const HEART = ['glyphicon', 'glyphicon-heart'];
		const STAR = ['glyphicon', 'glyphicon-star'];
		const STAR_EMPTY = ['glyphicon', 'glyphicon-star-empty'];
		const USER = ['glyphicon', 'glyphicon-user'];
		const FILM = ['glyphicon', 'glyphicon-film'];
		const TH_LARGE = ['glyphicon', 'glyphicon-th-large'];
		const TH = ['glyphicon', 'glyphicon-th'];
		const TH_LIST = ['glyphicon', 'glyphicon-th-list'];
		const OK = ['glyphicon', 'glyphicon-ok'];
		const REMOVE = ['glyphicon', 'glyphicon-remove'];
		const ZOOM_IN = ['glyphicon', 'glyphicon-zoom-in'];
		const ZOOM_OUT = ['glyphicon', 'glyphicon-zoom-out'];
		const OFF = ['glyphicon', 'glyphicon-off'];
		const SIGNAL = ['glyphicon', 'glyphicon-signal'];
		const COG = ['glyphicon', 'glyphicon-cog'];
		const TRASH = ['glyphicon', 'glyphicon-trash'];
		const HOME = ['glyphicon', 'glyphicon-home'];
		const FILE = ['glyphicon', 'glyphicon-file'];
		const TIME = ['glyphicon', 'glyphicon-time'];
		const ROAD = ['glyphicon', 'glyphicon-road'];
		const DOWNLOAD = ['glyphicon', 'glyphicon-download'];
		const DOWNLOAD2 = ['glyphicon', 'glyphicon-download-alt'];
		const UPLOAD = ['glyphicon', 'glyphicon-upload'];
		const INBOX = ['glyphicon', 'glyphicon-inbox'];
		const PLAY_CIRCLE = ['glyphicon', 'glyphicon-play-circle'];
		const REPEAT = ['glyphicon', 'glyphicon-repeat'];
		const REFRESH = ['glyphicon', 'glyphicon-refresh'];
		const LIST2 = ['glyphicon', 'glyphicon-list-alt'];
		const LOCK = ['glyphicon', 'glyphicon-lock'];
		const FLAG = ['glyphicon', 'glyphicon-flag'];
		const HEADPHONES = ['glyphicon', 'glyphicon-headphones'];
		const MUTE = ['glyphicon', 'glyphicon-volume-off'];
		const VOLUME_DOWN = ['glyphicon', 'glyphicon-volume-down'];
		const VOLUME_UP = ['glyphicon', 'glyphicon-volume-down'];
		const QR_CODE = ['glyphicon', 'glyphicon-qrcode'];
		const BARCODE = ['glyphicon', 'glyphicon-barcode'];
		const TAG = ['glyphicon', 'glyphicon-tag'];
		const TAGS = ['glyphicon', 'glyphicon-tags'];
		const BOOK = ['glyphicon', 'glyphicon-book'];
		const BOOKMARK = ['glyphicon', 'glyphicon-bookmark'];
		const PRINT_ = ['glyphicon', 'glyphicon-print'];
		const CAMERA = ['glyphicon', 'glyphicon-camera'];
		const FONT = ['glyphicon', 'glyphicon-font'];
		const BOLD = ['glyphicon', 'glyphicon-bold'];
		const ITALIC = ['glyphicon', 'glyphicon-italic'];
		const TEXT_HEIGHT = ['glyphicon', 'glyphicon-text-height'];
		const TEXT_WIDTH = ['glyphicon', 'glyphicon-text-width'];
		const ALIGN_LEFT = ['glyphicon', 'glyphicon-align-left'];
		const ALIGN_CENTER = ['glyphicon', 'glyphicon-align-center'];
		const ALIGN_RIGHT = ['glyphicon', 'glyphicon-align-right'];
		const ALIGN_JUSTIFY = ['glyphicon', 'glyphicon-align-justify'];
		const LIST_ = ['glyphicon', 'glyphicon-list'];
		const INDENT_L = ['glyphicon', 'glyphicon-indent-left'];
		const INDENT_R = ['glyphicon', 'glyphicon-indent-right'];
		const FACETIME = ['glyphicon', 'glyphicon-facetime-video'];
		const PICTURE = ['glyphicon', 'glyphicon-picture'];
		const MAP = ['glyphicon', 'glyphicon-map'];
		const CONTRAST = ['glyphicon', 'glyphicon-adjust'];
		const DROP = ['glyphicon', 'glyphicon-tint'];
		const EDIT = ['glyphicon', 'glyphicon-edit'];
		const SHARE = ['glyphicon', 'glyphicon-share'];
		const CHECK = ['glyphicon', 'glyphicon-check'];
		const MOVE = ['glyphicon', 'glyphicon-move'];
		const BACKWARD = ['glyphicon', 'glyphicon-step-backward'];
		const SKIP_BACK = ['glyphicon', 'glyphicon-fast-backward'];
		const REWIND = ['glyphicon', 'glyphicon-backward'];
		

		const QUESTION = ['glyphicon', 'glyphicon-question-sign'];
		
		/**
		 * UIGlyphicon constructor.
		 * @param array  $glyphicons A glyphicon constant, i.e. Glyphicon::BOOKMARK
		 * @param string $id         HTML ID Attribute
		 * @param string $on_click   Javascript function to be run when the object is clicked
		 */
		public function __construct($glyphicons = self::QUESTION, $id = '', $on_click = ''){
			parent::__construct([], $glyphicons, $id);
			$this->setOnClick($on_click);
		}
	}