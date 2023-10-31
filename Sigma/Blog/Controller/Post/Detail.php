<?php declare(strict_types=1);

namespace Sigma\Blog\Controller\Post;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\RequestInterface;

class Detail implements HttpGetActionInterface
{
    public function __construct(
        private PageFactory $pageFactory,
        private EventManager $eventManager,
        private RequestInterface $request
    ) {}

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $this->eventManager->dispatch('sigma_blog_post_detail_view', [
            'request'=> $this->request,
        ]);
        return $this->pageFactory->create();
    }
}