<?php
namespace BookList;

class Module
{
	
	public function getAutoloaderConfig()
	{
		return array(
			'Zend\Loader\ClassMapAutoloader' => array(
					__DIR__ . '/autoload_classmap.php',
				),
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
					__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
				),
			),
		);
	}
	
	//определяет как мы загружаем классы в нашем модуле
	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}
}