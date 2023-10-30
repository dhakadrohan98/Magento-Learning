<?php declare(strict_types=1);

namespace Sigma\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    const MAIN_TABLE = 'sigma_blog_post';
    const ID_FILED_NAME = 'id';

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct() //not a standard php constructor
    {
        $this->_init('sigma_blog_post','id');
    }
}