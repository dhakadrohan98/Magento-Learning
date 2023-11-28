<?php declare(strict_types=1);

namespace Sigma\CustomAdminGrid\Model;

use Magento\Framework\Model\AbstractModel;

class Contact extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel\Contact::class);
    }
}