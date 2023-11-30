<?php

namespace Sigma\EnquiryForm\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init(
            'Sigma\EnquiryForm\Model\Grid',
            'Sigma\EnquiryForm\Model\ResourceModel\Grid'
        );
    }
}
