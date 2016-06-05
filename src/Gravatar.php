<?php

namespace MisterPaladin;

use GuzzleHttp\Client;

class Gravatar
{
    /**
     * Gravatar url
     * 
     * (default value: 'http://www.gravatar.com')
     * 
     * @var string
     */
    protected static $gravatarURL = 'https://www.gravatar.com';
    
    /**
     * Deprecated function
     * 
     * @param  string $email
     * @param  int $size
     * @return string
     */
    public static function get($email, $size = null)
    {
        return self::avatar($email, $size);
    }
    
    /**
     * Get user avatar
     * 
     * @param  string $email
     * @param  int $size
     * @return string
     */
    public static function avatar($email, $size = null)
    {
        $url = sprintf('%s/avatar/%s', self::$gravatarURL, md5($email));
        
        if (!is_null($size)) {
            $url .= '?s=' . $size;
        }
        
        return $url;
    }
    
    /**
     * Get user profile
     * 
     * @param  string $email
     * @return stdClass
     */
    public static function profile($email)
    {
        $url = sprintf('%s/%s.json', self::$gravatarURL, md5($email));
        
        $client = new Client();
        
        return json_decode($client->get($url)->getBody()->getContents());
    }
}
