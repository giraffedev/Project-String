<?php 

namespace Language;

/**
 *  Loading all strings translations
 *  @return $strings[language][name]
 */
include 'languages/en.php';
include 'languages/ro.php';

class String {
	public static $language;

    /**
     * [Sets the required string language]
     * @param  string $language default: en
     * @return [string]  
     */
	public static function lang($language = "en") {
		self::$language = $language;
		return new self();
	}

	/**
	 * [Returns the string in the language set]
	 * @param  string $name
	 * @return [string]
	 */
	public function get($name = "") {
		global $strings;
		return $strings[self::$language][$name];
	}
}
