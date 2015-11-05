<?php
/**
 * @author 		VanCK

 */
namespace User\Controller\Plugin;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class UserFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $sl
     * @return \User\Controller\Plugin\User
     */
    public function createService(ServiceLocatorInterface $cpm)
    {
        /* @var $cpm \Zend\Mvc\Controller\PluginManager */
        $userPlugin = new User();
        $userPlugin->setServiceUser($cpm->getServiceLocator()->get('User\Service\User'));
        return $userPlugin;
    }
}