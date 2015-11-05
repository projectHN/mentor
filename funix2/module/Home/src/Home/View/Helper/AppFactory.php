<?php
/**
 * @author      VanCK

 */
namespace Home\View\Helper;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class AppFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $hpm
     * @return \Home\View\Helper\App
     */
    public function createService(ServiceLocatorInterface $hpm)
    {
        /* @var $hpm \Zend\View\HelperPluginManager */
        $helper = new \Home\View\Helper\App();

        $helper->setServiceLocator($hpm->getServiceLocator());
        return $helper;
    }
}