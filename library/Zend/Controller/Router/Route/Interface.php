<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Controller
 * @subpackage Router
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @version    $Id: Interface.php,v 1.3 2013/09/10 14:36:09 vcrema Exp $
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/** Zend_Config */
require_once 'Zend/Config.php';

/**
 * @package    Zend_Controller
 * @subpackage Router
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
interface Zend_Controller_Router_Route_Interface {
    public function match($path);
    public function assemble($data = array(), $reset = false, $encode = false);
    public static function getInstance(Zend_Config $config);
}

