<?php
/**
 * Created by PhpStorm.
 * User: webby
 * Date: 15/09/2018
 * Time: 3:07 AM
 */

namespace KnpU\LoremIpsumBundle;


use KnpU\LoremIpsumBundle\DependencyInjection\KnpULoremIpsumExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class KnpULoremIpsumBundle extends Bundle
{
    public function getContainerExtension()
    {
       if (null === $this->extension) {
           $this->extension = new KnpULoremIpsumExtension();
       }

       return $this->extension;
    }


}