<?php
/*
 * @version
 * @package         JUGRS.Framework
 * @author          Emerson Rocha Luiz
 * @copyright       Copyright (C) 2011 Joomla User Group Rio Grande do Sul. Some rights reserved.
 * @license         GPL
 */
defined('JUGRS_PATH') or die('Restricted access');

class JUGRSAddtoany
{

	public function __construct()
	{
		
	}
    
        /*
         * http://www.addtoany.com/buttons/
        */

        public static function button($show_in_featured_page = FALSE, $url = NULL, $page_title = NULL){
            
            //@todo: implement $show_in_featured_page
            
            if ($url == NULL){$url = JURI::current(); }
            if ($page_title == NULL){
                    $document =& JFactory::getDocument();
                    $pagetitle = $document->getTitle();
            }

            $button =   "\t <a class='a2a_dd' href='http://www.addtoany.com/share_save?linkurl=%24url&amp;linkname=%24pagetitle'><img src='http://static.addtoany.com/buttons/share_save_171_16.png' width='171' height='16' border='0' alt='Share'/></a>"
                       ."\n\t <script type='text/javascript'>"
                       ."\n\t var a2a_config = a2a_config || {};"
                       ."\n\t var a2a_config = a2a_config || {};"
                       ."\n\t var a2a_config = a2a_config || {};"
                       ."\n\t a2a_config.linkname = '{$pagetitle}';"
                       ."\n\t a2a_config.linkurl = '{$url}';"
                       //."\n\t a2a_config.locale = 'pt-BR';"
                       ."\n\t </script>"
                       ."\n\t <script type='text/javascript' src='http://static.addtoany.com/menu/page.js'></script>";
            return $button;
        }     

      
        
}