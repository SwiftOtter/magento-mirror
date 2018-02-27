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
 * @package     Mage_Directory
 * @copyright  Copyright (c) 2006-2017 Magento, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$installer = $this;
/* @var $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup()
    ->run("
INSERT INTO {$this->getTable('core_email_template')} (`template_code`, `template_text`, `template_type`,
`template_subject`, `template_sender_name`, `template_sender_email`, `added_at`, `modified_at`) VALUES
('Currency Update Warnings', 'Currency update warnings:\r\n\r\n\r\n{{var warnings}}', 1,
'Currency Update Warnings', NULL, NULL, '2008-01-30 14:10:31', '2008-01-30 16:02:47');

");
$installer->endSetup();
