<?php declare(strict_types=1);

namespace Sigma\Blog\Api;

use Magento\Framework\Exception\NoSuchEntityException;
use Sigma\Blog\Api\Data\PostInterface;
use Magento\Framework\Exception\LocalizedException;

/**
 * Blog post CRUD interface.
 * @api
 * @since 1.0.0
 */
interface PostRepositoryInterface
{
    /**
     * @param int $id
     * @return \Sigma\Blog\Api\Data\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * @param \Sigma\Blog\Api\Data\PostInterface $postInterface
     * @return \Sigma\Blog\Api\Data\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(PostInterface $postInterface);

    /**
     * @param int $id
     * @return bool
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function deleteById($id);
}