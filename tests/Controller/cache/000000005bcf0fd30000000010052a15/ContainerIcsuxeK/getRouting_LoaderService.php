<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

$a = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->targetDirs[2].'/Resources'), array(0 => $this->targetDirs[2]));

$b = new \Symfony\Component\Config\Loader\LoaderResolver();
$b->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
$b->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
$b->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
$b->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($a));
$b->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($a));
$b->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)))), $b);
