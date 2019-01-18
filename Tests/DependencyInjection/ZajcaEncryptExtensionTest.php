<?php

declare(strict_types=1);

namespace Doctrine\Bundle\MigrationsBundle\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use function sys_get_temp_dir;
use Zajca\Bundle\EncryptBundle\DependencyInjection\ZajcaEncryptExtension;

class ZajcaEncryptExtensionTest extends TestCase
{
    
    public function testOrganizeMigrations(): void
    {
        $container = $this->getContainer();
        $extension = new ZajcaEncryptExtension;
        
        $config = ['secret_key' => null];
        
        try {
            $extension->load(['zajca_doctrine_encrypt' => $config], $container);
        } catch (\Exception $e) {
            return;
        }
        
        $this->fail('Configuration should fail without key');
    }
    
    private function getContainer(): ContainerBuilder
    {
        return new ContainerBuilder(
            new ParameterBag(
                [
                    'kernel.debug'       => false,
                    'kernel.bundles'     => [],
                    'kernel.cache_dir'   => sys_get_temp_dir(),
                    'kernel.environment' => 'test',
                    'kernel.root_dir'    => __DIR__ . '/../../', // src dir
                ]
            )
        );
    }
}
