<?php

declare(strict_types=1);

namespace Sigma\CompanyAccount\Api\Data;

use Aheadworks\Ca\Api\Data\CompanyInterface;

interface CompanyAccountInterface extends CompanyInterface
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
    public function getBusinessStructure();

    /**
     * Set Business Structure
     *
     * @param string $businessStructure
     * @return $this
     */
    public function setBusinessStructure($businessStructure);

    /**
     * Get ABN.
     *
     * @return string
     */
    public function getAbn();

    /**
     * Set ABN.
     *
     * @param string $abn
     * @return $this
     */
    public function setAbn($abn);

    /**
     * Get ACN.
     *
     * @return string
     */
    public function getAcn();

    /**
     * Set ACN.
     *
     * @param string $acn
     * @return $this
     */
    public function setAcn($acn);

    /**
     * Get Business Phone Number.
     *
     * @return int
     */
    public function getBusinessPhoneNumber();

    /**
     * Set Business Phone Number.
     *
     * @param int|null $businessPhoneNumber
     * @return $this
     */
    public function setBusinessPhoneNumber($businessPhoneNumber);

    /**
     * Get Billing Address.
     *
     * @return string
     */
    public function getBillingAddress();

    /**
     * Set Business Address.
     *
     * @param string $billingAddress
     * @return $this
     */
    public function setBillingAddress($billingAddress);

    /**
     * Get Billing State.
     *
     * @return string
     */
    public function getBillingState();

    /**
     * Set Billing State.
     *
     * @param string $billingState
     * @return $this
     */
    public function setBillingState($billingState);

    /**
     * Get Billing Postcode.
     *
     * @return int
     */
    public function getBillingPostcode();

    /**
     * Set Billing Postcode.
     *
     * @param int|null $billingPostcode
     * @return $this
     */
    public function setBillingPostcode($billingPostcode);

    /**
     * Get Delivery Address.
     *
     * @return string
     */
    public function getDeliveryAddress();

    /**
     * Set Delivery Address.
     *
     * @param string $deliveryAddress
     * @return $this
     */
    public function setDeliveryAddress($deliveryAddress);

    /**
     * Get Delivery State.
     *
     * @return string
     */
    public function getDeliveryState();

    /**
     * Set Delivery State.
     *
     * @param string $deliveryState
     * @return $this
     */
    public function setDeliveryState($deliveryState);

    /**
     * Get Delivery Postcode.
     *
     * @return int
     */
    public function getDeliveryPostcode();

    /**
     * Set Delivery Postcode.
     *
     * @param int|null $deliveryState
     * @return $this
     */
    public function setDeliveryPostcode($deliveryPostcode);

    /**
     * Get Credit Limit.
     *
     * @return int
     */
    public function getCreditLimit();

    /**
     * Set Credit Limit.
     *
     * @param int|null $creditLimit
     * @return $this
     */
    public function setCreditLimit($creditLimit);

    /**
     * Get No Of Pest Technicians.
     *
     * @return int
     */
    public function getNoOfPestTechnicians();

    /**
     * Set No Of Pest Technicians.
     *
     * @param int|null $noOfPestTechnicians
     * @return $this
     */
    public function setNoOfPestTechnicians($noOfPestTechnicians);

    /**
     * Get Post Management Services.
     *
     * @return string
     */
    public function getPostManagementServices();

    /**
     * Set Post Management Services.
     *
     * @param string $postManagementServices
     * @return $this
     */
    public function setPostManagementServices($postManagementServices);

    /**
     * Get Ref Address.
     *
     * @return string
     */
    public function getRefAddress();

    /**
     * Set Ref Address.
     *
     * @param string $refAddress
     * @return $this
     */
    public function setRefAddress($refAddress);

    /**
     * Get Ref Name.
     *
     * @return string
     */
    public function getRefName();

    /**
     * Set Ref Name.
     *
     * @param string $refName
     * @return $this
     */
    public function setRefName($refName);

    /**
     * Get Ref Email.
     *
     * @return string
     */
    public function getRefEmail();

    /**
     * Set Ref Email.
     *
     * @param string $refEmail
     * @return $this
     */
    public function setRefEmail($refEmail);

    /**
     * Get Ref Phone.
     *
     * @return int
     */
    public function getRefPhone();

    /**
     * Set Ref Phone.
     *
     * @param int|null $refPhone.
     * @return $this
     */
    public function setRefPhone($refPhone);

    /**
     * Get Trade Ref Name.
     *
     * @return string
     */
    public function getTradeRefName();

    /**
     * Set Trade Ref Name.
     *
     * @param string $tradeRefName
     * @return $this
     */
    public function setTradeRefName($tradeRefName);

    /**
     * Get Trade Ref Address.
     *
     * @return string
     */
    public function getTradeRefAddress();

    /**
     * Set Trade Ref Address.
     *
     * @param string $tradeRefAddress
     * @return $this
     */
    public function setTradeRefAddress($tradeRefAddress);

    /**
     * Get Trade Ref Email.
     *
     * @return string
     */
    public function getTradeRefEmail();

    /**
     * Set Trade Ref Email.
     *
     * @param string $tradeRefEmail
     * @return $this
     */
    public function setTradeRefEmail($tradeRefEmail);

    /**
     * Get Trade Ref Phone.
     *
     * @return int
     */
    public function getTradeRefPhone();

    /**
     * Set Trade Ref Phone.
     *
     * @param int|null $tradeRefPhone.
     * @return $this
     */
    public function setTradeRefPhone($tradeRefPhone);

}