<?php
/**
 * This file is part of the BEAR.MonologModule package
 *
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
namespace BEAR\MonologModule;

use Psr\Log\LoggerInterface;
use Ray\Di\AbstractModule;
use Ray\Di\Scope;

class MonologModule extends AbstractModule
{
    protected function configure()
    {
        $this->bind(LoggerInterface::class)->toProvider(MonologLoggerProvider::class)->in(Scope::SINGLETON);
    }
}
