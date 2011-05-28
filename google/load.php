<?php
/*
 * @version
 * @package         JUGRS.Framework
 * @author          Emerson Rocha Luiz
 * @copyright       Copyright (C) 2011 Joomla User Group Rio Grande do Sul. Some rights reserved.
 * @license         GPL
 */

defined('JUGRS_PATH') or die('Restricted access');

class LoadGoogle
{

    public static function getInstance()
    {
        require_once dirname(__FILE__) . DS . 'google.php';
        $instance = new JUGRSGoogle;
        return $instance;
    }

}