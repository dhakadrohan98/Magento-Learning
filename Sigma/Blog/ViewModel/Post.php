<?php declare(strict_types=1);

namespace Sigma\Blog\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Sigma\Blog\Model\ResourceModel\Post\Collection;

class Post implements ArgumentInterface
{
    /**
     * Post constructor.
     * @param \Sigma\Blog\Model\ResourceModel\Post\Collection $collection
     */
    public function __construct(
        private \Sigma\Blog\Model\ResourceModel\Post\Collection $collection,
    ) {}

/**
 * @return array
 */
public function getList()
{
    return $this->collection->getItems();
}

/**
 * @return int
 */

    public function getCount()
  {
    return $this->collection->count();
  }
}