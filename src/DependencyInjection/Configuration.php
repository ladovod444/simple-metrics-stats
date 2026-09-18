<?php

declare(strict_types=1);

namespace Ws\SimpleMetricsStatsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('simple_metrics_stats');

        $treeBuilder->getRootNode()
            ->children()
            ->arrayNode('config_files')
            ->info('Список файлов конфигов для поиска и замены')
            ->scalarPrototype()->end()
            ->defaultValue([
                '%kernel.project_dir%/.env',
                '%kernel.project_dir%/.env.local',
            ])
            ->end()
            ->arrayNode('tables')
            ->info('Таблицы и их колонки для обработки в БД')
            ->useAttributeAsKey('table_name')
            ->arrayPrototype()
            ->children()
            ->arrayNode('columns')
            ->scalarPrototype()->end()
            ->isRequired()
            ->end()
            ->booleanNode('has_serialized')
            ->info('Есть ли в колонках JSON/serialize данные')
            ->defaultFalse()
            ->end()
            ->end()
            ->end()
            ->defaultValue([])
            ->end()
            ->booleanNode('backup_enabled')
            ->info('Делать ли бэкап перед заменой')
            ->defaultTrue()
            ->end()
            ->end();

        return $treeBuilder;
    }
}
