<?php

namespace Sigma\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\RedirectFactory;

class Index implements HttpGetActionInterface
{

    public function __construct(
        private RedirectFactory $redirectFactory
    )
    {}

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $redirect = $this->redirectFactory->create();
        return $redirect->setPath('*/post/listaction');
    }
}