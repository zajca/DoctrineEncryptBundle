<?php

declare(strict_types=1);

namespace Zajca\Bundle\EncryptBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * DoctrineMigrationsExtension.
 */
class ZajcaEncryptExtension extends Extension
{
    
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        // Create configuration object
        $configuration = new Configuration;
        $config = $this->processConfiguration($configuration, $configs);
        
        // Set parameters
        $container->setParameter('zajca_doctrine_encrypt.secret_key', $config['secret_key']);
        // Load service file
        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.xml');
    }
    
    /**
     * Get alias for configuration
     *
     * @return string
     */
    public function getAlias()
    {
        return 'zajca_doctrine_encrypt';
    }
}
