<?php

declare(strict_types=1);

namespace Ws\SimpleMetricsStatsBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class SimpleMetricsStatsExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
//        $configuration = new Configuration();
//        $config = $this->processConfiguration($configuration, $configs);
//
//        $container->setParameter('search_replace.config_files', $config['config_files']);
//        $container->setParameter('search_replace.tables', $config['tables']);
//        $container->setParameter('search_replace.backup_enabled', $config['backup_enabled']);

        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../../config'));
        $loader->load('services.yaml');
    }
}
