<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_aop.interceptor_loader' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\cg\\src\\CG\\Proxy\\InterceptorLoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\aop-bundle\\Aop\\InterceptorLoader.php';

return $this->services['jms_aop.interceptor_loader'] = new \JMS\AopBundle\Aop\InterceptorLoader($this, []);
