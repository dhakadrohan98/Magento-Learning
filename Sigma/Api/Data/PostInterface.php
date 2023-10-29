<?php declare(strict_types=1);

namespace Sigma\Blog\Api\Data;

use Symfony\Component\DependencyInjection\Exception\string;

/**
 * Blog Post Interface
 * @api
 * @since 1.0.0
 */
interface PostInterface
{
    const ID = 'id';
    const TITLE = 'title';
    const CONTENT = "content";
    const CREATED_AT = "created_at";

    //Getter & Setter for Id
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id);

    //Getter & Setter for Title
    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title);

    //Getter & Setter for Content
    /**
     * @return string
     */
    public function getContent();

    /**
     * @param string $content
     * @return $this
     */
    public function setContent($content);

    //Getter only for TimeStamp
    /**
     * @return string
     */
    public function getCreatedAt();

}




