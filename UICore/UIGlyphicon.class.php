<?php
	/**
	 * Created by PhpStorm.
	 * User: Oliver
	 * Date: 07/04/2016
	 * Time: 18:13
	 */
	
	namespace phpHTML\UICore;

	class UIGlyphicon extends UISpan{
		const ASTERISK = 'asterisk';
		const PLUS = 'plus';
		const EURO = 'euro';
		const EUR = 'eur';
		const MINUS = 'minus';
		const CLOUD = 'cloud';
		const ENVELOPE = 'envelope';
		const PENCIL = 'pencil';
		const GLASS = 'glass';
		const MUSIC = 'music';
		const SEARCH = 'search';
		const HEART = 'heart';
		const STAR = 'star';
		const STAR_EMPTY = 'star-empty';
		const USER = 'user';
		const FILM = 'film';
		const TH_LARGE = 'th-large';
		const TH = 'th';
		const TH_LIST = 'th-list';
		const OK = 'ok';
		const REMOVE = 'remove';
		const ZOOM_IN = 'zoom-in';
		const ZOOM_OUT = 'zoom-out';
		const OFF = 'off';
		const SIGNAL = 'signal';
		const COG = 'cog';
		const TRASH = 'trash';
		const HOME = 'home';
		const FILE = 'file';
		const TIME = 'time';
		const ROAD = 'road';
		const DOWNLOAD = 'download';
		const DOWNLOAD2 = 'download-alt';
		const UPLOAD = 'upload';
		const INBOX = 'inbox';
		const PLAY_CIRCLE = 'play-circle';
		const REPEAT = 'repeat';
		const REFRESH = 'refresh';
		const LIST2 = 'list-alt';
		const LOCK = 'lock';
		const FLAG = 'flag';
		const HEADPHONES = 'headphones';
		const MUTE = 'volume-off';
		const VOLUME_DOWN = 'volume-down';
		const VOLUME_UP = 'volume-down';
		const QR_CODE = 'qrcode';
		const BARCODE = 'barcode';
		const TAG = 'tag';
		const TAGS = 'tags';
		const BOOK = 'book';
		const BOOKMARK = 'bookmark';
		const PRINT_ = 'print';
		const CAMERA = 'camera';
		const FONT = 'font';
		const BOLD = 'bold';
		const ITALIC = 'italic';
		const TEXT_HEIGHT = 'text-height';
		const TEXT_WIDTH = 'text-width';
		const ALIGN_LEFT = 'align-left';
		const ALIGN_CENTER = 'align-center';
		const ALIGN_RIGHT = 'align-right';
		const ALIGN_JUSTIFY = 'align-justify';
		const LIST_ = 'list';
		const INDENT_L = 'indent-left';
		const INDENT_R = 'indent-right';
		const FACETIME = 'facetime-video';
		const PICTURE = 'picture';
		const MAP = 'map';
		const CONTRAST = 'adjust';
		const DROP = 'tint';
		const EDIT = 'edit';
		const SHARE = 'share';
		const CHECK = 'check';
		const MOVE = 'move';
		const BACKWARD = 'step-backward';
		const SKIP_BACK = 'fast-backward';
		const REWIND = 'backward';
		
		const LOGOUT = 'log-out';
		const QUESTION = 'question-sign';
		
		/**
		 * UIGlyphicon constructor.
		 * @param string $glyphicons A glyphicon constant, i.e. Glyphicon::BOOKMARK
		 * @param string $id         HTML ID Attribute
		 * @param string $on_click   Javascript function to be run when the object is clicked
		 */
		public function __construct($glyphicons = self::QUESTION, $id = '', $on_click = ''){
			parent::__construct([], ['glyphicon', 'glyphicon-' . $glyphicons], $id);
			$this->setOnClick($on_click);
		}
	}