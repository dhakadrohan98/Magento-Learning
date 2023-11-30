<?php
namespace Sigma\Email\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    const XML_PATH_EMAIL_ADDRESS = 'sigma_email_section/general/sigma_email_address';

    protected $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    public function getCustomEmailAddress($storeId = null)
    {
        return $this->scopeConfig->getValue(self::XML_PATH_EMAIL_ADDRESS, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $storeId);
    }
}
