<?php

namespace Sigma\CompanyAccount\Model;

use Aheadworks\Ca\Model\Company;
use Sigma\CompanyAccount\Api\Data\CompanyAccountInterface;
use Magento\Framework\Model\AbstractModel;

class CompanyAccount extends \Aheadworks\Ca\Model\Company implements CompanyAccountInterface
{
    const Business_Structure = 'business_structure';
    const ABN = 'abn';
    const ACN = 'acn';
    const Business_Phone_Number = 'business_phone_number';
    const Billing_Address = 'billing_address';
    const Billing_State = 'billing_state';
    const Billing_Postcode = 'billing_postcode';
    const Delivery_Address = 'delivery_address';
    const Delivery_State = 'delivery_state';
    const Delivery_Postcode = 'delivery_postcode';
    const Credit_Limit = 'credit_limit';
    const No_Of_Pest_Technicians = 'no_of_pest_technicians';
    const Pest_Management_Services = 'pest_management_services';
    const Ref_Address= 'ref_address';
    const Ref_Name = 'ref_name';
    const Ref_Email = 'ref_email';
    const Ref_Phone = 'ref_phone';
    const Trade_Ref_Name = 'trade_ref_name';
    const Trade_Ref_Address = 'trade_ref_address';
    const Trade_Ref_Email = 'trade_ref_email';
    const Trade_Ref_Phone = 'trade_ref_phone';
    /**
     * Get Business Structure
     *
     * @return string
     */
    public function getBusinessStructure()
    {
        return $this->getData(self::Business_Structure);
    }

    /**
     * Set Business Structure
     *
     * @param string $businessStructure
     * @return $this
     */
    public function setBusinessStructure($businessStructure)
    {
        $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/testlog.log');
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info('Business Structure Set Method:');
//        $logger->info(print_r($this->setData(self::Business_Structure, $businessStructure)),true);
        $obj = $this->setData('business_structure', $businessStructure);
        $logger->info('Business Structure after setMethod:');
        $logger->info(print_r($obj->getData(),true));
        return $obj;
    }

    /**
     * Get ABN.
     *
     * @return string
     */
    public function getAbn()
    {
        return $this->getData(self::ABN);
    }

    /**
     * Set ABN.
     *
     * @param string $abn
     * @return $this
     */
    public function setAbn($abn)
    {
        return $this->setData(self::ABN, $abn);
    }

    /**
     * Get ACN.
     *
     * @return string
     */
    public function getAcn()
    {
        return $this->getData(self::ACN);
    }

    /**
     * Set ACN.
     *
     * @param string $acn
     * @return $this
     */
    public function setAcn($acn)
    {
        return $this->setData(self::ACN, $acn);
    }

    /**
     * Get Business Phone Number.
     *
     * @return int
     */
    public function getBusinessPhoneNumber()
    {
        return $this->getData(self::Business_Phone_Number);
    }

    /**
     * Set Business Phone Number.
     *
     * @param int|null $businessPhoneNumber
     * @return $this
     */
    public function setBusinessPhoneNumber($businessPhoneNumber)
    {
        return $this->setData(self::Business_Phone_Number, $businessPhoneNumber);
    }

    /**
     * Get Billing Address.
     *
     * @return string
     */
    public function getBillingAddress()
    {
        return $this->getData(self::Billing_Address);
    }

    /**
     * Set Business Address.
     *
     * @param string $billingAddress
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        return $this->setData(self::Billing_Address, $billingAddress);
    }

    /**
     * Get Billing State.
     *
     * @return string
     */
    public function getBillingState()
    {
        return $this->getData(self::Billing_State);
    }

    /**
     * Set Billing State.
     *
     * @param string $billingState
     * @return $this
     */
    public function setBillingState($billingState)
    {
        return $this->setData(self::Billing_State, $billingState);
    }

    /**
     * Get Billing Postcode.
     *
     * @return int
     */
    public function getBillingPostcode()
    {
        return $this->getData(self::Billing_Postcode);
    }

    /**
     * Set Billing Postcode.
     *
     * @param int|null $billingPostcode
     * @return $this
     */
    public function setBillingPostcode($billingPostcode)
    {
        return $this->setData(self::Billing_Postcode, $billingPostcode);
    }

    /**
     * Get Delivery Address.
     *
     * @return string
     */
    public function getDeliveryAddress()
    {
        return $this->getData(self::Delivery_Address);
    }

    /**
     * Set Delivery Address.
     *
     * @param string $deliveryAddress
     * @return $this
     */
    public function setDeliveryAddress($deliveryAddress)
    {
        return $this->setData(self::Delivery_Address, $deliveryAddress);
    }

    /**
     * Get Delivery State.
     *
     * @return string
     */
    public function getDeliveryState()
    {
        return $this->getData(self::Delivery_State);
    }

    /**
     * Set Delivery State.
     *
     * @param string $deliveryState
     * @return $this
     */
    public function setDeliveryState($deliveryState)
    {
        return $this->setData(self::Delivery_State, $deliveryState);
    }

