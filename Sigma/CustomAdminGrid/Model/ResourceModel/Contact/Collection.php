<?php declare(strict_types=1);

namespace Sigma\CustomAdminGrid\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Sigma\CustomAdminGrid\Model\Contact;
use Sigma\CustomAdminGrid\Model\ResourceModel\Contact as ContactResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Contact::class, ContactResourceModel::class);
    }
}