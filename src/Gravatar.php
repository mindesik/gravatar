<?php

namespace Milax;

class Gravatar {
	
	/**
	 * Gravatar url
	 * 
	 * (default value: 'http://www.gravatar.com/avatar/')
	 * 
	 * @var string
	 * @access protected
	 * @static
	 */
	protected static $gravatarURL = 'http://www.gravatar.com/avatar/';
	
	/**
	 * get function.
	 * 
	 * @access public
	 * @static
	 * @param string $email
	 * @param int $size (default: null)
	 * @return void
	 */
	public static function get($email, $size = null)
	{
		$url = self::$gravatarURL . md5($email);
		if (!is_null($size))
			$url .= '?s=' . $size;
		
		return $url;
	}
	
}