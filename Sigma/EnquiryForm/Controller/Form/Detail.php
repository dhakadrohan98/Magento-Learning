<?php declare(strict_types=1);

namespace Sigma\EnquiryForm\Controller\Form;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Sigma\EnquiryForm\Model\EnquiryFactory;
use Sigma\EnquiryForm\Model\ResourceModel\Enquiry as EnquiryResourceModel;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\Controller\ResultFactory;

class Detail extends Action
{
    protected $resultPageFactory;
    protected $enquiryFactory;
    protected $enquiryResourceModel;
    protected $messageManager;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        EnquiryFactory $enquiryFactory,
        EnquiryResourceModel $enquiryResourceModel,
        ManagerInterface $messageManager

    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->enquiryFactory = $enquiryFactory;
        $this->enquiryResourceModel = $enquiryResourceModel;
        $this->messageManager = $messageManager;
        parent::__construct($context);
    }

    public function execute()
    {
        if($this->getRequest()->getPostValue()) {
            try {
                $data = $this->getRequest()->getPostValue();
                $enquiryModel = $this->enquiryFactory->create();
                foreach ($data as $key => $value) {
                    //                    echo $key."=>".$value;
                    $enquiryModel->setData($key, $value);
                }
                print_r($enquiryModel->getData());
                $enquiryModel->save();
                $this->messageManager->addSuccessMessage(__('Data saved successfully.'));

            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage(__('An error occurred while saving the data.'));
            }
        }

        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Enquiry Form Detail'));
        return $resultPage;
    }
}
