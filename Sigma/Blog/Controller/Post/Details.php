<?php declare(strict_types=1);

namespace Sigma\Blog\Controller\Post;

use Magento\Customer\Model\Session;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ObjectManager;

class Details implements HttpGetActionInterface
{
    public function execute()
    {
        //it is not good practice to create instance of a class using ObjectManager, it is just for knowledge
        $object = ObjectManager::getInstance();
        //getting data of current logged-in customer
        $session = $object->get(Session::class);
        echo '<pre>';
        var_dump($session->getData());
        die();
        // die("Blog post list");
    }
}