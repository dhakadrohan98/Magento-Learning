<?php

namespace Sigma\EnquiryForm\Model;

use Sigma\EnquiryForm\Api\Data\GridInterface;

//Represents a single entity or business object.
//Contains business logic and data related to a specific entity.

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'sigma_enquiry_form';

    /**
     * @var string
     */
    protected $_cacheTag = 'sigma_enquiry_form';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'sigma_enquiry_form';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Sigma\EnquiryForm\Model\ResourceModel\Grid');
    }

    /**
     * Get Id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Set Id.
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id); //setData method required arguments in key-value form
    }

    /**
     * Get Subject
     *
     * @return varchar
     */
    public function getSubject()
    {
        return $this->getData(self::SUBJECT);
    }

    /**
     * Set Subject.
     */
    public function setSubject($subject)
    {
        return $this->setData(self::SUBJECT, $subject);
    }

    /**
     * Get Description.
     *
     * @return varchar
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * Set Description.
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * Get Phone Number.
     *
     * @return varchar
     */
    public function getPhoneNumber()
    {
        return $this->getData(self::PHONE_NUMBER);
    }

    /**
     *  Set Phone Number
     */
    public function setPhoneNumber($phoneNumber)
    {
        return $this->setData(self::PHONE_NUMBER, $phoneNumber);
    }

    /**
     * Get Email.
     *
     * @return varchar
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * Set Email.
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }
}
