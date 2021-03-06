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
		const HEART_FILLED = 'heart';
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
		const PLAY = 'play';
		const PAUSE = 'pause';
		const STOP = 'stop';
		const FAST_FORWARD = 'forward';
		const SKIP_FORWARD = 'fast-forward';
		const FORWARD = 'step-forward';
		const EJECT = 'eject';
		const LEFT = 'chevron-left';
		const RIGHT = 'chevron-right';
		const PLUS_SIGN = 'plus-sign';
		const MINUS_SIGN = 'minus-sign';
		const REMOVE_CIRCLE_FILLED = 'remove-sign';
		const OK_CIRCLE_FILLED = 'ok-sign';
		const QUESTION = 'question-sign';
		const QUESTION_CIRCLE_FILLED = 'question-sign';
		const INFO_CIRCLE_FILLED = 'info-sign';
		const CROSSHAIR = 'screenshot';
		const REMOVE_CIRCLE = 'remove-circle';
		const OK_CIRCLE = 'ok-circle';
		const BAN_CIRCLE = 'ban-circle';
		const LEFT_ARROW = 'arrow-left';
		const RIGHT_ARROW = 'arrow-right';
		const UP_ARROW = 'arrow-up';
		const DOWN_ARROW = 'arrow-down';
		const SHARE2 = 'share-alt';
		const RESIZE_UP = 'resize-full';
		const RESIZE_DOWN = 'resize-small';
		const EXCLAMATION_CIRCLE_FILLED = 'exclamation-sign';
		const GIFT = 'gift';
		const PRESENT = 'gift';
		const LEAF = 'leaf';
		const FIRE = 'fire';
		const EYE_OPEN = 'eye-open';
		const EYE_CLOSED = 'eye-close';
		const WARNING_OUTLINE = 'warning-sign';
		const PLANE = 'plane';
		const CALENDAR = 'calendar';
		const SHUFFLE = 'random';
		const RANDOM = 'random';
		const COMMENT = 'comment';
		const MAGNET = 'magnet';
		const UP = 'chevron-up';
		const DOWN = 'chevron-down';
		const RETWEET = 'retweet';
		const SHOPPING_CART = 'shopping-cart';
		const TROLLEY = 'shopping-cart';
		const CLOSED_FOLDER = 'folder-close';
		const OPEN_FOLDER = 'folder-open';
		const RESIZE_VERTICAL = 'resize-vertical';
		const RESIZE_HORIZONTAL = 'resize-horizontal';
		const HDD = 'hdd';
		const HARDDRIVE = 'hdd';
		const BULLHORN = 'bullhorn';
		const MEGAPHONE = 'megaphone';
		const BELL = 'bell';
		const STAR2 = 'certificate';
		const THUMBS_UP = 'thumbs-up';
		const THUMBS_DOWN = 'thumbs-down';
		const POINT_RIGHT = 'hand-right';
		const POINT_LEFT = 'hand-left';
		const POINT_UP = 'hand-up';
		const POINT_DOWN = 'hand-down';
		const RIGHT_ARROW_CIRCLE_FILLED = 'circle-arrow-right';
		const LEFT_ARROW_CIRCLE_FILLED = 'circle-arrow-left';
		const UP_ARROW_CIRCLE_FILLED = 'circle-arrow-up';
		const DOWN_ARROW_CIRCLE_FILLED = 'circle-arrow-down';
		const GLOBE = 'globe';
		const WRENCH = 'wrench';
		const TASKS = 'tasks';
		const FILTER = 'filter';
		const BRIEFCASE = 'briefcase';
		const FULLSCREEN = 'fullscreen';
		const DASHBOARD = 'dashboard';
		const PAPERCLIP = 'paperclip';
		const HEART_OUTLINE = 'heart';
		const LINK = 'link';
		const PHONE_MOBILE = 'phone';
		const PIN = 'pushpin';
		const USD = 'usd';
		const DOLLAR = 'usd';
		const GBP = 'gbp';
		const POUND = 'gbp';
		const SORT = 'sort';
		const ALPHABETICAL_SORT_ASC = 'sort-by-alphabet';
		const ALPHABETICAL_SORT_DESC = 'sort-by-alphabet-alt';
		const NUMERIC_SORT_ASC = 'sort-by-order';
		const NUMERIC_SORT_DESC = 'sort-by-order-alt';
		const SIZE_SORT_ASC = 'sort-by-attributes';
		const SIZE_SORT_DESC = 'sort-by-attributes-alt';
		const UNCHECK = 'unchecked';
		const EXPAND = 'expand';
		const COLLAPSE_DOWN = 'collapse-down';
		const COLLAPSE_UP = 'collapse-up';
		const LOGIN = 'log-in';
		const LOGOUT = 'log-out';
		const LIGHTNING = 'flash';
		const FLASH = 'flash';
		const NEW_WINDOW = 'new-window';
		const RECORD = 'record';
		const SAVE = 'save';
		const OPEN = 'open';
		const SAVED = 'saved';
		const IMPORT = 'import';
		const EXPORT = 'export';
		const SEND = 'send';
		const FLOPPY_DISK = 'floppy-disk';
		const FLOPPY_DISK_SAVED = 'floppy-saved';
		const FLOPPY_DISK_REMOVE = 'floppy-remove';
		const FLOPPY_DISK_SAVE = 'floppy-save';
		const FLOPPY_DISK_OPEN = 'floppy-open';
		const CREDIT_CARD = 'credit-card';
		const TRANSFER = 'transfer';
		const CUTLERY = 'cutlery';
		const HEADER = 'header';
		const COMPRESSED = 'compressed';
		const PHONE = 'earphone';
		const PHONE_ANTIQUE = 'phone-alt';
		const TOWER = 'tower';
		const STATS = 'stats';
		const SD = 'sd-video';
		const HD = 'hd-video';
		const CC = 'subtitles';
		const SUBTITLES = 'subtitles';
		const STEREO_SOUND = 'sound-stereo';
		const DOLBY_SOUND = 'sound-dolby';
		const SURROUND_SOUND_5_1 = 'sound-5-1';
		const SURROUND_SOUND_6_1 = 'sound-6-1';
		const SURROUND_SOUND_7_1 = 'sound-7-1';
		const COPYRIGHT = 'copyright-mark';
		const REGISTERED_TRADEMARK = 'registration-mark';
		const CLOUD_DOWNLOAD = 'cloud-download';
		const CLOUD_UPLOAD = 'cloud-upload';
		const TREE_CONIFER = 'tree-conifer';
		const TREE_DECIDUOUS = 'tree-deciduous';
		const CD = 'glyphicon-cd';
		const SAVE_FILE = 'save-file';
		const OPEN_FILE = 'open-file';
		const LEVEL_UP = 'level-up';
		const COPY = 'copy';
		const PASTE = 'paste';
		const WARNING = 'alert';
		const WARNING_FILLED = 'alert';
		const EQUALIZER = 'equalizer';
		const KING = 'king';
		const QUEEN = 'queen';
		const PAWN = 'pawn';
		const BISHOP = 'bishop';
		const KNIGHT = 'knight';
		const BABY_FORMULA = 'baby-formula';
		const TENT = 'tent';
		const BLACKBOARD = 'blackboard';
		const BED = 'bed';
		const APPLE = 'apple';
		const ERASE = 'erase';
		const HOURGLASS = 'hourglass';
		const LAMP = 'lamp';
		const DUPLICATE = 'duplicate';
		const PIGGY_BANK = 'piggy-bank';
		const SCISSORS = 'scissors';
		const BITCOIN = 'bitcoin';
		const BTC = 'bitcoin';
		const XBT = 'xbt';
		const YEN = 'yen';
		const JPY = 'jpy';
		const RUBLE = 'ruble';
		const RUB = 'rub';
		const SCALE = 'scale';
		const ICE_LOLLY = 'ice-lolly';
		const ICE_LOLLY_TASTED = 'ice-lolly-tasted';
		const ICE_LOLLY_BITTEN = 'ice-lolly-tasted';
		const EDUCATION = 'education';
		const OPTION_HORIZONTAL = 'option-horizontal';
		const OPTION_VERTICAL = 'option-vertical';
		const HAMBURGER_MENU = 'menu-hamburger';
		const MODAL_WINDOW = 'modal-window';
		const POP_UP = 'modal_window';
		const OIL = 'oil';
		const GRAIN = 'grain';
		const SUNGLASSES = 'sunglasses';
		const GLASSES = 'glasses';
		const TEXT_SIZE = 'text-size';
		const TEXT_COLOR = 'text-color';
		const TEXT_BACKGROUND = 'text-background';
		const ALIGN_TOP = 'object-align-top';
		const ALIGN_BOTTOM = 'object-align-bottom';
		const ALIGN_HORIZONTAL = 'object-align-horizontal';
		const ALIGN_LEFT2 = 'object-align-left';
		const ALIGN_VERTICAL = 'object-align-vertical';
		const ALIGN_RIGHT2 = 'object-align-right';
		const TRIANGLE_RIGHT = 'triangle-right';
		const TRIANGLE_LEFT = 'triangle-left';
		const TRIANGLE_BOTTOM = 'triangle-bottom';
		const TRIANGLE_TOP = 'triangle-top';
		const CONSOLE = 'console';
		const TERMINAL = 'console';
		const COMMAND_PROMPT = 'console';
		const SUPERSCRIPT = 'superscript';
		const SUBSCRIPT = 'subscript';
		const MENU_LEFT = 'menu-left';
		const MENU_RIGHT = 'menu-right';
		const MENU_DOWN = 'menu-down';
		const MENU_UP = 'menu-up';
		
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