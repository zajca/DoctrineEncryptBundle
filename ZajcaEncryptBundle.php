<?php


namespace Zajca\Bundle\EncryptBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Zajca\Bundle\EncryptBundle\DependencyInjection\ZajcaEncryptExtension;

/**
 * Bundle.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
class ZajcaEncryptBundle extends Bundle
{
    
    public function getContainerExtension()
    {
        return new ZajcaEncryptExtension;
    }
}
