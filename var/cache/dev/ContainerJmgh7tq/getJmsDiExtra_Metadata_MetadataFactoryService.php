<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_di_extra.metadata.metadata_factory' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\MetadataFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\AdvancedMetadataFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\MetadataFactory.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Driver\\DriverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Driver\\LazyLoadingDriver.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Cache\\CacheInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Cache\\FileCache.php';

$this->services['jms_di_extra.metadata.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_di_extra.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);

$instance->setCache(new \Metadata\Cache\FileCache(($this->targetDirs[0].'/jms_diextra/metadata')));

return $instance;
