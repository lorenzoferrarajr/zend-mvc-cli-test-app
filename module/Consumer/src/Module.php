<?php

namespace Consumer;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ConsoleBannerProviderInterface;
use Zend\ModuleManager\Feature\ConsoleUsageProviderInterface;
use Zend\Console\Adapter\AdapterInterface as Console;

class Module implements ConfigProviderInterface, ConsoleUsageProviderInterface, ConsoleBannerProviderInterface
{
    const VERSION = '0.0.1';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getConsoleUsage(Console $console)
    {
        return [
            // Describe available commands
            'foo bar' => 'Shows hello world',
        ];
    }

    public function getConsoleBanner(Console $console)
    {
        return 'Consumer '.self::VERSION;
    }
}