<?php declare(strict_types=1);

namespace Sigma\CustomAdminGrid\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Contact extends AbstractDb
{
    const MAIN_TABLE = 'contact_form';
    const ID_FILED_NAME = 'id';

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct() //not a standard php constructor
    {
        $this->_init('contact_form','id');
    }
}