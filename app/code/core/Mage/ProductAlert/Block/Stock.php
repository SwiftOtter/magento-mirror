<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_ProductAlert
 * @copyright  Copyright (c) 2006-2017 Magento, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * @deprecated after 1.4.1.0
 * @see Mage_ProductAlert_Block_Product_View
 */
class Mage_ProductAlert_Block_Stock extends Mage_Core_Block_Template
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('productalert/stock.phtml');
    }

    public function isShow()
    {
        if (!Mage::getStoreConfig('catalog/productalert/allow_stock')) {
            return false;
        }

        if (!$product = Mage::helper('productalert')->getProduct()) {
            return false;
        }
        /* @var $product Mage_Catalog_Model_Product */

        return !$product->isSaleable();
    }

    public function getUrl($route = '', $params = array())
    {
        return Mage::helper('productalert')->getSaveUrl('stock');
    }
}
