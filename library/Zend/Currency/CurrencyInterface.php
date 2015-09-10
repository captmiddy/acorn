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
 * @category  Zend
 * @package   Zend_Currency
 * @copyright Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd     New BSD License
 * @version   $Id: CurrencyInterface.php,v 1.1 2013/09/10 14:37:14 vcrema Exp $
 */

/**
 * Exception class for Zend_Currency
 *
 * @category  Zend
 * @package   Zend_Currency
 * @copyright Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd     New BSD License
 */
interface Zend_Currency_CurrencyInterface
{
    /**
     * Returns the actual exchange rate
     *
     * @param string $from Short Name of the base currency
     * @param string $to   Short Name of the currency to exchange to
     */
    public function getRate($from, $to);
}
