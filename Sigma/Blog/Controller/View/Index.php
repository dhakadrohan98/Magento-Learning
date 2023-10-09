<?php declare(strict_types=1);

namespace Sigma\Blog\Controller\View;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    public function execute()
    {
        die("Blog index");
    }
}