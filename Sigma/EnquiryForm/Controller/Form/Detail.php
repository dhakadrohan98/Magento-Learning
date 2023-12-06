<?php declare(strict_types=1);

namespace Sigma\EnquiryForm\Controller\Form;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Sigma\EnquiryForm\Model\GridFactory;
use Magento\Framework\Message\ManagerInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Mail\Template\TransportBuilder;
use Magento\Framework\Translate\Inline\StateInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\Area;
use Magento\Store\Model\StoreManagerInterface;
use Sigma\Email\Model\Config;

class Detail extends Action
{
    protected $resultPageFactory;
    protected $gridFactory;
    protected $messageManager;
    protected $transportBuilder;
    protected $inlineTranslation;
    private $scopeConfig;
    protected $storeManager;
    protected $config;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        GridFactory $gridFactory,
        ManagerInterface $messageManager,
        TransportBuilder $transportBuilder,
        StateInterface $inlineTranslation,
        ScopeConfigInterface $scopeConfig,
        StoreManagerInterface $storeManager,
        \Sigma\Email\Model\Config $config

    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->gridFactory = $gridFactory;
        $this->messageManager = $messageManager;
        $this->transportBuilder = $transportBuilder;
        $this->inlineTranslation = $inlineTranslation;
        $this->scopeConfig = $scopeConfig;
        $this->storeManager = $storeManager;
        $this->config = $config;
        parent::__construct($context);
    }

    public function execute()
    {
        if($this->getRequest()->getPostValue()) {
            try {
                $data = $this->getFormData();
                $enquiryModel = $this->gridFactory->create();
                foreach ($data as $key => $value) {
                    //echo $key."=>".$value;
                    $enquiryModel->setData($key, $value);
                }
//                print_r($enquiryModel->getData());
                $enquiryModel->save();
                // Send email to admin
                $this->sendEmailToAdmin($data);
                $this->messageManager->addSuccessMessage(__('Data saved successfully.'));

            } catch (\Exception $e) {
                $this->messageManager->addErrorMessage(__('An error occurred while saving the data: %1', $e->getMessage()));
                $this->_objectManager->get(\Psr\Log\LoggerInterface::class)->critical($e);
            }
        }

        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Enquiry Form Detail'));
        return $resultPage;
    }

    //Send email to admin on saving form data to the db
    public function sendEmailToAdmin($data)
    {
        $storeId = $this->storeManager->getStore()->getId();
        $data = $this->getFormData();
        foreach ($data as $key => $value) {
            if($key == 'email')
                $email = $value;
        }

//        $customEmailAddress = $this->config->getCustomEmailAddress();

        // Set sender information
        $sender = [
            'name' => 'System Admin', //
            'email' => 'rohan.dhakad@sigmainfo.net',
        ];

        // Set recipient information
        $recipientEmail = $email;
        $recipientName = 'Rohan Dhakad';

        // Load email template
        $templateOptions = [
            'area' => Area::AREA_FRONTEND,
            'store' => $storeId,
        ];
        $templateId = 5;
        $templateVars = ['data' => $data];

        // Start inline translation
        $this->inlineTranslation->suspend();

        // Create email
        $transport = $this->transportBuilder
            ->setTemplateIdentifier($templateId)
            ->setTemplateOptions($templateOptions)
            ->setTemplateVars($templateVars)
            ->setFrom($sender)
            ->addTo($recipientEmail, $recipientName)
            ->getTransport();

        // Send email
        $transport->sendMessage();

        // End inline translation
        $this->inlineTranslation->resume();
    }

    public function getFormData() {
        return $this->getRequest()->getPostValue();
    }

}
