<?php declare(strict_types=1);

namespace Sigma\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class ListAction implements HttpGetActionInterface
{

    public function __construct(
        private PageFactory $pageFactory
    ) {}

/**
 * PageFactory create method.
 *
 * @return mixed
 */
public function execute()
{
    return $this->pageFactory->create();
}
}