<?php

namespace Sigma\CustomAdminGrid\Model;
use Sigma\CustomAdminGrid\Model\ResourceModel\Contact as ContactResourceModel;
use Sigma\CustomAdminGrid\Model\Contact;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception;

class ContactRepository
{

    public function __construct(
        private ContactFactory $contactFactory,
        private ContactResourceModel $contactResourceModel,
    ) {}

    public function getById($id)
    {
        $contact = $this->contactFactory->create();
        $this->contactResourceModel->load($contact, $id);

        if(!$contact->getId()){
            throw new NoSuchEntityException(__('The Contact form details with "%1" ID does not exist.', $id));
        }

        return $contact;
    }

    public function save(Contact $contact)
    {
        try {
            $this->contactResourceModel->save($contact);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $contact;
    }

    public function deleteById($id)
    {
        $contact = $this->getById($id);
        try {
            $this->contactResourceModel->delete($contact);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

}
