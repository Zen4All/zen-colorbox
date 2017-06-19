<?php
/**
 * Zen Colorbox
 *
 * @copyright 2013 C Jones
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: config.zcb.php 1.3 01/20/2014 C Jones $
 */


if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
} 

if (IS_ADMIN_FLAG === true) {
  $autoLoadConfig[999][] = array(
    'autoType' => 'init_script',
    'loadFile' => 'init_zcb_config.php'
  );
} else {
  @unlink(__FILE__);
}

// uncomment the following line to perform a uninstall
// $uninstall = 'uninstall';