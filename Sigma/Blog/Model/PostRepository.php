<?php declare(strict_types=1);

namespace Sigma\Blog\Model;

use Sigma\Blog\Api\Data\PostInterface;
use Sigma\Blog\Api\PostRepositoryInterface;
use Sigma\Blog\Model\ResourceModel\Post as PostResourceModel;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception;

class PostRepository implements PostRepositoryInterface
{
    public function __construct(
        private PostFactory $postFactory,
        private PostResourceModel $postResourceModel
    )
    {}

    public function getById($id)
    {
        $post = $this->postFactory->create();
        $this->postResourceModel->load($post, $id);

        if(!$post->getId()){
            throw new NoSuchEntityException(__('The Blog post with "%1" ID does not exist.', $id));
        }

        return $post;
    }

    public function save(PostInterface $post)
    {
        try {
            $this->postResourceModel->save($post);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $post;
    }

    public function deleteById($id)
    {
        $post = $this->getById($id);
        try {
            $this->postResourceModel->delete($post);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }
}