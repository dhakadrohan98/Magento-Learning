<?php

namespace Sigma\CustomAdminGrid\Plugin;

use Magento\Contact\Controller\Index\Post;
use Sigma\CustomAdminGrid\Model\ContactRepository;

class SaveContact
{

    public function __construct(
        private ContactRepository $contactRepository,
    ) {}

    public function afterExecute(Post $subject, $result)
    {
        $post = $subject->getRequest()->getPostValue();

        if ($post) {
            $contactModel = $this->contactRepository->create();
            $contactModel->setData([
            'name' => $post['name'],
            'email' => $post['email'],
            'subject' => $post['subject'],
            'detailed_description' => $post['detailed_description'],
            'telephone' => $post['telephone'],
            'comment' => $post['comment'],
            ]);
            $this->contactRepository->save($contactModel);
        }

        return $result;
    }
}
