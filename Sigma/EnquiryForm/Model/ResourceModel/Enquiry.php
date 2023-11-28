<?php
namespace Sigma\EnquiryForm\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

//Define the database table structure and perform CRUD operations
class Enquiry extends AbstractDb
{
    protected function _construct() //not a standard php constructor
    {
        $this->_init('sigma_enquiry_form', 'id');
    }
}
