<?php
/** @var \Magento\Framework\Setup\ModuleDataSetupInterface $installer */
// Required tables
$statusTable      = $installer->getTable('sales_order_status');
$statusStateTable = $installer->getTable('sales_order_status_state');

$installer->getConnection()->update(
    $statusStateTable,
    ['state' => 'processing'],
    ['status = ?' => 'sveacheckout_acknowledged']
);