    /**
     * Get Delivery Postcode.
     *
     * @return int
     */
    public function getDeliveryPostcode()
    {
        return $this->getData(self::Delivery_Postcode);
    }

    /**
     * Set Delivery Postcode.
     *
     * @param int|null $deliveryState
     * @return $this
     */
    public function setDeliveryPostcode($deliveryPostcode)
    {
        return $this->setData(self::Delivery_Postcode, $deliveryPostcode);
    }

    /**
     * Get Credit Limit.
     *
     * @return int
     */
    public function getCreditLimit()
    {
        return $this->getData(self::Credit_Limit);
    }

    /**
     * Set Credit Limit.
     *
     * @param int|null $creditLimit
     * @return $this
     */
    public function setCreditLimit($creditLimit)
    {
        return $this->setData(self::Credit_Limit, $creditLimit);
    }

    /**
     * Get No Of Pest Technicians.
     *
     * @return int
     */
    public function getNoOfPestTechnicians()
    {
        return $this->getData(self::No_Of_Pest_Technicians);
    }

    /**
     * Set No Of Pest Technicians.
     *
     * @param int|null $noOfPestTechnicians
     * @return $this
     */
    public function setNoOfPestTechnicians($noOfPestTechnicians)
    {
        return $this->setData(self::No_Of_Pest_Technicians, $noOfPestTechnicians);
    }

    /**
     * Get Post Management Services.
     *
     * @return string
     */
    public function getPostManagementServices()
    {
        return $this->getData(self::Pest_Management_Services);
    }

    /**
     * Set Post Management Services.
     *
     * @param string $postManagementServices
     * @return $this
     */
    public function setPostManagementServices($postManagementServices)
    {
        return $this->setData(self::Pest_Management_Services, $postManagementServices);
    }

    /**
     * Get Ref Address.
     *
     * @return string
     */
    public function getRefAddress()
    {
        return $this->getData(self::Ref_Address);
    }

    /**
     * Set Ref Address.
     *
     * @param string $refAddress
     * @return $this
     */
    public function setRefAddress($refAddress)
    {
        return $this->setData(self::Ref_Address, $refAddress);
    }

    /**
     * Get Ref Name.
     *
     * @return string
     */
    public function getRefName()
    {
        return $this->getData(self::Ref_Name);
    }

    /**
     * Set Ref Name.
     *
     * @param string $refName
     * @return $this
     */
    public function setRefName($refName)
    {
        return $this->setData(self::Ref_Name, $refName);
    }

    /**
     * Get Ref Email.
     *
     * @return string
     */
    public function getRefEmail()
    {
        return $this->getData(self::Ref_Email);
    }

    /**
     * Set Ref Email.
     *
     * @param string $refEmail
     * @return $this
     */
    public function setRefEmail($refEmail)
    {
        return $this->setData(self::Ref_Email, $refEmail);
    }

    /**
     * Get Ref Phone.
     *
     * @return int
     */
    public function getRefPhone()
    {
        return $this->getData(self::Ref_Phone);
    }

    /**
     * Set Ref Phone.
     *
     * @param int|null $refPhone .
     * @return $this
     */
    public function setRefPhone($refPhone)
    {
        return $this->setData(self::Ref_Phone, $refPhone);
    }

    /**
     * Get Trade Ref Name.
     *
     * @return string
     */
    public function getTradeRefName()
    {
        return $this->getData(self::Trade_Ref_Name);
    }

    /**
     * Set Trade Ref Name.
     *
     * @param string $tradeRefName
     * @return $this
     */
    public function setTradeRefName($tradeRefName)
    {
        return $this->setData(self::Trade_Ref_Name, $tradeRefName);
    }

    /**
     * Get Trade Ref Address.
     *
     * @return string
     */
    public function getTradeRefAddress()
    {
        return $this->getData(self::Trade_Ref_Address);
    }

    /**
     * Set Trade Ref Address.
     *
     * @param string $tradeRefAddress
     * @return $this
     */
    public function setTradeRefAddress($tradeRefAddress)
    {
        return $this->setData(self::Trade_Ref_Address, $tradeRefAddress);
    }

    /**
     * Get Trade Ref Email.
     *
     * @return string
     */
    public function getTradeRefEmail()
    {
        return $this->getData(self::Trade_Ref_Email);
    }

    /**
     * Set Trade Ref Email.
     *
     * @param string $tradeRefEmail
     * @return $this
     */
    public function setTradeRefEmail($tradeRefEmail)
    {
        return $this->setData(self::Trade_Ref_Email, $tradeRefEmail);
    }

    /**
     * Get Trade Ref Phone.
     *
     * @return int
     */
    public function getTradeRefPhone()
    {
        return $this->getData(self::Trade_Ref_Phone);
    }

    /**
     * Set Trade Ref Phone.
     *
     * @param int|null $tradeRefPhone .
     * @return $this
     */
    public function setTradeRefPhone($tradeRefPhone)
    {
        return $this->setData(self::Trade_Ref_Phone, $tradeRefPhone);
    }
}