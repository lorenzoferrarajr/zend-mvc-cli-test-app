<?php

namespace Consumer;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
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
            'user resetpassword [--verbose|-v] EMAIL' => 'Reset password for a user',

            // Describe expected parameters
            [ 'EMAIL',        'Email of the user for a password reset' ],
            [ '--verbose|-v', '(optional) turn on verbose mode'        ],
        ];
    }

    public function getConsoleBanner(Console $console)
    {
        return 'Consumer '.self::VERSION;
    }
}