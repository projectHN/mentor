<?php
/**
 * @author 		VanCK

 */
namespace User\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class UserFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $sl
     * @return \User\Service\User
     */
    public function createService(ServiceLocatorInterface $sl)
    {
        $service = new User();
        $service->setAuthService($sl->get('User\Service\Auth'));
        return $service;
    }
}