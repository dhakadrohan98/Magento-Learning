<?php declare(strict_types=1);

namespace Sigma\Blog\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogPostDetailView implements ObserverInterface
{
    public function __construct(
        private LoggerInterface $logger,
    )
    {}

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
       $request = $observer->getData('request');
        $this->logger->info('blog_post_detailed_view', [
            'params' => $request->getParams(),
        ]);
    }
}