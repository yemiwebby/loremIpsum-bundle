<?php
/**
 * Created by PhpStorm.
 * User: webby
 * Date: 15/09/2018
 * Time: 3:07 AM
 */

namespace KnpU\LoremIpsumBundle;


use KnpU\LoremIpsumBundle\DependencyInjection\Compiler\WordProviderCompilerPass;
use KnpU\LoremIpsumBundle\DependencyInjection\KnpULoremIpsumExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class KnpULoremIpsumBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new WordProviderCompilerPass());
    }

    public function getContainerExtension()
    {
       if (null === $this->extension) {
           $this->extension = new KnpULoremIpsumExtension();
       }

       return $this->extension;
    }


}