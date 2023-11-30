<?php

namespace Sigma\EnquiryForm\Model\ResourceModel\Grid;

/**
 * Represents a set or list of model instances.
 * Used for querying multiple records from the database.
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';
    /**
     * Define resource model.
     */
    protected function _construct() //Not a standard php function
    {
        $this->_init(
            'Sigma\EnquiryForm\Model\Grid',
            'Sigma\EnquiryForm\Model\ResourceModel\Grid'
        );
    }

    /*Collections are often used in blocks, controllers, or other parts of the system where
     you need to work with sets of model instances.*/
}
