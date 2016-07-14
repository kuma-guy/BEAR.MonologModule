<?php
/**
 * This file is part of the BEAR.MonologModule package
 *
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
namespace BEAR\MonologModule;

use BEAR\AppMeta\AbstractAppMeta;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Ray\Di\InjectionPointInterface;
use Ray\Di\ProviderInterface;

class MonologLoggerProvider implements ProviderInterface
{
    /**
     * @var AbstractAppMeta
     */
    private $appMeta;

    /**
     * @var InjectionPointInterface
     */
    private $ip;

    /**
     * @param AbstractAppMeta         $appMeta
     * @param InjectionPointInterface $ip
     */
    public function __construct(AbstractAppMeta $appMeta, InjectionPointInterface $ip)
    {
        $this->appMeta = $appMeta;
        $this->ip = $ip;
    }

    public function get()
    {
        $logger = new Logger($this->ip->getClass()->getName());
        $logger->pushHandler(new StreamHandler($this->appMeta->logDir . '/'. date('Y-m-d') . '.log'));

        return $logger;
    }
}
