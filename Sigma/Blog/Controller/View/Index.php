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

// Another way for creating empty page on front store
// class Grid extends \Magento\Framework\App\Action\Action
// {
// 	protected $_pageFactory;

// 	public function __construct(
// 		\Magento\Framework\App\Action\Context $context,
// 		\Magento\Framework\View\Result\PageFactory $pageFactory)
// 	{
// 		$this->_pageFactory = $pageFactory;
// 		return parent::__construct($context);
// 	}

// 	public function execute()
// 	{
// 		return $this->_pageFactory->create();
// 	}
// }