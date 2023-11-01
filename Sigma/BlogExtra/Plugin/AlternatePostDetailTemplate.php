<?php declare(strict_types=1);

namespace Sigma\BlogExtra\Plugin;

use Magento\Framework\App\RequestInterface;
use Sigma\Blog\Controller\Post\Detail;

class AlternatePostDetailTemplate
{
    public function __construct(
        private \Magento\Framework\App\RequestInterface $request,
    )
    {}

    public function afterExecute(
        Detail $subject,
        $result
    ) {
        if($this->request->getParam('alternate')) {
            $result->getLayout()
                ->getBlock('blog.post.detail')
                ->setTemplate('Sigma_BlogExtra::post/detail.phtml');
        }
        return $result;
    }
}