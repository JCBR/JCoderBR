<?php
/*
 * @version
 * @package         JUGRS.Framework
 * @author          Emerson Rocha Luiz
 * @copyright       Copyright (C) 2011 Joomla User Group Rio Grande do Sul. Some rights reserved.
 * @license         GPL
 */
defined('JUGRS_PATH') or die('Restricted access');

class JUGRSTwitter
{

	public function __construct()
	{
		
	}
    
        /*
         * 
         * http://developers.facebook.com/docs/reference/plugins/comments
        */

        public static function tweetthis($mostra_na_pagina_inicial = FALSE, $url = NULL, $twitter_username = '', $text = NULL, $related = '', $count = 'vertical' ){
	
            //@todo: implementar $mostra_na_pagina_inicial	
            if ($url == NULL){$url = JURI::current(); }
            if ($text == NULL){
                    $document =& JFactory::getDocument();
                    $pagetitle = $document->getTitle();
                    $text = $pagetitle;
            }
	
            $twitter_tweetthis = '<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
            <div>
               <a href="http://twitter.com/share" class="twitter-share-button"
                  data-url="'.$url.'"
                  data-via="'.$twitter_username.'"
                  data-text="'.$text.'"
                  data-related="'.$related.'"
                  data-count="'.$count.'">Tweet</a>
            </div>';
	
	
	return $twitter_tweetthis;
        }
}
        

        
        
