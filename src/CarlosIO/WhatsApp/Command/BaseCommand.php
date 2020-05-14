<?php
namespace CarlosIO\WhatsApp\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class BaseCommand extends Command
{
    protected function configure()
    {
        $this
            ->addArgument('sender',   InputArgument::REQUIRED, '+491732815997')
            ->addArgument('imei',     InputArgument::REQUIRED, '356626092844606')
            ->addArgument('nickname', InputArgument::REQUIRED, '');
    }
}
