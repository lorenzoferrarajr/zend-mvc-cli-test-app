<?php
namespace Consumer\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class ConsumerController extends AbstractActionController
{
    public function helloWorldAction()
    {
        var_dump('Hello, World!');
        return 'Hello, World!';
    }
}