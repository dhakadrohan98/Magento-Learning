<?php

namespace Sigma\EnquiryForm\Api\Data;

interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ID = 'id';
    const SUBJECT = 'subject';
    const DESCRIPTION = 'description';
    const PHONE_NUMBER = 'phone_number';
    const EMAIL = 'email';

    /**
     * Get Id.
     *
     * @return int
     */
    public function getId();

    /**
     * Set Id.
     */
    public function setId($id);

    /**
     * Get Subject
     *
     * @return varchar
     */
    public function getSubject();

    /**
     * Set Subject
     */
    public function setSubject($subject);

    /**
     * Get Description.
     *
     * @return varchar
     */
    public function getDescription();

    /**
     * Set Description.
     */
    public function setDescription($description);

    /**
     * Get Phone Number.
     *
     * @return varchar
     */
    public function getPhoneNumber();

    /**
     *  Set Phone Number
     */
    public function setPhoneNumber($phoneNumber);

    /**
     * Get Email.
     *
     * @return varchar
     */
    public function getEmail();

    /**
     * Set Email.
     */
    public function setEmail($email);
}
