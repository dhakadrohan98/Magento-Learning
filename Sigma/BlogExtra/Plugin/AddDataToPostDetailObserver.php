<?php declare(strict_types=1);

namespace Sigma\BlogExtra\Plugin;

use Magento\Framework\Event\Observer;
use Sigma\Blog\Observer\LogPostDetailView;
use Magento\Framework\Stdlib\DateTime\TimeZoneInterface;

class AddDataToPostDetailObserver
{
    public function __construct(
        private TimeZoneInterface $timezone,
    ) {}

    public function beforeExecute(
        LogPostDetailView $subject,
        Observer $observer
    ) {
        $request = $observer->getData('request');
        $request->setParam('datetime', $this->timezone->date());

        return [$observer];
    }
}