<?php
namespace Sigma\EnquiryForm\Model\ResourceModel\Enquiry;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Sigma\EnquiryForm\Model\Enquiry;
use Sigma\EnquiryForm\Model\ResourceModel\Enquiry as EnquiryResourceModel;

//To retrieve multiple records, create a collection model
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Enquiry::class, EnquiryResourceModel::class);
    }
}
