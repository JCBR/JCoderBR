<?php
/*
 * @version
 * @package         JUGRS.Framework
 * @author          Emerson Rocha Luiz
 * @copyright       Copyright (C) 2011 Joomla User Group Rio Grande do Sul. Some rights reserved.
 * @license         GPL
 */
 
abstract class JUGRS
{

    public static $addtoany = null;
	public static $css3 = null;
    public static $facebook = null;
    public static $google = null;
	public static $html5 = null;
    public static $twitter = null;

    
    
    /*
    * Return addtoany Object, creating if aready doesent exists
    * @since 0.1
    */
    public static function getAddtoany()
	{
		if (!self::$addtoany) {
			jimport('jugrs.addtoany.load');

			self::$addtoany = LoadAddtoany::getInstance();
		}
		return self::$addtoany;
	}
    
    /*
    * Return CSS3 Object, creating if aready doesent exists
    * @since 0.2
    */
    public static function getCss3()
	{
		if (!self::$css3) {
			jimport('jugrs.css3.load');

			self::$css3 = LoadCss3::getInstance();
		}
		return self::$css3;
	}
    
    /*
    * Return Facebook Object, creating if aready doesent exists
    * @since 0.1
    */
    public static function getFacebook()
	{
		if (!self::$facebook) {
			jimport('jugrs.facebook.load');

			self::$facebook = LoadFacebook::getInstance();
		}
		return self::$facebook;
	}
        
    /*
    * Return Google Object, creating if aready doesent exists
    * @since 0.1
    */
    public static function getGoogle()
	{
		if (!self::$google) {
			jimport('jugrs.google.load');

			self::$google = LoadGoogle::getInstance();
		}
		return self::$google;
	}

	
    /*
    * Return HTML5 Object, creating if aready doesent exists
    * @since 0.2
    */
    public static function getHtml5()
	{
		if (!self::$html5) {
			jimport('jugrs.html5.load');

			self::$html5 = LoadHtml5::getInstance();
		}
		return self::$html5;
	}
	
    /*
    * Return Facebook Object, creating if aready doesent exists
    * @since 0.1
    */
    public static function getTwitter()
	{
		if (!self::$twitter) {
			jimport('jugrs.twitter.load');

			self::$twitter = LoadTwitter::getInstance();
		}
		return self::$twitter;
	}
	
}