<?php
	/**
	 * phpUI Autoloader
	 * Automatically load phpUI classes when required
	 *
	 * @param string $className Name of PHP class to load automatically
	 */
	function phpUILoader($className){
		$file = str_replace("\\", "/", "/{$className}.class.php");
		if (file_exists($file))
		{
			require_once(__DIR__ . $file);
		}
	}
	spl_autoload_register('phpUILoader');