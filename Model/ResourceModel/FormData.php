<?php
namespace Custom\Form\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class FormData extends AbstractDb
{
    protected function _construct()
    {
        // Define the table and primary key
        $this->_init('customform_Table', 'email'); // 'customform_Table' is your table name and 'email' is the primary key
    }
}
