<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_di_extra.controller_injectors_warmer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\di-extra-bundle\\HttpKernel\\ControllerInjectorsWarmer.php';

return $this->services['jms_di_extra.controller_injectors_warmer'] = new \JMS\DiExtraBundle\HttpKernel\ControllerInjectorsWarmer(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ${($_ = isset($this->services['jms_di_extra.controller_resolver']) ? $this->services['jms_di_extra.controller_resolver'] : $this->getJmsDiExtra_ControllerResolverService()) && false ?: '_'}, [], false, $this->parameters['jms_di_extra.bundles']);
