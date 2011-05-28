<?php
/*
 * @version
 * @package         JUGRS.Framework
 * @author          Emerson Rocha Luiz
 * @copyright       Copyright (C) 2011 Joomla User Group Rio Grande do Sul. Some rights reserved.
 * @license         GPL
 */
defined('JUGRS_PATH') or die('Restricted access');

class JUGRSHtml5
{

	public function __construct()
	{
		
	}
    
        /*
         * http://developers.facebook.com/docs/reference/plugins/comments
         * 
        */

        public static function compatibility(){
            $document =& JFactory::getDocument();
            $document->addScript( '/libraries/jugrs/3rd/modernizr/modernizr.js' );
            return true;
        }
            
       
        
}