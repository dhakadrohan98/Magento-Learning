<?php declare(strict_types=1)

namespace Sigma\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use Sigma\Blog\Api\Data\PostInterface;

class Post extends AbstractModel implements PostInterface
{
    protected function _construct()
    {
        $this->_init(ResourceModel\Post::class);
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->getData(self::CONTENT);
    }

    /**
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        return $this->setData(self::CONTENT, $content);
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }
}