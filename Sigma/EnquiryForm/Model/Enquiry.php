<?php

namespace Sigma\EnquiryForm\Model;

use Magento\Framework\Model\AbstractModel;

//Interact with your custom database table
class Enquiry extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Sigma\EnquiryForm\Model\ResourceModel\Enquiry');
    }
}
