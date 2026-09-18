<?php

declare(strict_types=1);

namespace Ws\SimpleMetricsStatsBundle\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'simple_metrics_stats:simple_stat', description: 'Hello PhpStorm')]
class SimpleStatCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $io->title('Simple Metrics Stats !');

        return Command::SUCCESS;
    }
}
