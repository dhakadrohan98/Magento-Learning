<?php declare(strict_types=1);

namespace Sigma\Blog\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Sigma\Blog\Model\ResourceModel\Post\Collection;
use Sigma\Blog\Api\PostRepositoryInterface;
use Magento\Framework\App\RequestInterface;
use Sigma\Blog\Api\Data\PostInterface;

class Post implements ArgumentInterface
{
    /**
     * Post constructor.
     * @param \Sigma\Blog\Model\ResourceModel\Post\Collection $collection
     */
    public function __construct(
        private \Sigma\Blog\Model\ResourceModel\Post\Collection $collection,
        private \Sigma\Blog\Api\PostRepositoryInterface $postRepository,
        private \Magento\Framework\App\RequestInterface $request
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

    /**
     * @return PostInterface
     */
    public function getDetail()
    {
        $id = (int) $this->request->getParam('id');
        return $this->postRepository->getById($id);
    }
}